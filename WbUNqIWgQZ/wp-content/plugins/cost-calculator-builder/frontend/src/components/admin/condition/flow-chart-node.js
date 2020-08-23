export default {
    props: {
        id: {
            type: Number,
            default: 1000,
            validator(val) {
                return typeof val === 'number'
            }
        },
        x: {
            type: Number,
            default: 0,
            validator(val) {
                return typeof val === 'number'
            }
        },

        calculable: Boolean,

        y: {
            type: Number,
            default: 0,
            validator(val) {
                return typeof val === 'number'
            }
        },
        label: {
            type: String,
            default: 'input name'
        },

        icon: {
            type: String,
            default: ''
        },
        options: {
            type: Object,
            default() {
                return {
                    centerX: 1024,
                    scale: 1,
                    centerY: 140,
                }
            }
        }
    },

    data() {
        return {
            responsive: {
                1920: 1150,
                1600: 837,
                1440: 717,
                1220: 505,
            },
            show: {
                delete: false,
            }
        }
    },
    mounted() {

    },
    computed: {
        nodeStyle() {
            let left = (this.options.centerX + this.x * this.options.scale);
            let responsive = this.getResponsive();
            if(left < 7) left = 7;
            if(left > +responsive) left = responsive;

            let top = this.options.centerY + this.y * this.options.scale;
            if(top < 7) top = 7;
            if(top > 438) top = 438;

            this.$emit('update');
            return {
                top: top + 'px', // remove: this.options.offsetTop +
                left: left + 'px', // remove: this.options.offsetLeft +
                transform: ` translate(-${this.left}px, -${this.top}px) scale(${this.options.scale})`,
            }
        }
    },

    methods: {

        getResponsive() {
            let responsive,  width = window.outerWidth;
            if (width >= 1920 || 1741 <= width){
                responsive = this.responsive[1920];
            }
            else if (width <= 1740 && 1601 <= width){
                responsive = this.responsive[1740];
            }

            else if (width <= 1600 && 1441 <= width){
                responsive = this.responsive[1600];
            }

            else if (width <= 1440 && 1221 <= width){
                responsive = this.responsive[1440];
            }

            else if (width <= 1220){
                responsive = this.responsive[1220];
            }
            return responsive;

        },

        handleMousedown(e) {
            if(e){
                const target = e.target || e.srcElement;
                if (target.className.indexOf('no-draggable') === -1 && target.className.indexOf('node-input') < 0 && target.className.indexOf('node-output') < 0) {
                    this.$emit('nodeSelected', e);
                }
                e.preventDefault();
            }
        },
        outputMouseDown(e) {
            this.$emit('linkingStart');
            e.preventDefault();
        },
        inputMouseDown(e) {
            e.preventDefault();
        },
        inputMouseUp(e) {
            this.$emit('linkingStop');
            e.preventDefault();
        },
    },

    filters: {
        'to-short': (value) => {
            if(value.length >= 33) {
                return value.substring(0, 30) + '...';
            }
            return value;
        },
    },

    template: `
               
               <div class="ccb-c-rectangle" :style="nodeStyle" @mousedown="inputMouseDown"  @mouseup="inputMouseUp" @mousedown="handleMousedown" v-bind:class="{selected: options.selected === id}">
                    <div class="ccb-c-rectangle-item">
                        <span :class="icon"></span>
                        <span>
                            {{label | to-short}}                            
                        </span>
                    </div>
                    <i class="far fa-times-circle node-delete ccb-node-btn ccb-delete"></i>     
                    <div class="ccb-node-btn no-draggable node-port node-output" @mousedown="inputMouseDown" @mouseup="inputMouseUp"  @click="outputMouseDown" v-if="calculable"></div>
                    <div class="node-port node-input" @mousedown="inputMouseDown" @mouseup="inputMouseUp"></div>
                </div>

    `
}