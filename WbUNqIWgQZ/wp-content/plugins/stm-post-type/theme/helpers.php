<?php

add_action('wp_enqueue_scripts', 'stm_consulting_load_theme_scripts_and_styles');

function stm_consulting_load_theme_scripts_and_styles()
{
    wp_deregister_script('select2');
}

add_action('consulting_add_event_member', 'stm_consulting_add_event_member');

function stm_consulting_add_event_member() {
    $response['errors'] = array();

    if ( empty( $_POST['name'] ) ) {
        $response['errors']['name'] = true;
    }
    if ( ! is_email( $_POST['email'] ) ) {
        $response['errors']['email'] = true;
    }
    if ( ! is_numeric( $_POST['phone'] ) ) {
        $response['errors']['phone'] = true;
    }
    if ( empty( $_POST['company'] ) ) {
        $response['errors']['company'] = false;
    }

    $id = $_POST['event_member_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $company = $_POST['company'];
    $url = $_POST['url'];
    $title = $_POST['title'];

    $recaptcha = true;

    $recaptcha_enabled = get_theme_mod('enable_recaptcha',0);
    $recaptcha_public_key = get_theme_mod('recaptcha_public_key');
    $recaptcha_secret_key = get_theme_mod('recaptcha_secret_key');
    if(!empty($recaptcha_enabled) and $recaptcha_enabled and !empty($recaptcha_public_key) and !empty($recaptcha_secret_key)){
        $recaptcha = false;
        if(!empty($_POST['g-recaptcha-response'])) {
            $recaptcha = true;
        }
    }

    if ( $recaptcha ) {
        if ( empty( $response['errors'] ) and ! empty( $id ) ) {
            $data['post_title']  = esc_html__( 'New request for event - ', 'consulting' ) . ' ' . get_the_title( $id );
            $data['post_type']   = 'event_member';
            $data['post_status'] = 'publish';
            $data_id             = wp_insert_post( $data );
            update_post_meta( $data_id, 'name', $name );
            update_post_meta( $data_id, 'email', $email );
            update_post_meta( $data_id, 'phone', $phone );
            update_post_meta( $data_id, 'company', $company );
            update_post_meta( $data_id, 'memberId', $id );

            update_post_meta( $data_id, 'event_member_eventID', $id );
            $event_attended = get_post_meta($id, 'event_attended', true );
            update_post_meta( $id, 'event_attended', $event_attended + 1 );

            $response['response'] = esc_html__( 'Your request was sent', 'consulting' );
            $response['status']   = 'success';

        } else {
            $response['response'] = esc_html__( 'Please fill all fields', 'consulting' );
            $response['status']   = 'danger';
        }

        $response['recaptcha'] = true;
    } else {
        $response['recaptcha'] = false;
        $response['status']    = 'danger';
        $response['response']  = esc_html__( 'Please prove you\'re not a robot', 'consulting' );
    }

    //Sending Mail to admin
    if ( empty( $response['errors'] ) and ! empty( $id ) ) {
        add_filter( 'wp_mail_content_type', 'stm_set_html_content_type' );

        $to      = get_bloginfo( 'admin_email' );
        $subject = esc_html__( 'New Event Member', 'consulting' );
        $body    = esc_html__( 'Event: ', 'consulting' ) . '<a href="'. $url .'">' . $title . '</a><br/>';
        $body .= esc_html__( 'Name: ', 'consulting' ) . $name . '<br/>';
        $body .= esc_html__( 'Email: ', 'consulting' ) . $email . '<br/>';
        $body .= esc_html__( 'Phone: ', 'consulting' ) . $phone . '<br/>';
        $body .= esc_html__( 'Company: ', 'consulting' ) . $company . '<br/>';

        wp_mail( $to, $subject, $body );
        wp_mail( $email, $subject, 'You have been joined to the event - ' . '<a href="'. $url .'">' . $title . '</a>' );

        remove_filter( 'wp_mail_content_type', 'stm_set_html_content_type' );
    }

    $response = json_encode( $response );

    echo $response;

}

add_filter('consulting_currencies_stocks_api', 'stm_consulting_currencies_stocks_api', 10, 2);

function stm_consulting_currencies_stocks_api($res, $indexes) {
    $stocks_transient = get_theme_mod( 'stocks_transient' );

    $transient_name = 'stm_currency_and_stocks_' . sanitize_title(implode('_', $indexes)) . '_' . $stocks_transient;
    
    if ( false === ( $result = get_transient( $transient_name ) ) ) {
        $queryNumber = rand(1, 2);

        $curly = array();
        $result = array();

        $mh = curl_multi_init();

        foreach ($indexes as $id => $d) {

            $curly[$id] = curl_init();

            $url = 'https://query' . $queryNumber . '.finance.yahoo.com/v7/finance/quote?formatted=false&symbols=' . $d . '&fields=regularMarketPrice,regularMarketChange,regularMarketChangePercent,currency';

            print_r($url);
            curl_setopt($curly[$id], CURLOPT_URL, $url);
            curl_setopt($curly[$id], CURLOPT_HEADER, 0);
            curl_setopt($curly[$id], CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($curly[$id], CURLOPT_SSL_VERIFYPEER, 0);

            curl_multi_add_handle($mh, $curly[$id]);
        }

        $running = null;
        do {
            curl_multi_exec($mh, $running);
        } while ($running > 0);

        foreach ($curly as $id => $c) {
            $result[$id] = curl_multi_getcontent($c);
            $result[$id] = json_decode($result[$id], true);
            $result[$id] = array_shift($result[$id]['quoteResponse']['result']);
            curl_multi_remove_handle($mh, $c);
        }

        curl_multi_close($mh);

        set_transient( $transient_name, $result, $stocks_transient);

    }

    return $result;
}

add_filter('consulting_currencies', 'stm_consulting_currencies', 10, 6);

function stm_consulting_currencies($result, $indexes, $range, $interval, $fill_color, $point_color){

    $stocks_transient = get_theme_mod( 'stocks_transient' );

    $transient_name = 'stm_currency_and_' . sanitize_title(implode('_', $indexes)) . '_' . $range . '_' . $interval . '_' . $stocks_transient;

    if ( false === ( $result = get_transient( $transient_name ) ) ) {

        $queryNumber = rand(1, 2);

        $curly = array();
        $result = array();

        $mh = curl_multi_init();


        foreach ($indexes as $id => $d) {

            $curly[$id] = curl_init();

            $url = 'https://query' . $queryNumber . '.finance.yahoo.com/v7/finance/spark?&symbols=' . $d . '&range=' . $range . '&interval=' . $interval;

            curl_setopt($curly[$id], CURLOPT_URL, $url);
            curl_setopt($curly[$id], CURLOPT_HEADER, 0);
            curl_setopt($curly[$id], CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($curly[$id], CURLOPT_SSL_VERIFYPEER, 0);

            curl_multi_add_handle($mh, $curly[$id]);
        }

        $running = null;
        do {
            curl_multi_exec($mh, $running);
        } while ($running > 0);

        foreach ($curly as $id => $c) {
            $result[$id] = curl_multi_getcontent($c);
            $result[$id] = json_decode($result[$id], true);
            $result[$id] = array_shift($result[$id]['spark']['result']['0']['response']);
            $result[$id]['fill_color'] = $fill_color[$id];
            $result[$id]['point_color'] = $point_color[$id];


            curl_multi_remove_handle($mh, $c);
        }

        curl_multi_close($mh);

        set_transient( $transient_name, $result, $stocks_transient);

    }
    
    return ($result);
}


add_filter('consulting_custom_register', 'stm_consulting_custom_register');

function stm_consulting_custom_register() {
    $response = array();
    $errors = array();

    if(!is_email( $_POST['stm_user_mail'] )) {
        $errors['stm_user_mail'] = true;
    }else {
        $user_mail = $_POST['stm_user_mail'];
    }

    if(empty($_POST['stm_nickname'])) {
        $errors['stm_nickname'] = true;
    } else {
        $user_login = $_POST['stm_nickname'];
    }

    if(empty($_POST['stm_user_password'])) {
        $errors['stm_user_password'] = true;
    } else {
        $user_pass = $_POST['stm_user_password'];
    }

    if(empty($_POST['stm_user_link'])) {
        $errors['stm_user_link'] = true;
    } else {
        $user_link = $_POST['stm_user_link'];
    }

    if(empty($_POST['stm_site_address'])) {
        $errors['stm_site_address'] = true;
    } else {
        $site_address = $_POST['stm_site_address'];
    }


    if(empty($errors)) {

        $user_login = explode('@', $user_mail);
        $user_login = $user_login[0];
        $user_data = array(
            'user_login'  =>  $user_login,
            'user_pass'   =>  $user_pass
        );

        $user_has_mail = array(
            'user_email'  =>  $user_mail
        );

        $user_id = wp_insert_user( $user_data );
        $user_has_mail_id = wp_insert_user( $user_has_mail );

        if ( ! is_wp_error( $user_id ) ) {
            $response['message'] = esc_html__('Please, check yor email', 'consulting');

            $to      = $user_mail;
            $subject = esc_html__( 'Registration completed successfully', 'consulting' );
            $body    = esc_html__( 'Your login: ', 'consulting' ) . $user_login . "<br>" . esc_html__( 'Your password: ', 'consulting' ) . $user_pass . "<br>" . esc_html__( 'Website: ', 'consulting' ) . $site_address;
            $headers = array('Content-Type: text/html; charset=UTF-8');

            wp_mail( $to, $subject, $body, $headers );

            $to      = $user_mail;
            $subject = esc_html__( 'Your download is available', 'consulting' );
            $body    = esc_html__( 'Download link: ', 'consulting' ) . $user_link;
            $headers = array('Content-Type: text/html; charset=UTF-8');

            wp_mail( $to, $subject, $body, $headers );

        }
        elseif ($user_has_mail_id){
            $response['message'] = esc_html__('Please, check yor email', 'consulting');

            $to      = $user_mail;
            $subject = esc_html__( 'Your download is available', 'consulting' );
            $body    = esc_html__( 'Download link: ', 'consulting' ) . $user_link;
            $headers = array('Content-Type: text/html; charset=UTF-8');

            wp_mail( $to, $subject, $body, $headers );
        }
        else {
            $response['message'] = $user_id->get_error_message();
            $response['user'] = $user_id;
        }
    }

    $response['errors'] = $errors;

    return $response;
}

add_filter('consulting_base_decode', 'stm_consulting_base_decode');

function stm_consulting_base_decode($content) {
    return base64_decode($content);
}