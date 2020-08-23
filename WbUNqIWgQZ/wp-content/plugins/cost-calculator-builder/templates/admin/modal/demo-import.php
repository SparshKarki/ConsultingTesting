<div id="ccb-demo-import"  >
<!--    style="position: relative; max-width: 800px; transform: translateY(-50%); text-align: center;"-->
    <h2 @click="getImportData" style="text-align: center; padding-bottom: 20px"><?php echo __('Demo Import', 'cost-calculator-builder') ?></h2>
    <div v-if="demoImport.finish" class="panel-custom p-t-30 p-b-30 text-center">
        <h2><?php _e("Finish :)", "cost-calculator-builder")?></h2>
    </div>
    <div v-if="!demoImport.finish">
        <div class="p-t-15">
            <div class="text-center p-t-15 p-b-15" v-if="demoImport.step_progress">
                <h4> <?php _e("Import step progress", "cost-calculator-builder")?> : <strong>{{demoImport.step_progress}}</strong></h4>
            </div>

            <div v-if="demoImport.progress_load" class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar"   v-bind:aria-valuenow="demoImport.progress" aria-valuemin="0" aria-valuemax="100" v-bind:style="'width: '+demoImport.progress+'%'">
                    {{demoImport.progress}}%
                </div>
            </div>

            <hr>
        </div>
        <div v-if="demoImport.load" class="text-center" style="position: relative">
           <loader style="left: 45%"></loader>
        </div>
        <template v-if="!demoImport.load && !demoImport.progress_load">

            <div class="demo-btn-wrapper">
                <div class="demo-btn-item">
                    <span class="ccb-demo-import-button default" @click="importDemos"><?php echo __('Run Default Demo Import', 'cost-calculator-builder') ?></span>
                </div>
                <span class="demo-btn-item or"><?php echo __('OR', 'cost-calculator-builder')?></span>

                <div class="demo-btn-item ccb-file-upload">
                    <input v-model="demoImport.image['file']"
                           type="file"
                           id="ccb-file"
                           hidden="hidden"
                           accept=".txt"
                           @change="loadImage()"
                           ref="image-file" />
                    <div class="ccb-file-container">
                        <span id="ccb-upload" @click="applyImporter"><?php echo __('Choose File', 'cost-calculator-builder');?></span>
                        <span id="ccb-file-text">{{demoImport.noFile}}</span>
                    </div>
                    <span class="ccb-demo-import-button" @click="importNewLayout" :disabled="demoImport.noFile === 'No file chosen'" id="ccb-file-button"><?php echo __('Run Custom Default Demo Import', 'cost-calculator-builder') ?></span>
                </div>

            </div>

        </template>
        <textarea v-if="demoImport.progress_load"  rows="7" disabled id="progress_data_textarea" class="form-control" v-model="demoImport.progress_data"></textarea>
    </div>
</div>