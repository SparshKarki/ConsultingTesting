<div class="ccb-footer" :class="{show: !disabled}">
    <div class="ccb-footer-buttons">
        <div class="calc-buttons calc-footer">
            <button type="button" @click.prevent="saveSettings">
                <?php echo __('SAVE', 'cost-calculator-builder')?>
            </button>
            <button type="button" @click.prevnet="cancel">
                <?php echo __('Cancel', 'cost-calculator-builder')?>
            </button>
            <button type="button" @click.prevent="openPreview">
                <?php echo __('PREVIEW', 'cost-calculator-builder')?>
            </button>
        </div>

        <div class="calc-other calc-footer">
            <div class="short-code-desc">
                <div class="ccb-tooltip" @click.prevent="copyText($store.getters.getId)"  @mouseleave="copy.text = 'Copy'">
                    <h6><?php echo __('Shortcode', 'cost-calculator-builder')?></h6>
                    <p><?php echo __('Click to copy', 'cost-calculator-builder')?></p>
                    <span class="ccb-tooltip-text">{{copy.text}}</span>
                </div>
            </div>
            <div class="short-code ccb-tooltip">
                <p @click.prevent="copyText($store.getters.getId)"  @mouseleave="copy.text = 'Copy'">[stm-calc id="{{$store.getters.getId}}"]</p>
                <input :type="copy.type" class="calc-short-code" :data-id="$store.getters.getId" :value='`[stm-calc id="` + $store.getters.getId +`"]`'>
                <span class="ccb-tooltip-text">{{copy.text}}</span>
            </div>
        </div>
    </div>
</div>