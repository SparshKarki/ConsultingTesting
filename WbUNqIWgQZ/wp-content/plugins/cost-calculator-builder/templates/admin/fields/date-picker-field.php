<?php if(ccb_pro_active()) :
    do_action('render-date-picker');
 ?>
<?php else:?>
    <div class="date-picker-wrapper">
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
                <input type="text" placeholder="<?php echo __('- Field Placeholder -', 'cost-calculator-builder')?>">
            </div>

            <div class="list-content">
                <select>
                    <option value="1"><?php echo __('With range', 'cost-calculator-builder');?></option>
                    <option value="0"><?php echo __('No range', 'cost-calculator-builder');?></option>
                </select>
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
