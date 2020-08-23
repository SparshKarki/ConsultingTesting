<modal-add-field
    ref="calc-modal"
    inline-template
>
    <div class="ccb-modal-wrapper" :class="{open: modal.isOpen, hide: modal.hide}">
        <div class="modal-overlay">
            <div class="modal-window" :class="getModalType">
                <div class="modal-window-content">
                    <div class="ccb-close-btn-div" @click="closeModal">
                        <div class="ccb-close-btn">
                            <div class="ccb-close-btn-md"></div>
                        </div>
                    </div>
                  <template v-if="getModalType === 'add-field'">
                      <?php echo \cBuidler\Classes\CCBTemplate::load('/admin/modal/add-field');?>
                  </template>
                  <template v-else-if="getModalType === 'existing'">
                      <?php echo \cBuidler\Classes\CCBTemplate::load('/admin/modal/existing');?>
                  </template>
                  <template v-else-if="getModalType === 'create-new'">
                      <?php echo \cBuidler\Classes\CCBTemplate::load('/admin/modal/create-new');?>
                  </template>
                  <template v-else-if="getModalType === 'preview'">
                       <?php echo \cBuidler\Classes\CCBTemplate::load('/admin/modal/preview');?>
                  </template>
                  <template v-else-if="getModalType === 'condition'">
                      <?php echo \cBuidler\Classes\CCBTemplate::load('/admin/modal/condition');?>
                  </template>
                </div>
            </div>
        </div>
    </div>
</modal-add-field>

