<?php

namespace cBuidler\Classes;
class CCBUpdates {

    private static $updates = [
        '2.0.0' => [
            'update_icons',
            'restructure_customize',
        ]
    ];

    public static function init() {
        if (version_compare( get_option( 'ccb_version' ), CALC_VERSION, '<' ) )
            self::update_version();
    }

    public static function get_updates() {
        return self::$updates;
    }

    public static function needs_to_update() {
        $current_db_version = get_option( 'calc_db_version', 1 );
        $update_versions    = array_keys( self::get_updates() );
        usort( $update_versions, 'version_compare' );

        return ! is_null( $current_db_version ) && version_compare( $current_db_version, end( $update_versions ), '<' );
    }

    private static function maybe_update_db_version() {
        if ( self::needs_to_update() ) {
            $updates = self::get_updates();
            $calc_db_version = get_option('calc_db_version');

            foreach ( $updates as $version => $callback_arr)
                if ( version_compare( $calc_db_version, $version, '<' ) )
                    foreach ($callback_arr as $callback)
                        call_user_func( ["\\cBuidler\\Classes\\CCBUpdatesCallbacks", $callback] );
        }

        update_option('calc_db_updates', CALC_DB_VERSION, true);
    }

    public static function update_version() {
        update_option('ccb_version', CALC_VERSION, true);
        self::maybe_update_db_version();
    }
}