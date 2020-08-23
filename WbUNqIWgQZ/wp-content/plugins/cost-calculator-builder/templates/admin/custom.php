<div class="ccb-settings-wrapper calculator-settings" >
    <calc-builder inline-template>
        <div>
            <div class="ccb-settings-container custom-container">
                <?php echo \cBuidler\Classes\CCBTemplate::load('/admin/partials/header', ['is_custom' => true]) ?>
            </div>
            <?php
                $calc_id = isset($_GET['id']) ? $_GET['id'] : null;
            ?>
            <ccb-customize inline-template calc="<?php echo esc_attr($calc_id)?>">
                <div class="ccb-custom-container ccb-sticky-wrapper">
                    <div class="container" style="position: sticky; align-self: flex-start; top: 0;">
                        <div>
                            <div class="ccb-wrapper">
                                <div class="ccb-layout">
                                    <input name="nav" type="radio" class="nav ccb-container-radio" id="ccb-v-container" checked="checked"/>
                                    <div class="ccb-custom-page">
                                        <div class="ccb-page-contents">
                                            <section class="ccb-modal-section" id="custom-page">
                                                <?php
                                                    echo \cBuidler\Classes\CCBTemplate::load('frontend/render', ['calc_id' => $calc_id, 'is_preview' => true]);
                                                ?>
                                            </section>
                                        </div>
                                    </div>
                                    <label class="label-custom-page nav" for="ccb-v-container" @click="container = 'v-container'"><span>V-Container</span></label> <!-- -->
                                    <input name="nav" type="radio" class="ccb-container-radio" id="ccb-h-container"/>
                                    <div class="ccb-custom-page">
                                        <div class="ccb-page-contents">
                                            <?php
                                                echo \cBuidler\Classes\CCBTemplate::load('frontend/render', ['calc_id' => $calc_id, 'is_preview' => true, 'is_customize' => true]);
                                            ?>
                                        </div>
                                    </div>
                                    <label class="label-custom-page nav" for="ccb-h-container" @click="container = 'h-container'"><span>H-Container</span></label> <!--  -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ccb-custom-sidebar" v-if="hasAccess">
                        <div class="ccb-accordion ccb-js-accordion">
                            <template v-for="(field, key) in $store.getters.getCustomFields">
                                <template v-if="key === 'v-container' || key === 'h-container'">
                                    <div class="ccb-accordion__item ccb-js-accordion-item ccb-active"  v-show="container === key">
                                        <div class="ccb-accordion-header ccb-js-accordion-header">{{key}}</div>
                                        <div class="ccb-accordion-body ccb-js-accordion-body">
                                            <div class="ccb-accordion ccb-js-accordion">
                                                <div class="ccb-accordion__item ccb-js-accordion-item"  v-for="(value, index) in field.fields">
                                                    <div class="ccb-accordion-header ccb-js-accordion-header">{{value.label}}</div>
                                                    <div class="ccb-accordion-body ccb-js-accordion-body">
                                                        <div class="ccb-accordion-body__contents">
                                                            <component v-bind:is="value.type + '-field'"
                                                                       v-bind:index="index"
                                                                       @change="storeStyles"
                                                                       v-bind:element="field"
                                                                       v-bind:data="field.fields"
                                                                       v-bind:field="value">
                                                            </component>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </template>

                                <template v-else>
                                    <div class="ccb-accordion__item ccb-js-accordion-item ccb-active">
                                        <div class="ccb-accordion-header ccb-js-accordion-header">{{key}}</div>
                                        <div class="ccb-accordion-body ccb-js-accordion-body">
                                            <div class="ccb-accordion ccb-js-accordion">
                                                <div class="ccb-accordion__item ccb-js-accordion-item"  v-for="(value, index) in field.fields">
                                                    <div class="ccb-accordion-header ccb-js-accordion-header">{{value.label}}</div>
                                                    <div class="ccb-accordion-body ccb-js-accordion-body">
                                                        <div class="ccb-accordion-body__contents">
                                                            <component v-bind:is="value.type + '-field'"
                                                                       v-bind:index="index"
                                                                       @change="storeStyles"
                                                                       v-bind:element="field"
                                                                       v-bind:data="field.fields"
                                                                       v-bind:field="value">
                                                            </component>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </template>
                            </template>
                        </div>
                    </div>
                </div>
            </ccb-customize>
        <?php echo \cBuidler\Classes\CCBTemplate::load('/admin/modal/modal') ?>
        </div>
    </calc-builder>
</div>