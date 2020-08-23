import VueColor from '@libs/vue/vue-color.min'
export default {
    components: {
        'sketch-picker': VueColor.Chrome
    },
    props: ['field'],
    data() {
        return {
            colors: {
                hex: '#000000',
            },
            colorValue: '',
            displayPicker: false,
        }
    },
    mounted() {
        this.colorValue = this.field.default;
    },
    methods: {
        setColor(color) {
            this.updateColors(color);
            this.colorValue = color;
        },
        updateColors(color) {
            if(color.slice(0, 1) == '#') {
                this.colors = {
                    hex: color
                };
            }
            else if(color.slice(0, 4) == 'rgba') {
                var rgba = color.replace(/^rgba?\(|\s+|\)$/g,'').split(','),
                    hex = '#' + ((1 << 24) + (parseInt(rgba[0]) << 16) + (parseInt(rgba[1]) << 8) + parseInt(rgba[2])).toString(16).slice(1);
                this.colors = {
                    hex: hex,
                    a: rgba[3],
                }
            }
        },
        showPicker() {
            document.addEventListener('click', this.documentClick);
            this.displayPicker = true;
        },
        hidePicker() {
            document.removeEventListener('click', this.documentClick);
            this.displayPicker = false;
        },
        togglePicker() {
            this.displayPicker ? this.hidePicker() : this.showPicker();
        },
        updateFromInput() {
            this.updateColors(this.colorValue);
        },
        updateFromPicker(color) {
            this.colors = color;
            if(color.rgba.a == 1) {
                this.colorValue = color.hex;
            }
            else {
                this.colorValue = 'rgba(' + color.rgba.r + ', ' + color.rgba.g + ', ' + color.rgba.b + ', ' + color.rgba.a + ')';
            }
        },
        documentClick(e) {
            var el = this.$refs.colorpicker,
                target = e.target;
            if(el !== target && !el.contains(target)) {
                this.hidePicker()
            }
        },
        clear: function() {
            this.colorValue = "";
            this.field.value = "";
            this.field.__ob__.dep.notify()
        }
    },
    watch: {
        colorValue(val) {
            if(val) {
                this.updateColors(val);
                this.field.value = val;
                this.$emit('changed', null, null, val);
                this.field.__ob__.dep.notify()
            }
        }
    },

    template:`
		<div class="ccb-color-picer m-b-15">
			<label>{{field.label}}</label>
			<div class="input-group color-picker" ref="colorpicker">
				<span class="form-control color-picker-container" :style="'background-color: ' + colorValue" @click="togglePicker()"> </span>
				<sketch-picker :value="colors" @input="updateFromPicker" v-if="displayPicker"></sketch-picker>
				
				<div class="input-group-append">
					<button type="button" class="btn btn-light" @click="clear()">
                        <i class="fa fa-times-circle" aria-hidden="true"></i>
					</button>
				 </div>
			</div>
		</div>
	`,
}