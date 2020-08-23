<div class="modal-header existing">
    <div class="modal-header__title">
        <i class="fas fa-stream"></i>
        <h4><?php echo __('Existing Calculators', 'cost-calculator-builder')?></h4>
    </div>
    <div class="list-row existing">
        <div class="list-content">
            <button type="button" class="white" @click.prevent="$store.commit('updateIsExisting', false)">
                <i class="fas fa-file-import"></i>
                <span><?php echo __('Import calculators', 'cost-calculator-builder')?></span>
            </button>
        </div>
    </div>
</div>
<div class="modal-body existing">
    <template v-if="$store.getters.getIsExisting">
        <div class="existing-wrapper" >
            <div class="existing-list header">
                <div class="list-title id"><?php echo __('id', 'cost-calculator-builder')?></div>
                <div class="list-title title"><?php echo __('calculator name', 'cost-calculator-builder')?></div>
                <div class="list-title shortcode"><?php echo __('shortcode', 'cost-calculator-builder')?></div>
                <div class="list-title actions"><?php echo __('action', 'cost-calculator-builder')?></div>
            </div>
            <div class="existing-list" v-for="(calc, id) in $store.getters.getExisting">
                <div class="list-title id">{{calc.id}}</div>
                <div class="list-title title">{{calc.project_name}}</div>
                <div class="list-title shortcode">
                    <div class="ccb-tooltip" @click.prevent="copyText(calc.id)"  @mouseleave="copy.text = 'Copy'">
                        <span>[stm-calc id="{{calc.id}}"]</span>
                        <span class="ccb-tooltip-text">{{copy.text}}</span>
                        <input :type="copy.type" class="calc-short-code" :data-id="calc.id" :value='`[stm-calc id="` + calc.id +`"]`'>
                    </div>
                </div>
                <div class="list-title actions">

                    <?php
                    $url = home_url() . '/wp-admin/admin.php?page=cost_calculator_builder&action=edit&id='
                    ?>

                    <div class="ccb-tooltip action" @click="editCalc('<?php echo esc_attr($url)?>' + calc.id)">
                        <i class="fas fa-pencil-alt"></i>
                        <span class="ccb-tooltip-text"><?php echo __('Edit', 'cost-calculator-builder')?></span>
                    </div>

                    <?php
                    $custom_url = home_url() ."/wp-admin/admin.php?page=cost_calculator_custom&action=customize&id=";
                    ?>

                    <div class="ccb-tooltip action" @click.prevent="editCalc('<?php echo esc_attr($custom_url)?>' + calc.id)">
                        <i class="fas fa-sliders-h"></i>
                        <span class="ccb-tooltip-text"><?php echo __('Customize', 'cost-calculator-builder')?></span>
                    </div>

                    <div class="ccb-tooltip action" @click.prevent="duplicateCalc(calc.id)">
                        <i class="fas fa-copy"></i>
                        <span class="ccb-tooltip-text"><?php echo __('Duplicate', 'cost-calculator-builder')?></span>
                    </div>

                    <div class="ccb-tooltip action" @click.prevent="deleteCalc(calc.id)">
                        <i class="fas fa-trash-alt"></i>
                        <span class="ccb-tooltip-text"><?php echo __('Delete', 'cost-calculator-builder')?></span>
                    </div>

                </div>
            </div>
            <p v-if="!$store.getters.getExisting.length" style="text-align: center; font-size: 17px; margin: 100px auto"><?php echo __('No Calculators yet! Please create new or Import Calculators.', 'cost-calculator-builder');?></p>
        </div>
        <div class="list-row" style="margin-top: 20px">
            <div class="list-content ccb-flex">

                <div class="list-content--header">
                    <a class="green" href="<?php echo esc_url(get_site_url()) .'/wp-admin/admin-ajax.php?action=ccb_export_calc&ccb_nonce='. esc_attr(wp_create_nonce( 'ccb-export-nonce' )) ?>">
                        <i class="fas fa-file-export"></i>
                        <span><?php echo __('Export calculators', 'cost-calculator-builder')?></span>
                    </a>
                </div>
            </div>
        </div>
    </template>
    <template v-else>
        <demo-import inline-template>
            <?php
                echo \cBuidler\Classes\CCBTemplate::load('admin/modal/demo-import')
            ?>
        </demo-import>
    </template>
</div>