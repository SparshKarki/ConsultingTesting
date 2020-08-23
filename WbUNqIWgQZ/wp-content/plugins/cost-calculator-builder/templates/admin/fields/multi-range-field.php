<?php if(ccb_pro_active()) :
    do_action('render-multi-range');
    ?>
<?php else:?>
    <div class="multi-range-wrapper">
        <?php
            echo \cBuidler\Classes\CCBTemplate::load('/admin/partials/pro-feature');
        ?>
        <div class="list-row">
            <div class="list-content">
                <input type="text" placeholder="<?php echo __('- Field Label -', 'cost-calculator-builder')?>">
            </div>

            <div class="list-content">
                <input type="text" placeholder="<?php echo __('- Field Description -', 'cost-calculator-builder')?>">
            </div>

            <div class="list-content">
                <input type="number" placeholder="<?php echo __('- Min Value -', 'cost-calculator-builder')?>">
            </div>

            <div class="list-content">
                <input type="number" placeholder="<?php echo __('- Max Value -', 'cost-calculator-builder')?>">
            </div>

            <div class="list-content">
                <input type="number" placeholder="<?php echo __('- Step -', 'cost-calculator-builder')?>">
            </div>

            <div class="list-content">
                <input type="number" placeholder="<?php echo __('- Default Left Value -', 'cost-calculator-builder')?>">
            </div>

            <div class="list-content">
                <input type="number" placeholder="<?php echo __('- Default Right Value -', 'cost-calculator-builder')?>">
            </div>

            <div class="list-content">
                <input type="number" placeholder="<?php echo __('- Unit -', 'cost-calculator-builder')?>">
            </div>

            <div class="list-header ccb-modal-list" style="margin-top: 38px">
                <div class="ccb-switch">
                    <input type="checkbox"/>
                    <label></label>
                </div>
                <h6><?php echo __('Currency Symbol On Total Description Disabled', 'cost-calculator-builder')?></h6>
            </div>

            <div class="list-header ccb-modal-list">
                <div class="ccb-switch">
                    <input type="checkbox"/>
                    <label></label>
                </div>
                <h6><?php echo __('Round Value To Whole Disabled', 'cost-calculator-builder')?></h6>
            </div>

            <div class="list-content">
                <h6><?php echo __('Additional Classes', 'cost-calculator-builder')?></h6>
                <textarea></textarea>
            </div>
        </div>

        <div class="list-row" style="margin-top: 20px">
            <div class="list-content ccb-flex">

                <div class="list-content--header">
                    <button type="button" class="green">
                        <i class="fas fa-cog"></i>
                        <span><?php echo __('Save Settings', 'cost-calculator-builder')?></span>
                    </button>
                </div>

                <div class="list-content--header">
                    <button type="button" class="white">
                        <i class="fas fa-cog"></i>
                        <span><?php echo __('Cancel Settings', 'cost-calculator-builder')?></span>
                    </button>
                </div>

            </div>
        </div>

    </div>
<?php endif;?>