<?php

namespace cBuidler\Classes;

class CCBTemplate {
    /**
     * @param $template_name
     * @param string $template_path
     * @param string $default_path
     *
     * @return string
     */
    public static function locate_template($template_name, $template_path = 'cost-calculator-builder/', $default_path = '') {
        $template_name .= '.php';
        if($template_path != self::template_path())
            $template_path = self::template_path().$template_path;
        if(locate_template($template_path.$template_name))
            return locate_template($template_path.$template_name);
        return self::plugin_path($default_path)."/".$template_name;
    }

    /**
     * @param $template_name
     * @param array $args
     * @param null $echo
     *
     * @return bool|string
     */
    public static function load_template($template_name, $args = array(), $echo = null){
        if($echo == null)
            return self::load($template_name, $args);


        echo self::load($template_name, $args);
    }

    /**
     * @param $template_name
     * @param array $args
     * @param string $template_path
     * @param string $default_path
     *
     * @return bool|string
     */
    public static function load($template_name, $args = array(), $template_path = 'cost-calculator-builder/', $default_path = ''){

        ob_start();
        if(is_array($args))
            extract( $args );
        $file = self::locate_template($template_name, $template_path, $default_path);
        if(!file_exists($file))
            return false;
        include($file);
        return ob_get_clean();
    }

    public static function template_path() {
        return apply_filters( 'ccb_template_path', 'cost-calculator-builder/' );
    }

    /**
     * @return string
     */
    public static function plugin_path($default_path = '') {
        if(!empty($default_path))
            return untrailingslashit($default_path);
        return untrailingslashit(CALC_PATH.'/templates/');
    }
}