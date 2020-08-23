export default {
    props: {
        // start point position [x, y]
        start: {
            type: Array,
            default() {
                return [0, 0]
            }
        },
        // end point position [x, y]
        end: {
            type: Array,
            default() {
                return [0, 0]
            }
        },
        modal:Boolean,
        link: Object,
        id: Number,
    },

    created() {

    },

    data() {
        return {
            show: {
                delete: false,
            },
            responsive: {
                1920: { // done √
                    ex: 1150,
                    cx: 1325,
                    x2: 1142,
                    x1: 1325,
                },

                1600: {
                    ex: 830,
                    cx: 1000,
                    x2: 829,
                    x1: 1000,
                },

                1440: {
                    ex: 710,
                    cx: 880,
                    x2: 717,
                    x1: 880,
                },

                1220: {
                    ex: 500,
                    cx: 650,
                    x2: 500,
                    x1: 650,
                },
            }
        }
    },
    methods: {

        caculateCenterPoint() {
            // caculate arrow position: the center point between start and end

            let responsive = this.getResponsive();

            let ex = this.end[0];
            if(ex - 46 > +responsive['ex']) ex = +responsive['ex'] + 46;
            if(ex - 46 < 7) ex = 7 + 46;

            let cx = this.start[0];
            if(cx + 130 > +responsive['cx']) cx = responsive['cx'] - 130;
            if(cx + 130 < 178) cx = 178 - 130;

            let ey = this.end[1];
            if(ey + 30 > 470) ey = 470 - 30;
            if(ey + 30 < 39) ey = 39 - 30;

            let cy = this.start[1];
            if(cy - 49 > 470) cy = 470 + 49;
            if(cy - 49 < 39) cy = 49 + 39;

            let start0 = cx;
            let start1 = cy;

            const dx = (ex - 46 - cx  + 130) / 2;
            const dy = (ey + 30 - cy  - 49) / 2;


            const y = start0 + dx;
            const x = ( start1 + dy ) > 39 ? ( start1 + dy ) > 467.5 ? 467.5 : start1 + dy : 39;

            return [y, x];
        },

        editLink(e) {
            this.$emit('editLink', e, this.link.id, this.caculateCenterPoint());
        },

        getResponsive(){
            let responsive = null;

            if (window.outerWidth >= 1920 || 1741 <= window.outerWidth){
                responsive = this.responsive[1920];
            }

            else if (window.outerWidth <= 1600 && 1441 <= window.outerWidth){
                responsive = this.responsive[1600];
            }

            else if (window.outerWidth <= 1440 && 1221 <= window.outerWidth){
                responsive = this.responsive[1440];
            }

            else if (window.outerWidth <= 1220){
                responsive = this.responsive[1220];
            }

            return responsive;
        }

    },


    computed: {
        pathStyle() {
            return {
                stroke: '#bdc9ca',
                strokeWidth: 2.73205,
                fill: 'none',
            };
        },
        arrowTransform() {
            const [arrowX, arrowY] = this.caculateCenterPoint();
            return `translate(${arrowX}, ${arrowY})`;
        },
        dAttr() {
            // 1245 1060 460
            let responsive = this.getResponsive();
            let cx = this.start[0] + 130, ex = this.end[0] - 46, ey = this.end[1] + 30, cy = this.start[1] - 49;
            let x1 = cx, y1 = cy - 2, x2 = ex + 10, y2 = ey;

            if(ey > 470) ey = 470;
            if(cy > 470) cy = 470;
            if(y2 > 470) y2 = 470;
            if(y1 > 468) y1 = 468;
            if(ex > +responsive['ex']) ex = +responsive['ex'];
            if(x2 > +responsive['x2']) x2 = +responsive['x2'];
            if(x1 > +responsive['x1']) x1 = +responsive['x1'];
            if(cx > +responsive['cx']) cx = +responsive['cx'];


            if(cx < 178) cx = 178;
            if(ex < 7) ex = 7;
            if(ey < 39) ey = 39;
            if(cy < 39) cy = 39;
            if(y2 < 44)  y2 = 44;
            if(y1 < 35) y1 = 35;
            if(x2 < 0) x2 = 0;
            if(x1 < 190) x1 = 190;


            this.$emit('update');
            return `M ${cx}, ${cy} C ${x1}, ${y1}, ${x2}, ${y2}, ${ex}, ${ey}`;
        },

        circleAttr(){
            return  {
                fontFamily: 'sans-serif',
                fontSize: '30px',
                fill: '#afafb3'
            };
        }
    },


    template: `
        <template>
          <g fill="none" :data-link="link.id">
            <path stroke-dasharray="5,5" :d="dAttr" :style="pathStyle"></path>
               <circle @click="editLink" cx="0" cy="0" r="19.5" fill="#fff" style="stroke-width:1px; stroke:#bdc9ca;" :transform="arrowTransform"/>
               <text class="no-draggable" @click="editLink" :style="circleAttr" :transform="arrowTransform" id="chk" x=-8.5 y=10>&#9881;</text>
          </g>
        </template>
    `,
}