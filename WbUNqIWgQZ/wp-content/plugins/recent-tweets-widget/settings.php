<?php
add_thickbox();
$tp_twitter_plugin_options = get_option('tp_twitter_plugin_options');

if (array_key_exists('tp_twitter_global_notification', $_GET) && $_GET['tp_twitter_global_notification'] == 0) {
        update_option('tp_twitter_global_notification', 0);
}
?>
<div class="wrap">
        <div class="recent-tweets-content-left">
                <?php settings_errors(); ?>
                <style type="text/css">
                        #tp_twitter_global_notification a.button:active {vertical-align:baseline;}
                </style>

        	<h2>Recent Tweets</h2>
                <h3><?php _e('Adding the Widget', TP_RECENT_TEXT_DOMAIN); ?></h3>
                <ol>
                        <li><a href="<?php echo admin_url('widgets.php'); ?>" target="_blank">Go to your Widgets menu</a>, add the <code>Recent Tweets</code> widget to a widget area.</li>
                        <li>Visit <a href="https://apps.twitter.com/">https://apps.twitter.com/</a>, sign in with your account, click on <code>Create New App</code> and create your own keys if you haven't already.</li>
                        <li><?php _e('Fill all your widget settings.', TP_RECENT_TEXT_DOMAIN); ?></li>
                        <li><?php _e('Enjoy your new Twitter feed! :)', TP_RECENT_TEXT_DOMAIN); ?></li>
                </ol>
        	<form method="post" action="options.php"> 
        		<?php settings_fields( 'tp_twitter_plugin_options' ); ?>
        		<table class="form-table">
                        	<tr valign="top">
                        		<td scope="row" colspan="2">
                                                <select name="tp_twitter_plugin_options[support-us]" id="support-us">
                                                        <option value="1" <?php echo is_array($tp_twitter_plugin_options) && $tp_twitter_plugin_options['support-us'] == '1' ? 'selected="selected"' : ''; ?>>Yes</option>
                                                        <option value="0" <?php echo !is_array($tp_twitter_plugin_options) || $tp_twitter_plugin_options['support-us'] != '1' ? 'selected="selected"' : ''; ?>>No</option>
                                                </select>
                                                <p><?php _e('Show our link below the widget. Pretty please.', TP_RECENT_TEXT_DOMAIN); ?></p>
                                        </td>
                        		
                        	</tr>
        		</table>
        		<?php submit_button(); ?>
        	</form>

        </div>

        <div class="recent-tweets-content-right">
                <div class="recent-tweets-content-container-right">
                        <div class="recent-tweets-promo-box entry-content">
                                <p class="recent-tweets-promo-box-header">Your one stop WordPress shop</p>
                                <ul>
                                   <li>&#8226; Get the latest WordPress software deals</li>
                                   <li>&#8226; Plugins, themes, form builders, and more</li>
                                   <li>&#8226; Shop with confidence; 60-day money-back guarantee</li>
                                </ul>
                                <div align="center">
                                        <button onclick="window.open('https://appsumo.com/tools/wordpress/?utm_source=sumo&utm_medium=wp-widget&utm_campaign=recent-tweets')" class="recent-tweets-appsumo-capture-container-button" type="submit">Show Me The Deals</button>
                                </div>
                        </div>

                        <div class="recent-tweets-promo-box recent-tweets-promo-box-form  entry-content">
                                <?php include 'appsumo-capture-form.php'; ?>
                        </div>
                </div>
        </div>
</div>