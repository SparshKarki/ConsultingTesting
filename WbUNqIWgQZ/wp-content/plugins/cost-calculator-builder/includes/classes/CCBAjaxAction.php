<?php

namespace cBuidler\Classes;

class CCBAjaxAction {

    /**
     * @param string   $tag             The name of the action to which the $function_to_add is hooked.
     * @param callable $function_to_add The name of the function you wish to be called.
     * @param int      $priority        Optional. Used to specify the order in which the functions
     *                                  associated with a particular action are executed. Default 10.
     *                                  Lower numbers correspond with earlier execution,
     *                                  and functions with the same priority are executed
     *                                  in the order in which they were added to the action.
     * @param int      $accepted_args   Optional. The number of arguments the function accepts. Default 1.
     * @return true Will always return true.
     */

    public static function addAction($tag, $function_to_add, $priority = 10, $accepted_args = 1) {
        add_action('wp_ajax_'.$tag, $function_to_add, $priority = 10, $accepted_args = 1);
        add_action('wp_ajax_nopriv_'.$tag, $function_to_add);
        return true;
    }

    public static function init() {
        CCBAjaxAction::addAction('edit_calc', [CCBAjaxCallbacks::class , 'edit_calc']);
        CCBAjaxAction::addAction('delete_calc', [CCBAjaxCallbacks::class , 'delete_calc']);
        CCBAjaxAction::addAction('save_custom', [CCBAjaxCallbacks::class , 'save_custom']);
        CCBAjaxAction::addAction('create_id', [CCBAjaxCallbacks::class , 'create_calc_id']);
        CCBAjaxAction::addAction('get_existing', [CCBAjaxCallbacks::class , 'get_existing']);
        CCBAjaxAction::addAction('save_settings', [CCBAjaxCallbacks::class , 'save_settings']);
        CCBAjaxAction::addAction('duplicate_calc', [CCBAjaxCallbacks::class , 'duplicate_calc']);

//        demo-import
        CCBAjaxAction::addAction('demo-import', [CCBAjaxCallbacks::class , 'demo_import_apply']);
        CCBAjaxAction::addAction('demo-import-run', [CCBAjaxCallbacks::class , 'demo_import_run']);
        CCBAjaxAction::addAction('custom-demo-import', [CCBAjaxCallbacks::class , 'custom_demo_import']);
        CCBAjaxAction::addAction('ccb_export_calc', [CCBAjaxCallbacks::class , 'ccb_export_calc_callback']);
    }
}