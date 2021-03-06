import flowChartLink from './flow-chart-link';
import flowChartNode from './flow-chart-node';

export default {
    props: {
        scene: {
            type: Object,
            default() {
                return {
                    centerX: 1024,
                    scale: 1,
                    centerY: 140,
                    nodes: [],
                    links: [],
                }
            }
        },
        modal: {
            type: Boolean,
            default: false
        },
        height: {
            type: Number,
            default: 400,
        },
    },

    components: {
        'flow-chart-link': flowChartLink,
        'flow-chart-node': flowChartNode,
    },

    data() {
        return {
            action: {
                linking: false,
                dragging: false,
                scrolling: false,
                selected: 0,
            },
            mouse: {
                x: 0,
                y: 0,
                lastX: 0,
                lastY: 0,
            },
            draggingLink: null,
            rootDivOffset: {
                top: 0,
                left: 0
            },
        };
    },

    computed: {

        hasCancelListener(){
            return this.$listeners && this.$listeners.linkEdit
        },

        nodeOptions() {
            return {
                centerY: this.scene.centerY,
                centerX: this.scene.centerX,
                scale: this.scene.scale,
                offsetTop: this.rootDivOffset.top,
                offsetLeft: this.rootDivOffset.left,
                selected: this.action.selected,
            }
        },
        lines() {
            const lines = this.scene.links.map((link) => {
                const fromNode = this.findNodeWithID(link.from)
                const toNode = this.findNodeWithID(link.to)
                let x, y, cy, cx, ex, ey;
                x = this.scene.centerX + fromNode.x;
                y = this.scene.centerY + fromNode.y;
                [cx, cy] = this.getPortPosition('bottom', x, y);
                x = this.scene.centerX + toNode.x;
                y = this.scene.centerY + toNode.y;
                [ex, ey] = this.getPortPosition('top', x, y);
                return {
                    start: [cx, cy],
                    end: [ex, ey],
                    id: link.id,
                };
            });

            if (this.draggingLink) {
                let x, y, cy, cx;
                const fromNode = this.findNodeWithID(this.draggingLink.from)
                x = this.scene.centerX + fromNode.x;
                y = this.scene.centerY + fromNode.y;
                [cx, cy] = this.getPortPosition('bottom', x, y);
                // push temp dragging link, mouse cursor postion = link end postion
                lines.push({
                    start: [cx, cy],
                    end: [this.draggingLink.mx, this.draggingLink.my],
                })
            }

            // start-end line
            return lines;
        }
    },

    mounted() {
        this.rootDivOffset.top = this.$el ? this.$el.offsetTop : 0;
        this.rootDivOffset.left = this.$el ? this.$el.offsetLeft : 0;
    },

    methods: {

        change() {
            this.$emit('update');
        },

        getOffsetRect(element) {
            let box = element.getBoundingClientRect();

            let scrollTop = window.pageYOffset + 40;
            let scrollLeft = window.pageXOffset - 40;

            let top = box.top + scrollTop;
            let left = box.left + scrollLeft;

            return {top: Math.round(top), left: Math.round(left)}
        },
        getMousePosition(element, event) {
            let mouseX = event.pageX || event.clientX + document.documentElement.scrollLeft;
            let mouseY = event.pageY || event.clientY + document.documentElement.scrollTop;

            let offset = this.getOffsetRect(element);
            let x = mouseX - offset.left;
            let y = mouseY - offset.top;

            return [x, y];
        },

        findNodeWithID(id) {
            return this.scene.nodes.find((item) => {
                return id === item.id
            })
        },
        getPortPosition(type, x, y) {
            if (type === 'top') {
                return [x + 40, y];
            }
            else if (type === 'bottom') {
                return [x + 40, y + 80];
            }
        },
        linkingStart(index) {
            this.action.linking = true;
            let node_from = this.scene.nodes.find(node => node.id === index);
            this.draggingLink = {
                from: index,
                mx: 0,
                my: 0,
                options: node_from.options,
            };
        },
        linkingStop(index) {
            // add new Link
            if (this.draggingLink && this.draggingLink.from !== index) {
                // check link existence
                const existed = this.scene.links.find((link) => {
                    return link.from === this.draggingLink.from && link.to === index;
                })
                if (!existed) {
                    let maxID = Math.max(0, ...this.scene.links.map((link) => {
                        return link.id
                    }));

                    let node_to = this.scene.nodes.find(node => node.id === index);

                    const newLink = {
                        id: maxID + 1,
                        from: this.draggingLink.from,
                        to: index,
                        options_from: this.draggingLink.options,
                        options_to: node_to.options,
                        modal: false,
                    };
                    this.scene.links.push(newLink);
                    this.$emit('linkAdded', newLink)
                }
            }
            this.draggingLink = null
        },
        editLink(event, id, cords) {
            const vm = this;
            const editedLink = this.scene.links.find((item) => {
                return item.id === id;
            });

            if (editedLink) {
                vm.$emit('linkedit', event, editedLink, cords);
            }
        },

        nodeSelected(id, e) {
            this.action.dragging = id;
            this.action.selected = id;
            this.$emit('nodeClick', id);
            this.mouse.lastX = e.pageX || e.clientX + document.documentElement.scrollLeft
            this.mouse.lastY = e.pageY || e.clientY + document.documentElement.scrollTop
        },
        handleMove(e) {
            if (this.action.linking) {
                [this.mouse.x, this.mouse.y] = this.getMousePosition(this.$el, e);
                [this.draggingLink.mx, this.draggingLink.my] = [this.mouse.x, this.mouse.y];
            }
            if (this.action.dragging) {
                this.mouse.x = e.pageX || e.clientX + document.documentElement.scrollLeft
                this.mouse.y = e.pageY || e.clientY + document.documentElement.scrollTop
                let diffX = this.mouse.x - this.mouse.lastX;
                let diffY = this.mouse.y - this.mouse.lastY;

                this.mouse.lastX = this.mouse.x;
                this.mouse.lastY = this.mouse.y;
                this.moveSelectedNode(diffX, diffY);
            }
            if (this.action.scrolling) {
                [this.mouse.x, this.mouse.y] = this.getMousePosition(this.$el, e);
                let diffX = this.mouse.x - this.mouse.lastX;
                let diffY = this.mouse.y - this.mouse.lastY;

                this.mouse.lastX = this.mouse.x;
                this.mouse.lastY = this.mouse.y;

                this.scene.centerX += diffX;
                this.scene.centerY += diffY;

                // this.hasDragged = true
            }
        },
        handleUp(e) {
            const target = e.target || e.srcElement;
            if(target && target.tagName === 'svg') return;

            if (this.$el.contains(target)) {
                if (typeof target.className !== 'string' || target.className.indexOf('node-input') < 0) {
                    this.draggingLink = null;
                }
                if (typeof target.className === 'string' && target.className.indexOf('node-delete') > -1) {
                    this.nodeDelete(this.action.dragging);
                }
            }
            this.action.linking = false;
            this.action.dragging = null;
            this.action.scrolling = false;
        },
        handleDown(e) {
            const target = e.target || e.srcElement;
            if(target && target.tagName === 'svg') return;
            if ((target === this.$el || target.matches('svg, svg *')) && e.which === 1) {
                this.action.scrolling = true;
                [this.mouse.lastX, this.mouse.lastY] = this.getMousePosition(this.$el, e);
                this.action.selected = null; // deselectAll
            }
            this.$emit('canvasClick', e);
        },
        moveSelectedNode(dx, dy) {
            let index = this.scene.nodes.findIndex((item) => {
                return item.id === this.action.dragging
            });
            let left = this.scene.nodes[index].x + dx / this.scene.scale;
            let top = this.scene.nodes[index].y + dy / this.scene.scale;
            this.$set(this.scene.nodes, index, Object.assign(this.scene.nodes[index], {
                x: left,
                y: top,
            }));
        },
        nodeDelete(id) {
            this.scene.nodes = this.scene.nodes.filter((node) => {
                return node.id !== id;
            });
            this.scene.links = this.scene.links.filter((link) => {
                return link.from !== id && link.to !== id
            });
            this.$emit('nodeDelete', id)
        }
    },

    template: `
    
            <div class="flowchart-container"
                @mousemove="handleMove" 
                @mouseup="handleUp"
                @mousedown="handleDown">
                <svg width="100%" :height="500">
                  <flow-chart-link v-bind.sync="link" 
                    v-for="(link, index) in lines" 
                    :key="'link' + index"
                    :link="link"
                    @update="change"
                    @editLink="editLink">
                  </flow-chart-link>
                </svg>
                <flow-chart-node v-bind.sync="node" 
                  v-for="(node, index) in scene.nodes" 
                  :key="'node' + index"
                  :label="node.label"
                  :icon="node.icon"
                  @update="change"
                  :options="nodeOptions"
                  :calculable="node.calculable"
                  @linkingStart="linkingStart(node.id)"
                  @linkingStop="linkingStop(node.id)"
                  @nodeSelected="nodeSelected(node.id, $event)">
                </flow-chart-node>
            </div>
    `
}