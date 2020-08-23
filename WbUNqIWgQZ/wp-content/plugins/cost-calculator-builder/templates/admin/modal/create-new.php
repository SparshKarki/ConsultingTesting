<div class="modal-body">
    <p class="ccb-sure"><?php echo __('Do you Want To Save Current Calculator?', 'cost-calculator-builder')?></p>
    <div class="list-row" style="margin-top: 20px">
        <div class="list-content ccb-flex" style="justify-content: space-between">

            <?php
                $url = home_url() . '/wp-admin/admin.php?page=cost_calculator_builder';
            ?>
           <div style="display: flex">
               <div class="list-content--header">
                   <button type="button" class="green" @click.prevent="createNew('<?php echo esc_attr($url)?>', true)">
                       <span><?php echo __('Save & Create new', 'cost-calculator-builder')?></span>
                   </button>
               </div>

               <div class="list-content--header">
                   <button type="button" class="white" @click.prevent="createNew('<?php echo esc_attr($url)?>')">
                       <span><?php echo __('Dont save & Create New', 'cost-calculator-builder')?></span>
                   </button>
               </div>
           </div>

            <div class="list-content--header" @click="closeModal">
                <button type="button" class="white">
                    <span><?php echo __('Cancel', 'cost-calculator-builder')?></span>
                </button>
            </div>
        </div>
    </div>
</div>