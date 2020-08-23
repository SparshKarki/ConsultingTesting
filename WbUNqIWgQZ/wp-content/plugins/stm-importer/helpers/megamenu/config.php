<?php
function stm_get_megamenu_config( $layout )
{
    $mega = stm_megamenu_config();
    return ( !empty( $mega[ $layout ] ) ? $mega[ $layout ] : array() );
}

function stm_megamenu_config()
{
    $mega = array(
        'layout_1' => array( 'home' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => '1', 'stm_mega_second_col_width' => 'default', 'stm_mega_textarea' => ' ', ), 'about us' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => '1', 'stm_mega_second_col_width' => 'default', 'stm_mega_textarea' => ' ', ), 'About' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => '1', 'stm_mega_second_col_width' => 'default', 'stm_menu_image' => '3358', ), 'About Layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => '1', 'stm_mega_second_col_width' => 'default', ), 'About Layout 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => '1', 'stm_mega_second_col_width' => 'default', ), 'Our approach' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => '6', 'stm_mega_second_col_width' => 'default', ), 'Partners' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Careers' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Jobs listing' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => '1', 'stm_mega_second_col_width' => 'default', ), 'Vacancy page' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => '1', 'stm_mega_second_col_width' => 'default', ), 'Our team' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team list' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => '1', 'stm_mega_second_col_width' => 'default', ), 'Team grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => '1', 'stm_mega_second_col_width' => 'default', ), 'Team member' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => '1', 'stm_mega_second_col_width' => 'default', ), 'services' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => '1', 'stm_mega_second_col_width' => 'default', 'stm_mega_textarea' => ' ', ), 'Services Grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cases' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => '1', 'stm_mega_second_col_width' => 'default', 'stm_mega_textarea' => ' ', ), 'cases grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cases with filter' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'single case layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'single case layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'news' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'list view' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'grid view' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'portfolio' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => '1', 'stm_mega_second_col_width' => 'default', 'stm_mega_textarea' => ' ', ), 'Portfolio Single One' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single Two' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single Three' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'pages' => array( 'stm_mega' => 'boxed', 'stm_mega_cols' => '3', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => '1', 'stm_mega_second_col_width' => 'default', 'stm_mega_textarea' => ' ', ), 'Company overview' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Company overview1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_image' => '33', 'stm_mega_textarea' => 'Consulting is a global consultbe- gan our operations a fewd...', ), 'Example Pages' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Testimonials 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => '1', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Testimonials 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => '1', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Typography' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), '404 Page' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Extra Pages' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Events Grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-th-large', ), 'Events Classic' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-bank', ), 'Events Modern' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-list-ul', ), 'Appointment' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-calendar-check-o', ), 'contact us' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_mega_textarea' => '
<table class="megamenu-contacts">
	<tr>
		<td><i class="stm_megaicon stm-marker"></i></td>
		<td>1010 Avenue of the Moon New York, NY 10018 US.</td>
	</tr>
	<tr>
		<td><i class="fa fa-phone" aria-hidden="true"></i></td>
		<td>+1 628 123 4000</td>
	</tr>
	<tr>
		<td><i class="fa fa-envelope" aria-hidden="true"></i></td>
		<td><a href="mailto:berg@consulting.wp">berg@consulting.wp</a></td>
	</tr>
	<tr>
		<td><i class="fa fa-clock-o" aria-hidden="true"></i></td>
		<td>Mon–Sat: 8:00AM–6:00PM Sunday: CLOSED</td>
	</tr>
</table>
', ), 'shop' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_mega_textarea' => ' ', ), 'my account' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cart' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'contacts' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => '1', 'stm_mega_second_col_width' => 'default', 'stm_mega_textarea' => ' ', ), 'Contact one' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact two' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact three' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact four' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact five' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => '4', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), ),


        'layout_2' => array( 'home' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'about us' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Our approach' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'partners' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'our team' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team list' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team member' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'careers' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Jobs listing' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'vacancy page' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'services' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Services Grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cases' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cases grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cases with filter' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'single case layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'single case layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'news' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'list view' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'grid view' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'portfolio' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single One' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single Two' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single Three' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'pages' => array( 'stm_mega' => 'boxed', 'stm_mega_cols' => '3', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Company overview' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Company overview1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_image' => '1459', 'stm_mega_textarea' => 'Consulting is a global consultbe- gan our operations a fewd...', ), 'Example Pages' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Testimonials 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Testimonials 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Typography' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), '404 Page' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Extra Pages' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Events Grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-th-large', ), 'Events Classic' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-bank', ), 'Events Modern' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-list-ul', ), 'Appointment' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-calendar-check-o', ), 'Contacts' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_mega_textarea' => '
<table class="megamenu-contacts">
	<tr>
		<td><i class="stm_megaicon stm-marker"></i></td>
		<td>1010 Avenue of the Moon New York, NY 10018 US.</td>
	</tr>
	<tr>
		<td><i class="fa fa-phone" aria-hidden="true"></i></td>
		<td>+1 628 123 4000</td>
	</tr>
	<tr>
		<td><i class="fa fa-envelope" aria-hidden="true"></i></td>
		<td><a href="mailto:berg@consulting.wp">berg@consulting.wp</a></td>
	</tr>
	<tr>
		<td><i class="fa fa-clock-o" aria-hidden="true"></i></td>
		<td>Mon–Sat: 8:00AM–6:00PM Sunday: CLOSED</td>
	</tr>
</table>
', ), 'shop' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'my account' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cart' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'contacts' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact one' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact two' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact three' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact four' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact five' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), ),


        'layout_3' => array( 'home' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'about us' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Our approach' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'partners' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'our team' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team list' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team member' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'careers' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Jobs listing' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'vacancy page' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'services' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Services Grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cases' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cases grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cases with filter' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'single case layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'single case layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'news' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'list view' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'grid view' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'portfolio' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single One' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single Two' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single Three' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'pages' => array( 'stm_mega' => 'boxed', 'stm_mega_cols' => '3', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Company overview' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Company overview1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_image' => '1439', 'stm_mega_textarea' => 'Consulting is a global consultbe- gan our operations a fewd...', ), 'Example Pages' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Testimonials 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Testimonials 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Typography' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), '404 Page' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Extra Pages' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Events Grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-th-large', ), 'Events Classic' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-bank', ), 'Events Modern' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-list-ul', ), 'Appointment' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-calendar-check-o', ), 'Contacts' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_mega_textarea' => '
<table class="megamenu-contacts">
	<tr>
		<td><i class="stm_megaicon stm-marker"></i></td>
		<td>1010 Avenue of the Moon New York, NY 10018 US.</td>
	</tr>
	<tr>
		<td><i class="fa fa-phone" aria-hidden="true"></i></td>
		<td>+1 628 123 4000</td>
	</tr>
	<tr>
		<td><i class="fa fa-envelope" aria-hidden="true"></i></td>
		<td><a href="mailto:berg@consulting.wp">berg@consulting.wp</a></td>
	</tr>
	<tr>
		<td><i class="fa fa-clock-o" aria-hidden="true"></i></td>
		<td>Mon–Sat: 8:00AM–6:00PM Sunday: CLOSED</td>
	</tr>
</table>
', ), 'shop' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'my account' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cart' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'contacts' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact one' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact two' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact three' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact four' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact five' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), ),


        'layout_4' => array( 'home' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'about us' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Our approach' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'partners' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'our team' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team list' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team member' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'careers' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Jobs listing' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'vacancy page' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'services' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Services Grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cases' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cases grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cases with filter' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'single case layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'single case layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'news' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'list view' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'grid view' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'portfolio' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single One' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single Two' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single Three' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'pages' => array( 'stm_mega' => 'boxed', 'stm_mega_cols' => '3', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Company overview' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Company overview1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_image' => '1191', 'stm_mega_textarea' => 'Consulting is a global consultbe- gan our operations a fewd...', ), 'Example Pages' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Testimonials 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Testimonials 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Typography' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), '404 Page' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Extra Pages' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Events Grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-th-large', ), 'Events Classic' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-bank', ), 'Events Modern' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-list-ul', ), 'Appointment' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-calendar-check-o', ), 'Contacts' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_mega_textarea' => '
<table class="megamenu-contacts">
	<tr>
		<td><i class="stm_megaicon stm-marker"></i></td>
		<td>1010 Avenue of the Moon New York, NY 10018 US.</td>
	</tr>
	<tr>
		<td><i class="fa fa-phone" aria-hidden="true"></i></td>
		<td>+1 628 123 4000</td>
	</tr>
	<tr>
		<td><i class="fa fa-envelope" aria-hidden="true"></i></td>
		<td><a href="mailto:berg@consulting.wp">berg@consulting.wp</a></td>
	</tr>
	<tr>
		<td><i class="fa fa-clock-o" aria-hidden="true"></i></td>
		<td>Mon–Sat: 8:00AM–6:00PM Sunday: CLOSED</td>
	</tr>
</table>
', ), 'shop' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'my account' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cart' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'contacts' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact one' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact two' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact three' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact four' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact five' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), ),


        'layout_5' => array( 'home' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'about us' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Our approach' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'partners' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'our team' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team list' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team member' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'careers' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Jobs listing' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'vacancy page' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'services' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Services Grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cases' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cases grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cases with filter' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'single case layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'single case layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'news' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'list view' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'grid view' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single One' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single Two' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single Three' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'pages' => array( 'stm_mega' => 'boxed', 'stm_mega_cols' => '3', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Company overview' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Company overview1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_image' => '1342', 'stm_mega_textarea' => 'Consulting is a global consultbe- gan our operations a fewd...', ), 'Example Pages' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Testimonials 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Testimonials 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Typography' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), '404 Page' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Extra Pages' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Events Grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-th-large', ), 'Events Classic' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-bank', ), 'Events Modern' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-list-ul', ), 'Appointment' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-calendar-check-o', ), 'Contacts' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_mega_textarea' => '
<table class="megamenu-contacts">
	<tr>
		<td><i class="stm_megaicon stm-marker"></i></td>
		<td>1010 Avenue of the Moon New York, NY 10018 US.</td>
	</tr>
	<tr>
		<td><i class="fa fa-phone" aria-hidden="true"></i></td>
		<td>+1 628 123 4000</td>
	</tr>
	<tr>
		<td><i class="fa fa-envelope" aria-hidden="true"></i></td>
		<td><a href="mailto:berg@consulting.wp">berg@consulting.wp</a></td>
	</tr>
	<tr>
		<td><i class="fa fa-clock-o" aria-hidden="true"></i></td>
		<td>Mon–Sat: 8:00AM–6:00PM Sunday: CLOSED</td>
	</tr>
</table>
', ), 'shop' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'my account' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cart' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'contacts' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact one' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact two' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact three' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact four' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact five' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), ),


        'layout_6' => array( 'home' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'about us' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Our approach' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'partners' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'our team' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team list' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team member' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'careers' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Jobs listing' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'vacancy page' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'services' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Services Grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cases' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cases grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cases with filter' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'single case layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'single case layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'news' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'list view' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'grid view' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'portfolio' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single One' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single Two' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single Three' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'pages' => array( 'stm_mega' => 'boxed', 'stm_mega_cols' => '3', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Company overview' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Company overview1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_image' => '1398', 'stm_mega_textarea' => 'Consulting is a global consultbe- gan our operations a fewd...', ), 'Example Pages' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Testimonials 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Testimonials 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Typography' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), '404 Page' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Extra Pages' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Grid View' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-th-large', ), 'Classic View' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-bank', ), 'Modern View' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-list-ul', ), 'Appointment' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-calendar-check-o', ), 'Contacts' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_mega_textarea' => '
<table class="megamenu-contacts">
	<tr>
		<td><i class="stm_megaicon stm-marker"></i></td>
		<td>1010 Avenue of the Moon New York, NY 10018 US.</td>
	</tr>
	<tr>
		<td><i class="fa fa-phone" aria-hidden="true"></i></td>
		<td>+1 628 123 4000</td>
	</tr>
	<tr>
		<td><i class="fa fa-envelope" aria-hidden="true"></i></td>
		<td><a href="mailto:berg@consulting.wp">berg@consulting.wp</a></td>
	</tr>
	<tr>
		<td><i class="fa fa-clock-o" aria-hidden="true"></i></td>
		<td>Mon–Sat: 8:00AM–6:00PM Sunday: CLOSED</td>
	</tr>
</table>
', ), 'shop' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'my account' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cart' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'contacts' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact one' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact two' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact three' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact four' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact five' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), ),


        'layout_7' => array( 'home' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'about us' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Our approach' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'partners' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'our team' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team list' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team member' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'careers' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Jobs listing' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'vacancy page' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'services' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Services Grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cases' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cases grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cases with filter' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'single case layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'single case layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'news' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'list view' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'grid view' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single One' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single Two' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single Three' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'pages' => array( 'stm_mega' => 'boxed', 'stm_mega_cols' => '3', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Company overview' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Company overview1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_image' => '1501', 'stm_mega_textarea' => 'Consulting is a global consultbe- gan our operations a fewd...', ), 'Example Pages' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Testimonials 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Testimonials 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Typography' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), '404 Page' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Extra Pages' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Events Grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-th-large', ), 'Events Classic' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-bank', ), 'Events Modern' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-list-ul', ), 'Appointment' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-calendar-check-o', ), 'Contacts' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_mega_textarea' => '
<table class="megamenu-contacts">
	<tr>
		<td><i class="stm_megaicon stm-marker"></i></td>
		<td>1010 Avenue of the Moon New York, NY 10018 US.</td>
	</tr>
	<tr>
		<td><i class="fa fa-phone" aria-hidden="true"></i></td>
		<td>+1 628 123 4000</td>
	</tr>
	<tr>
		<td><i class="fa fa-envelope" aria-hidden="true"></i></td>
		<td><a href="mailto:berg@consulting.wp">berg@consulting.wp</a></td>
	</tr>
	<tr>
		<td><i class="fa fa-clock-o" aria-hidden="true"></i></td>
		<td>Mon–Sat: 8:00AM–6:00PM Sunday: CLOSED</td>
	</tr>
</table>
', ), 'shop' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'my account' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cart' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'contacts' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact one' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact two' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact three' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact four' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact five' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), ),


        'layout_8' => array( 'home' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'about us' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Our approach' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'partners' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'our team' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team list' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team member' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'careers' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Jobs listing' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'vacancy page' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'services' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Services Grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cases' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cases grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cases with filter' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'single case layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'single case layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'news' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'list view' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'grid view' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single One' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single Two' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single Three' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'pages' => array( 'stm_mega' => 'boxed', 'stm_mega_cols' => '3', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Company overview' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Company overview1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_image' => '1564', 'stm_mega_textarea' => 'Consulting is a global consultbe- gan our operations a fewd...', ), 'Example Pages' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Testimonials 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Testimonials 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Typography' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), '404 Page' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Extra Pages' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Events Grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-th-large', ), 'Events Classic' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-bank', ), 'Events Modern' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-list-ul', ), 'Appointment' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-calendar-check-o', ), 'Contacts' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_mega_textarea' => '
<table class="megamenu-contacts">
	<tr>
		<td><i class="stm_megaicon stm-marker"></i></td>
		<td>1010 Avenue of the Moon New York, NY 10018 US.</td>
	</tr>
	<tr>
		<td><i class="fa fa-phone" aria-hidden="true"></i></td>
		<td>+1 628 123 4000</td>
	</tr>
	<tr>
		<td><i class="fa fa-envelope" aria-hidden="true"></i></td>
		<td><a href="mailto:berg@consulting.wp">berg@consulting.wp</a></td>
	</tr>
	<tr>
		<td><i class="fa fa-clock-o" aria-hidden="true"></i></td>
		<td>Mon–Sat: 8:00AM–6:00PM Sunday: CLOSED</td>
	</tr>
</table>
', ), 'shop' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'my account' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cart' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'contacts' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact One' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact two' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact three' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact four' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact five' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), ),


        'layout_9' => array( 'home' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'about us' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Our approach' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'partners' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'our team' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team list' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team member' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'careers' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Jobs listing' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'vacancy page' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'services' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Services Grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cases' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cases grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cases with filter' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'single case layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'single case layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'news' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'list view' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'grid view' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single One' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single Two' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single Three' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'pages' => array( 'stm_mega' => 'boxed', 'stm_mega_cols' => '3', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Company overview' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Company overview1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_image' => '1494', 'stm_mega_textarea' => 'Consulting is a global consultbe- gan our operations a fewd...', ), 'Example Pages' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Testimonials 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Testimonials 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Typography' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), '404 Page' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Extra Pages' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Events Grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-th-large', ), 'Events Classic' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-bank', ), 'Events Modern' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-list-ul', ), 'Appointment' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-calendar-check-o', ), 'Contacts' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_mega_textarea' => '
<table class="megamenu-contacts">
	<tr>
		<td><i class="stm_megaicon stm-marker"></i></td>
		<td>1010 Avenue of the Moon New York, NY 10018 US.</td>
	</tr>
	<tr>
		<td><i class="fa fa-phone" aria-hidden="true"></i></td>
		<td>+1 628 123 4000</td>
	</tr>
	<tr>
		<td><i class="fa fa-envelope" aria-hidden="true"></i></td>
		<td><a href="mailto:berg@consulting.wp">berg@consulting.wp</a></td>
	</tr>
	<tr>
		<td><i class="fa fa-clock-o" aria-hidden="true"></i></td>
		<td>Mon–Sat: 8:00AM–6:00PM Sunday: CLOSED</td>
	</tr>
</table>
', ), 'shop' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'my account' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cart' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'contacts' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact one' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact two' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact three' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact four' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact five' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), ),


        'layout_10' => array( 'home' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'about us' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Our approach' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'partners' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'our team' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team list' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team member' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'careers' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Jobs listing' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'vacancy page' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'services' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Services Grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cases' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cases grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cases with filter' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'single case layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'single case layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'news' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'list view' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'grid view' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single One' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single Two' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single Three' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'pages' => array( 'stm_mega' => 'boxed', 'stm_mega_cols' => '3', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Company overview' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Company overview1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_image' => '1615', 'stm_mega_textarea' => 'Consulting is a global consultbe- gan our operations a fewd...', ), 'Example Pages' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Testimonials 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Testimonials 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Typography' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), '404 Page' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Extra Pages' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Events Grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-th-large', ), 'Events Classic' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-bank', ), 'Events Modern' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-list-ul', ), 'Appointment' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-calendar-check-o', ), 'contact us' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_mega_textarea' => '
<table class="megamenu-contacts">
	<tr>
		<td><i class="stm_megaicon stm-marker"></i></td>
		<td>1010 Avenue of the Moon New York, NY 10018 US.</td>
	</tr>
	<tr>
		<td><i class="fa fa-phone" aria-hidden="true"></i></td>
		<td>+1 628 123 4000</td>
	</tr>
	<tr>
		<td><i class="fa fa-envelope" aria-hidden="true"></i></td>
		<td><a href="mailto:berg@consulting.wp">berg@consulting.wp</a></td>
	</tr>
	<tr>
		<td><i class="fa fa-clock-o" aria-hidden="true"></i></td>
		<td>Mon–Sat: 8:00AM–6:00PM Sunday: CLOSED</td>
	</tr>
</table>
', ), 'shop' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'my account' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cart' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'contacts' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact one' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact two' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact three' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact four' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact five' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), ),


        'layout_11' => array( 'home' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'about us' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Our approach' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'partners' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'our team' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team list' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team member' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'careers' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Jobs listing' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'vacancy page' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'services' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Services Grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cases' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cases grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cases with filter' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'single case layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'single case layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'news' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'list view' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'grid view' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'portfolio' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single One' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single Two' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single Three' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'pages' => array( 'stm_mega' => 'boxed', 'stm_mega_cols' => '3', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Company overview' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Company overview1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_image' => '1836', 'stm_mega_textarea' => 'Consulting is a global consultbe- gan our operations a fewd...', ), 'Example Pages' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Testimonials 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Testimonials 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Typography' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), '404 Page' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Extra Pages' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Events Grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-th-large', ), 'Events Classic' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-bank', ), 'Events Modern' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-list-ul', ), 'Appointment' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-calendar-check-o', ), 'Contacts' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_mega_textarea' => '
<table class="megamenu-contacts">
	<tr>
		<td><i class="stm_megaicon stm-marker"></i></td>
		<td>1010 Avenue of the Moon New York, NY 10018 US.</td>
	</tr>
	<tr>
		<td><i class="fa fa-phone" aria-hidden="true"></i></td>
		<td>+1 628 123 4000</td>
	</tr>
	<tr>
		<td><i class="fa fa-envelope" aria-hidden="true"></i></td>
		<td><a href="mailto:berg@consulting.wp">berg@consulting.wp</a></td>
	</tr>
	<tr>
		<td><i class="fa fa-clock-o" aria-hidden="true"></i></td>
		<td>Mon–Sat: 8:00AM–6:00PM Sunday: CLOSED</td>
	</tr>
</table>
', ), 'shop' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'my account' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cart' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'contacts' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact one' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact two' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact three' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact four' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact five' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), ),


        'layout_12' => array( 'home' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'about us' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Our approach' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'partners' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'our team' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team list' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team member' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'careers' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Jobs listing' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'vacancy page' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'services' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Services Grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cases' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cases grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cases with filter' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'single case layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'single case layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'news' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'list view' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'grid view' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'portfolio' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single One' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single Two' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single Three' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'pages' => array( 'stm_mega' => 'boxed', 'stm_mega_cols' => '3', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Company overview' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Company overview1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_image' => '1233', 'stm_mega_textarea' => 'Consulting is a global consultbe- gan our operations a fewd...', ), 'Example Pages' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Testimonials 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Testimonials 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Typography' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), '404 Page' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Extra Pages' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Events Grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-th-large', ), 'Events Classic' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-bank', ), 'Events Modern' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-list-ul', ), 'Appointment' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-calendar-check-o', ), 'Contacts' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_mega_textarea' => '
<table class="megamenu-contacts">
	<tr>
		<td><i class="stm_megaicon stm-marker"></i></td>
		<td>1010 Avenue of the Moon New York, NY 10018 US.</td>
	</tr>
	<tr>
		<td><i class="fa fa-phone" aria-hidden="true"></i></td>
		<td>+1 628 123 4000</td>
	</tr>
	<tr>
		<td><i class="fa fa-envelope" aria-hidden="true"></i></td>
		<td><a href="mailto:berg@consulting.wp">berg@consulting.wp</a></td>
	</tr>
	<tr>
		<td><i class="fa fa-clock-o" aria-hidden="true"></i></td>
		<td>Mon–Sat: 8:00AM–6:00PM Sunday: CLOSED</td>
	</tr>
</table>
', ), 'shop' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'my account' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cart' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'contacts' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact one' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact two' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact three' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact four' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact five' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), ),


        'layout_13' => array( 'home' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'about us' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Our approach' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'partners' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'our team' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team list' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team member' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'careers' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Jobs listing' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'vacancy page' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'services' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Services Grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cases' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cases grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cases with filter' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'single case layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'single case layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'news' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'list view' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'grid view' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'portfolio' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single One' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single Two' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single Three' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'pages' => array( 'stm_mega' => 'boxed', 'stm_mega_cols' => '3', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Company overview' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Company overview1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_image' => '1307', 'stm_mega_textarea' => 'Consulting is a global consultbe- gan our operations a fewd...', ), 'Example Pages' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Testimonials 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Testimonials 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Typography' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), '404 Page' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Extra Pages' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Events Grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-th-large', ), 'Events Classic' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-bank', ), 'Events Modern' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-list-ul', ), 'Appointment' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-calendar-check-o', ), 'Contacts' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_mega_textarea' => '
<table class="megamenu-contacts">
	<tr>
		<td><i class="stm_megaicon stm-marker"></i></td>
		<td>1010 Avenue of the Moon New York, NY 10018 US.</td>
	</tr>
	<tr>
		<td><i class="fa fa-phone" aria-hidden="true"></i></td>
		<td>+1 628 123 4000</td>
	</tr>
	<tr>
		<td><i class="fa fa-envelope" aria-hidden="true"></i></td>
		<td><a href="mailto:berg@consulting.wp">berg@consulting.wp</a></td>
	</tr>
	<tr>
		<td><i class="fa fa-clock-o" aria-hidden="true"></i></td>
		<td>Mon–Sat: 8:00AM–6:00PM Sunday: CLOSED</td>
	</tr>
</table>
', ), 'shop' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'my account' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cart' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'contacts' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact one' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact two' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact three' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact four' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact five' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), ),


        'layout_14' => array( 'home' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'about us' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Our approach' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'partners' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'our team' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team list' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team member' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'careers' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Jobs listing' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'vacancy page' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'services' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Services Grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cases' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cases grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cases with filter' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'single case layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'single case layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'news' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'list view' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'grid view' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'portfolio' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single One' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single Two' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single Three' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'pages' => array( 'stm_mega' => 'boxed', 'stm_mega_cols' => '3', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Company overview' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Company overview1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_image' => '1440', 'stm_mega_textarea' => 'Consulting is a global consultbe- gan our operations a fewd...', ), 'Example Pages' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Testimonials 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Testimonials 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Typography' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), '404 Page' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Extra Pages' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Events Grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-th-large', ), 'Events Classic' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-bank', ), 'Events Modern' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-list-ul', ), 'Appointment' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-calendar-check-o', ), 'Contacts' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_mega_textarea' => '
<table class="megamenu-contacts">
	<tr>
		<td><i class="stm_megaicon stm-marker"></i></td>
		<td>1010 Avenue of the Moon New York, NY 10018 US.</td>
	</tr>
	<tr>
		<td><i class="fa fa-phone" aria-hidden="true"></i></td>
		<td>+1 628 123 4000</td>
	</tr>
	<tr>
		<td><i class="fa fa-envelope" aria-hidden="true"></i></td>
		<td><a href="mailto:berg@consulting.wp">berg@consulting.wp</a></td>
	</tr>
	<tr>
		<td><i class="fa fa-clock-o" aria-hidden="true"></i></td>
		<td>Mon–Sat: 8:00AM–6:00PM Sunday: CLOSED</td>
	</tr>
</table>
', ), 'shop' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'my account' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cart' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'contacts' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact one' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact two' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact three' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact four' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact five' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), ),


        'layout_15' => array( 'home' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'about us' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Our approach' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Partners' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'our team' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team list' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team member' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Careers' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Jobs listing' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Vacancy page' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'services' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Services Grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'news' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'list view' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'grid view' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cases' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Cases grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Cases with filter' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Single case layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Single case layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'portfolio' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single One' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single Two' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single Three' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'pages' => array( 'stm_mega' => 'boxed', 'stm_mega_cols' => '3', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Company overview' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Company overview1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_image' => '1528', 'stm_mega_textarea' => 'Consulting is a global consultbe- gan our operations a fewd...', ), 'Example Pages' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Testimonials 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Testimonials 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Typography' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), '404 Page' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Extra Pages' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Events Grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-th-large', ), 'Events Classic' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-bank', ), 'Events Modern' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-list-ul', ), 'Appointment' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-calendar-check-o', ), 'Contacts' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contacts1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_mega_textarea' => '
<table class="megamenu-contacts">
	<tr>
		<td><i class="stm_megaicon stm-marker"></i></td>
		<td>1010 Avenue of the Moon New York, NY 10018 US.</td>
	</tr>
	<tr>
		<td><i class="fa fa-phone" aria-hidden="true"></i></td>
		<td>+1 628 123 4000</td>
	</tr>
	<tr>
		<td><i class="fa fa-envelope" aria-hidden="true"></i></td>
		<td><a href="mailto:berg@consulting.wp">berg@consulting.wp</a></td>
	</tr>
	<tr>
		<td><i class="fa fa-clock-o" aria-hidden="true"></i></td>
		<td>Mon–Sat: 8:00AM–6:00PM Sunday: CLOSED</td>
	</tr>
</table>
', ), 'shop' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'My account' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Cart' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact one' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact two' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact three' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact four' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact five' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), ),


        'layout_16' => array( 'בית' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'עלינו' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'על אודות' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'אודות פריסה 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'אודות פריסה 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'אודות פריסה 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'גישתנו' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'שותפים' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'הצוות שלנו' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'רשימת קבוצות' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'רשת קְבוּצָה' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'חבר צוות' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'קריירה' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'רישום משרות' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'דף פנוי' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'שירותים' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'רשת שירותים' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'שירות פריסת 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'שירות בפריסה 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'שירות פריסה 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'במקרים' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'רשת ארונות' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'ארונות עם מסנן' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'פריסה במקרה יחידה 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'פריסה במקרה יחידה 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'חֲדָשׁוֹת' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'תצוגת רשימה' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'תצוגת רשת' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'תיק עבודות' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'יחיד תיק אחד' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'יחיד תיק השני' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'יחיד תיק שלושה' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'דפים' => array( 'stm_mega' => 'boxed', 'stm_mega_cols' => '3', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'אודות החברה' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'אודות החברה1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_image' => '1762', 'stm_mega_textarea' => 'Consulting is a global consultbe- gan our operations a fewd...', ), 'דפים לדוגמה' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'פריסת 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-left', ), 'פריסה 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-left', ), 'טיפוגרפיה' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-left', ), '404 עמוד' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-left', ), 'דפים נוספים' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'גריד אירועים' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-th-large', ), 'קלאסי אירועים' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-bank', ), 'אירועים מודרניים' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-list-ul', ), 'לקבוע פגישה' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-calendar-check-o', ), 'תיצור איתנו קשר' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_mega_textarea' => '
<table class="megamenu-contacts">
	<tr>
		<td><i class="stm_megaicon stm-marker"></i></td>
		<td>1010 שדרת הירח ניו יורק, ניו יורק 10018 ארה"ב.</td>
	</tr>
	<tr>
		<td><i class="fa fa-phone" aria-hidden="true"></i></td>
		<td>+1 628 123 4000</td>
	</tr>
	<tr>
		<td><i class="fa fa-envelope" aria-hidden="true"></i></td>
		<td><a href="mailto:berg@consulting.wp">berg@consulting.wp</a></td>
	</tr>
	<tr>
		<td><i class="fa fa-clock-o" aria-hidden="true"></i></td>
		<td>Mon-Sat: 8:00 AM-6:00PM יום ראשון: סגור</td>
	</tr>
</table>
', ), 'לִקְנוֹת' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'החשבון שלי' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'עֲגָלָה' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'אנשי קשר' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'לתקשר שני' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'צור שלוש' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'צור ארבעה' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'לתקשר חמש' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), ),


        'layout_17' => array( 'الصفحة الرئيسية' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'معلومات عنا' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'حول' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'حول تخطيط 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'حول تخطيط 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'حول تخطيط 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'نهجنا' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'شركاء' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'فريقنا' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'قائمة الفريق' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'شبكة فريق' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'أعضاء الفريق' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'وظائف' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'وظائف شاغرة قائمة' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'الصفحة الشغور' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'خدمات' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'خدمات الشبكة' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'خدمة تخطيط 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'تخطيط الخدمة 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'تخطيط الخدمة 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'الحالات' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'حالات الشبكة' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'الحالات مع فلتر' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'واحد حالة تخطيط 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'واحد حالة تخطيط 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'محفظة' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'محفظة واحدة واحدة' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'محفظة واحدة اثنين' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'محفظة واحدة ثلاثة' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'الصفحات' => array( 'stm_mega' => 'boxed', 'stm_mega_cols' => '3', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'نبذة عن الشركة' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'نبذة عن الشركة1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_image' => '1712', 'stm_mega_textarea' => 'الاستشارات هي استشارة عالمية لعملياتنا ...', ), 'أمثلة الصفحات' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'تخطيط 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-left', ), 'تخطيط 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-left', ), 'طباعة' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-left', ), '404 صفحة' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-left', ), 'صفحات إضافية' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'أحداث الشبكة' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-th-large', ), 'أحداث كلاسيكي' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-bank', ), 'الأحداث الحديثة' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-list-ul', ), 'إحجز موعد' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-calendar-check-o', ), 'جهات الاتصال' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'جهات الاتصال1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_mega_textarea' => '
<table class="megamenu-contacts">
	<tr>
		<td><i class="stm_megaicon stm-marker"></i></td>
		<td>1010 أفينو أوف ذي مون نيويورك، ني 10018 أوس.</td>
	</tr>
	<tr>
		<td><i class="fa fa-phone" aria-hidden="true"></i></td>
		<td>+1 628 123 4000</td>
	</tr>
	<tr>
		<td><i class="fa fa-envelope" aria-hidden="true"></i></td>
		<td><a href="mailto:berg@consulting.wp">berg@consulting.wp</a></td>
	</tr>
	<tr>
		<td><i class="fa fa-clock-o" aria-hidden="true"></i></td>
		<td>الإثنين-السبت: 8:00 صباحا - 6:00 مساء الأحد: مغلق</td>
	</tr>
</table>
', ), 'متجر' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'حسابي' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'العربة' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'جهة اتصال واحدة' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'الاتصال اثنين' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'الاتصال ثلاثة' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'الاتصال الأربعة' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'الاتصال خمسة' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), ),


        'layout_18' => array( 'خانه' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'دربارهی ما' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'در باره' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'درباره طرح 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'درباره چیدمان 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'درباره چیدمان 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'رویکرد ما' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'شرکای' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'تیم ما' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'لیست تیم' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'شبکه تیم' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'عضو تیم' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'مشاغل' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'جابز را' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'صفحه خالی' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'خدمات' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'خدمات شبکه' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'خدمات طرح 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'طرح خدمات 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'طرح خدمات 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'موارد' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'موارد شبکه' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'موارد با فیلتر' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'طرح مورد واحد 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'طرح مورد واحد 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'اخبار' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'مشاهده لیست' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'مشاهده شبکه' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'نمونه کارها' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'نمونه کارها تنها یکی' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'نمونه کارها تنها دو' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'نمونه کارها تنها سه' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'صفحات' => array( 'stm_mega' => 'boxed', 'stm_mega_cols' => '3', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'درباره شرکت' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'درباره شرکت1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_image' => '1527', 'stm_mega_textarea' => 'مشاوره یک مشاور جهانی است که عملیات ما چندین ...', ), 'صفحات نمونه' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'طرح 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-left', ), 'طرح 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-left', ), 'تایپوگرافی' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-left', ), '404 صفحه' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-left', ), 'صفحات اضافی' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'رویدادها شبکه' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-th-large', ), 'رویدادها کلاسیک' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-bank', ), 'رویدادها مدرن' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-list-ul', ), 'قرار گذاشتن' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-calendar-check-o', ), 'مخاطبین' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_mega_textarea' => '
<table class="megamenu-contacts">
	<tr>
		<td><i class="stm_megaicon stm-marker"></i></td>
		<td>1010 خیابان ماه New York، NY 10018 US.</td>
	</tr>
	<tr>
		<td><i class="fa fa-phone" aria-hidden="true"></i></td>
		<td>+1 628 123 4000</td>
	</tr>
	<tr>
		<td><i class="fa fa-envelope" aria-hidden="true"></i></td>
		<td><a href="mailto:berg@consulting.wp">berg@consulting.wp</a></td>
	</tr>
	<tr>
		<td><i class="fa fa-clock-o" aria-hidden="true"></i></td>
		<td>Mon-Sat: 8:00 AM-6:00PM یکشنبه: بسته شده است</td>
	</tr>
</table>
', ), 'فروشگاه' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'حساب من' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'گاری' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'اطلاعات تماس' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'تماس با یکی' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'تماس با دو' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'تماس با سه' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'تماس با چهار' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'تماس با پنج' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), ),


        'layout_20' => array( 'home' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'about us' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Our approach' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'partners' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'our team' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team list' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team member' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'careers' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Jobs listing' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'vacancy page' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'services' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Services Grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cases' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cases grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cases with filter' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'single case layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'single case layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'news' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'list view' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'grid view' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'portfolio' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single One' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single Two' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single Three' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'pages' => array( 'stm_mega' => 'boxed', 'stm_mega_cols' => '3', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Company overview' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Company overview1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_image' => '1821', 'stm_mega_textarea' => 'Consulting is a global consultbe- gan our operations a fewd...', ), 'Example Pages' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Testimonials 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Testimonials 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Typography' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), '404 Page' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Extra Pages' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Events Grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-th-large', ), 'Events Classic' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-bank', ), 'Events Modern' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-list-ul', ), 'Appointment' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-calendar-check-o', ), 'Contacts' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_mega_textarea' => '
<table class="megamenu-contacts">
	<tr>
		<td><i class="stm_megaicon stm-marker"></i></td>
		<td>1010 Avenue of the Moon New York, NY 10018 US.</td>
	</tr>
	<tr>
		<td><i class="fa fa-phone" aria-hidden="true"></i></td>
		<td>+1 628 123 4000</td>
	</tr>
	<tr>
		<td><i class="fa fa-envelope" aria-hidden="true"></i></td>
		<td><a href="mailto:berg@consulting.wp">berg@consulting.wp</a></td>
	</tr>
	<tr>
		<td><i class="fa fa-clock-o" aria-hidden="true"></i></td>
		<td>Mon–Sat: 8:00AM–6:00PM Sunday: CLOSED</td>
	</tr>
</table>
', ), 'shop' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'my account' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cart' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'contacts' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact one' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact two' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact three' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact four' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact five' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), ),


        'layout_zurich' => array( 'Home' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About us' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Our approach' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Partners' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Our team' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team list' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team member' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Careers' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Jobs listing' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Vacancy page' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Services' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Services Grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Cases' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Cases grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Cases with filter' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Single case layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Single case layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'News' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'List view' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Grid view' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single One' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single Two' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single Three' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Pages' => array( 'stm_mega' => 'boxed', 'stm_mega_cols' => '3', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Company overview' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Company overview1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_image' => '3273', 'stm_mega_textarea' => 'Consulting is a global consultbe- gan our operations a fewd...', ), 'Example Pages' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Testimonials layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Testimonials layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Typography' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), '404 Page' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Extra Pages' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Events Grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-th-large', ), 'Events Classic' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-bank', ), 'Events Modern' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-list-ul', ), 'Appointment' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-calendar-check-o', ), 'Contacts' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_mega_textarea' => '
<table class="megamenu-contacts">
	<tr>
		<td><i class="stm_megaicon stm-marker"></i></td>
		<td>1010 Avenue of the Moon New York, NY 10018 US.</td>
	</tr>
	<tr>
		<td><i class="fa fa-phone" aria-hidden="true"></i></td>
		<td>+1 628 123 4000</td>
	</tr>
	<tr>
		<td><i class="fa fa-envelope" aria-hidden="true"></i></td>
		<td><a href="mailto:berg@consulting.wp">berg@consulting.wp</a></td>
	</tr>
	<tr>
		<td><i class="fa fa-clock-o" aria-hidden="true"></i></td>
		<td>Mon–Sat: 8:00AM–6:00PM Sunday: CLOSED</td>
	</tr>
</table>
', ), 'Shop' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'My account' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Cart' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'contacts' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact one' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact two' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact three' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact four' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact five' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), ),


        'layout_amsterdam' => array( 'home' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'about us' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Our approach' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'partners' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'our team' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team list' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team member' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'careers' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Jobs listing' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'vacancy page' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'services' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Services Grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cases' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cases grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cases with filter' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'single case layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'single case layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'news' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'list view' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'grid view' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'portfolio' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single One' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single Two' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single Three' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'pages' => array( 'stm_mega' => 'boxed', 'stm_mega_cols' => '3', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Company overview' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Company overview1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_image' => '2172', 'stm_mega_textarea' => 'Consulting is a global consultbe- gan our operations a fewd...', ), 'Example Pages' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Testimonials 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Testimonials 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Typography' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), '404 Page' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Extra Pages' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Events Grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-th-large', ), 'Events Classic' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-bank', ), 'Events Modern' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-list-ul', ), 'Appointment' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-calendar-check-o', ), 'Contacts' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_mega_textarea' => '
<table class="megamenu-contacts">
	<tr>
		<td><i class="stm_megaicon stm-marker"></i></td>
		<td>1010 Avenue of the Moon New York, NY 10018 US.</td>
	</tr>
	<tr>
		<td><i class="fa fa-phone" aria-hidden="true"></i></td>
		<td>+1 628 123 4000</td>
	</tr>
	<tr>
		<td><i class="fa fa-envelope" aria-hidden="true"></i></td>
		<td><a href="mailto:berg@consulting.wp">berg@consulting.wp</a></td>
	</tr>
	<tr>
		<td><i class="fa fa-clock-o" aria-hidden="true"></i></td>
		<td>Mon–Sat: 8:00AM–6:00PM Sunday: CLOSED</td>
	</tr>
</table>
', ), 'shop' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'my account' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cart' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'contacts' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact one' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact two' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact three' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact four' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact five' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), ),


        'layout_davos' => array( 'home' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'about us' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Our approach' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'partners' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'our team' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team list' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team member' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'careers' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Jobs listing' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'vacancy page' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'services' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Services Grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cases' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cases grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cases with filter' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'single case layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'single case layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'news' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'list view' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'grid view' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'portfolio' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single One' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single Two' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single Three' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'pages' => array( 'stm_mega' => 'boxed', 'stm_mega_cols' => '3', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Company overview' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Company overview1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_image' => '2411', 'stm_mega_textarea' => 'Consulting is a global consultbe- gan our operations a fewd...', ), 'Example Pages' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Testimonials 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Testimonials 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Typography' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), '404 Page' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Extra Pages' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Events Grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-th-large', ), 'Events Classic' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-bank', ), 'Events Modern' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-list-ul', ), 'Appointment' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-calendar-check-o', ), 'Contacts' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_mega_textarea' => '
<table class="megamenu-contacts">
	<tr>
		<td><i class="stm_megaicon stm-marker"></i></td>
		<td>1010 Avenue of the Moon New York, NY 10018 US.</td>
	</tr>
	<tr>
		<td><i class="fa fa-phone" aria-hidden="true"></i></td>
		<td>+1 628 123 4000</td>
	</tr>
	<tr>
		<td><i class="fa fa-envelope" aria-hidden="true"></i></td>
		<td><a href="mailto:berg@consulting.wp">berg@consulting.wp</a></td>
	</tr>
	<tr>
		<td><i class="fa fa-clock-o" aria-hidden="true"></i></td>
		<td>Mon–Sat: 8:00AM–6:00PM Sunday: CLOSED</td>
	</tr>
</table>
', ), 'shop' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'my account' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cart' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'contacts' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact one' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact two' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact three' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact four' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact five' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), ),


        'layout_denver' => array( 'home' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'about us' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Our approach' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'partners' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'our team' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team list' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team member' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'careers' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Jobs listing' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'vacancy page' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'services' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Services Grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cases' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cases grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cases with filter' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'single case layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'single case layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'news' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'list view' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'grid view' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'portfolio' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single One' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single Two' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single Three' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'pages' => array( 'stm_mega' => 'boxed', 'stm_mega_cols' => '3', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Company overview' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Company overview1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_image' => '3007', 'stm_mega_textarea' => 'Consulting is a global consultbe- gan our operations a fewd...', ), 'Example Pages' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Testimonials 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Testimonials 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Typography' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), '404 Page' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Extra Pages' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Events Grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-th-large', ), 'Events Classic' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-bank', ), 'Events Modern' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-list-ul', ), 'Appointment' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-calendar-check-o', ), 'Contacts' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_mega_textarea' => '
<table class="megamenu-contacts">
	<tr>
		<td><i class="stm_megaicon stm-marker"></i></td>
		<td>1010 Avenue of the Moon New York, NY 10018 US.</td>
	</tr>
	<tr>
		<td><i class="fa fa-phone" aria-hidden="true"></i></td>
		<td>+1 628 123 4000</td>
	</tr>
	<tr>
		<td><i class="fa fa-envelope" aria-hidden="true"></i></td>
		<td><a href="mailto:berg@consulting.wp">berg@consulting.wp</a></td>
	</tr>
	<tr>
		<td><i class="fa fa-clock-o" aria-hidden="true"></i></td>
		<td>Mon–Sat: 8:00AM–6:00PM Sunday: CLOSED</td>
	</tr>
</table>
', ), 'shop' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'my account' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'cart' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'contacts' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact one' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact two' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact three' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact four' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact five' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), ),


        'layout_brussels' => array( 'Home' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About us' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Our approach' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Partners' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Our team' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team list' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team member' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Careers' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Jobs listing' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Vacancy page' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Services' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Services Grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Cases' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Cases grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Cases with filter' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Single case layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Single case layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'News' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'List view' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Grid view' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single One' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single Two' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single Three' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Pages' => array( 'stm_mega' => 'boxed', 'stm_mega_cols' => '3', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Company overview' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Company overview1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_image' => '33', 'stm_mega_textarea' => 'Consulting is a global consultbe- gan our operations a fewd...', ), 'Example Pages' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Testimonials 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Testimonials 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Typography' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), '404 Page' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Extra Pages' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Events Grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-th-large', ), 'Events Classic' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-bank', ), 'Events Modern' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-list-ul', ), 'Appointment' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-calendar-check-o', ), 'Contacts' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_mega_textarea' => '
<table class="megamenu-contacts">
	<tr>
		<td><i class="stm_megaicon stm-marker"></i></td>
		<td>1010 Avenue of the Moon New York, NY 10018 US.</td>
	</tr>
	<tr>
		<td><i class="fa fa-phone" aria-hidden="true"></i></td>
		<td>+1 628 123 4000</td>
	</tr>
	<tr>
		<td><i class="fa fa-envelope" aria-hidden="true"></i></td>
		<td><a href="mailto:berg@consulting.wp">berg@consulting.wp</a></td>
	</tr>
	<tr>
		<td><i class="fa fa-clock-o" aria-hidden="true"></i></td>
		<td>Mon–Sat: 8:00AM–6:00PM Sunday: CLOSED</td>
	</tr>
</table>
', ), 'Shop' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'My account' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Cart' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'contacts' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact one' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact two' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact three' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact four' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact five' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), ),


        'layout_los_angeles' => array( 'Home' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About us' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Our approach' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Partners' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Careers' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Jobs listing' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Vacancy page' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Our team' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team list' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team member' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Services' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Services Grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Services with Tabs' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Cases' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Cases grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Cases with filter' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Single case layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Single case layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'News' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'List view' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Grid view' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single One' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single Two' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single Three' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Pages' => array( 'stm_mega' => 'boxed', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Company overview' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Company overview1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_image' => '3799', 'stm_mega_textarea' => 'Consulting is a global consultbe- gan our operations a fewd...', ), 'Example Pages' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Testimonials 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Testimonials 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Typography' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), '404 Page' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Extra Pages' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Event Grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-th-large', ), 'Event Classic' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-bank', ), 'Event Modern' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-list-ul', ), 'Appointment' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-calendar-check-o', ), 'Contacts' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contacts1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_mega_textarea' => '
<table class="megamenu-contacts">
	<tr>
		<td><i class="stm_megaicon fa fa-map-marker"></i></td>
		<td>1010 Avenue of the Moon New York, NY 10018 US.</td>
	</tr>
	<tr>
		<td><i class="fa fa-phone" aria-hidden="true"></i></td>
		<td>+1 628 123 4000</td>
	</tr>
	<tr>
		<td><i class="fa fa-envelope" aria-hidden="true"></i></td>
		<td><a href="mailto:berg@consulting.wp">berg@consulting.wp</a></td>
	</tr>
	<tr>
		<td><i class="fa fa-clock-o" aria-hidden="true"></i></td>
		<td>Mon–Sat: 8:00AM–6:00PM Sunday: CLOSED</td>
	</tr>
</table>', ), 'Shop' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'My account' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Cart' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact one' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact two' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact three' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact four' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact five' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), ),


        'layout_toronto' => array( 'About us' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Our approach' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Partners' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Careers' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Jobs listing' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Vacancy page' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Our team' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team list' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team member' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Services' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Services Grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Services with Tabs' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Cases' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Cases grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Cases with filter' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Single case layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Single case layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'News' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'List view' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Grid view' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single One' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single Two' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single Three' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Pages' => array( 'stm_mega' => 'boxed', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Company overview' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Company overview1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_image' => '4173', 'stm_mega_textarea' => 'Consulting is a global consultbe- gan our operations a fewd...', ), 'Example Pages' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Testimonials 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Testimonials 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Typography' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), '404 Page' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Extra Pages' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Event Grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-th-large', ), 'Event Classic' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-bank', ), 'Event Modern' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-list-ul', ), 'Appointment' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-calendar-check-o', ), 'Contacts' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contacts1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_mega_textarea' => '<table class="megamenu-contacts">
	<tr>
		<td><i class="stm_megaicon fa fa-map-marker"></i></td>
		<td>1010 Avenue of the Moon New York, NY 10018 US.</td>
	</tr>
	<tr>
		<td><i class="fa fa-phone" aria-hidden="true"></i></td>
		<td>+1 628 123 4000</td>
	</tr>
	<tr>
		<td><i class="fa fa-envelope" aria-hidden="true"></i></td>
		<td><a href="mailto:berg@consulting.wp">berg@consulting.wp</a></td>
	</tr>
	<tr>
		<td><i class="fa fa-clock-o" aria-hidden="true"></i></td>
		<td>Mon–Sat: 8:00AM–6:00PM Sunday: CLOSED</td>
	</tr>
</table>', ), 'Shop' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'My account' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Cart' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact one' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact two' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact three' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact four' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact five' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), ),


        'layout_san_francisco' => array( 'Home' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About us' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Our approach' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Partners' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Careers' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Jobs listing' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Vacancy page' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Our team' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team list' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team member' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Services' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Services Grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Services with Tabs' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Cases' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Cases grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Cases with filter' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Single case layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Single case layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'News' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'List view' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Grid view' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single One' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single Two' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single Three' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Pages' => array( 'stm_mega' => 'boxed', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Company overview' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Company overview1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_image' => '4388', 'stm_mega_textarea' => 'Consulting is a global consultbe- gan our operations a fewd...', ), 'Example Pages' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Testimonials 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Testimonials 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Typography' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), '404 Page' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Extra Pages' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Event Grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-th-large', ), 'Event Classic' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-bank', ), 'Event Modern' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-list-ul', ), 'Appointment' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-calendar-check-o', ), 'Contacts' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contacts1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_mega_textarea' => '<table class="megamenu-contacts">
	<tr>
		<td><i class="stm_megaicon fa fa-map-marker"></i></td>
		<td>1010 Avenue of the Moon New York, NY 10018 US.</td>
	</tr>
	<tr>
		<td><i class="fa fa-phone" aria-hidden="true"></i></td>
		<td>+1 628 123 4000</td>
	</tr>
	<tr>
		<td><i class="fa fa-envelope" aria-hidden="true"></i></td>
		<td><a href="mailto:berg@consulting.wp">berg@consulting.wp</a></td>
	</tr>
	<tr>
		<td><i class="fa fa-clock-o" aria-hidden="true"></i></td>
		<td>Mon–Sat: 8:00AM–6:00PM Sunday: CLOSED</td>
	</tr>
</table>', ), 'Shop' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'My account' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Cart' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact one' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact two' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact three' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact four' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact five' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), ),

        'layout_beijing' => array( 'Home' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About us' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Our approach' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Partners' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Careers' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Jobs listing' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Vacancy page' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Our team' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team list' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team member' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Services' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Services Grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Services with Tabs' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Cases' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Cases grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Cases with filter' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Single case layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Single case layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'News' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'List view' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Grid view' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single One' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single Two' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single Three' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Pages' => array( 'stm_mega' => 'boxed', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Company overview' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Company overview1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_image' => '4338', 'stm_mega_textarea' => 'Consulting is a global consultbe- gan our operations a fewd...', ), 'Example Pages' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Testimonials 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Testimonials 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Typography' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), '404 Page' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Extra Pages' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Event Grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-th-large', ), 'Event Classic' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-bank', ), 'Event Modern' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-list-ul', ), 'Appointment' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-calendar-check-o', ), 'Contacts' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contacts1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_mega_textarea' => '<table class="megamenu-contacts">
	<tr>
		<td><i class="stm_megaicon fa fa-map-marker"></i></td>
		<td>1010 Avenue of the Moon New York, NY 10018 US.</td>
	</tr>
	<tr>
		<td><i class="fa fa-phone" aria-hidden="true"></i></td>
		<td>+1 628 123 4000</td>
	</tr>
	<tr>
		<td><i class="fa fa-envelope" aria-hidden="true"></i></td>
		<td><a href="mailto:berg@consulting.wp">berg@consulting.wp</a></td>
	</tr>
	<tr>
		<td><i class="fa fa-clock-o" aria-hidden="true"></i></td>
		<td>Mon–Sat: 8:00AM–6:00PM Sunday: CLOSED</td>
	</tr>
</table>', ), 'Shop' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'My account' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Cart' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact one' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact two' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact three' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact four' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact five' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), ),


        'layout_istanbul' => array( 'Home' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About us' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Our approach' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Partners' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Careers' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Jobs listing' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Vacancy page' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Our team' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team list' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team member' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Services' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Services Grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Services with Tabs' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Cases' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Cases grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Cases with filter' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Single case layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Single case layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'News' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'List view' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Grid view' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single One' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single Two' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single Three' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Pages' => array( 'stm_mega' => 'boxed', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Company overview' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Company overview1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_image' => '4479', 'stm_mega_textarea' => 'Consulting is a global consultbe- gan our operations a fewd...', ), 'Example Pages' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Testimonials 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Testimonials 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Typography' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), '404 Page' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Extra Pages' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Event Grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-th-large', ), 'Event Classic' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-bank', ), 'Event Modern' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-list-ul', ), 'Appointment' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-calendar-check-o', ), 'Contacts' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contacts1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_mega_textarea' => '<table class="megamenu-contacts">
	<tr>
		<td><i class="stm_megaicon fa fa-map-marker"></i></td>
		<td>1010 Avenue of the Moon New York, NY 10018 US.</td>
	</tr>
	<tr>
		<td><i class="fa fa-phone" aria-hidden="true"></i></td>
		<td>+1 628 123 4000</td>
	</tr>
	<tr>
		<td><i class="fa fa-envelope" aria-hidden="true"></i></td>
		<td><a href="mailto:berg@consulting.wp">berg@consulting.wp</a></td>
	</tr>
	<tr>
		<td><i class="fa fa-clock-o" aria-hidden="true"></i></td>
		<td>Mon–Sat: 8:00AM–6:00PM Sunday: CLOSED</td>
	</tr>
</table>', ), 'Shop' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'My account' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Cart' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact one' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact two' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact three' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact four' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact five' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), ),

        'layout_new_delhi' => array( 'Home' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About us' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Our approach' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Partners' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Careers' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Jobs listing' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Vacancy page' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Our team' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team list' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team member' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Services' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Services Grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Services with Tabs' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Cases' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Cases grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Cases with filter' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Single case layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Single case layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'News' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'List view' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Grid view' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single One' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single Two' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single Three' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Pages' => array( 'stm_mega' => 'boxed', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Company overview' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Company overview1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_image' => '4732', 'stm_mega_textarea' => 'Consulting is a global consultbe- gan our operations a fewd...', ), 'Example Pages' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Testimonials 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Testimonials 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Typography' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), '404 Page' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Extra Pages' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Event Grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-th-large', ), 'Event Classic' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-bank', ), 'Event Modern' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-list-ul', ), 'Appointment' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-calendar-check-o', ), 'Contacts' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contacts1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_mega_textarea' => '<table class="megamenu-contacts">
	<tr>
		<td><i class="stm_megaicon fa fa-map-marker"></i></td>
		<td>1010 Avenue of the Moon New York, NY 10018 US.</td>
	</tr>
	<tr>
		<td><i class="fa fa-phone" aria-hidden="true"></i></td>
		<td>+1 628 123 4000</td>
	</tr>
	<tr>
		<td><i class="fa fa-envelope" aria-hidden="true"></i></td>
		<td><a href="mailto:berg@consulting.wp">berg@consulting.wp</a></td>
	</tr>
	<tr>
		<td><i class="fa fa-clock-o" aria-hidden="true"></i></td>
		<td>Mon–Sat: 8:00AM–6:00PM Sunday: CLOSED</td>
	</tr>
</table>', ), 'Shop' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'My account' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Cart' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact one' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact two' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact three' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact four' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact five' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), ),


        'layout_milan' => array( 'Home' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About us' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Our approach' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Partners' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Careers' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Jobs listing' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Vacancy page' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Our team' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team list' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team member' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Services' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Services Grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Services with Tabs' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Cases' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Cases grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Cases with filter' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Single case layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Single case layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'News' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'List view' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Grid view' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single One' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single Two' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single Three' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Pages' => array( 'stm_mega' => 'boxed', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Company overview' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Company overview1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_image' => '4860', 'stm_mega_textarea' => 'Consulting is a global consultbe- gan our operations a fewd...', ), 'Example Pages' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Shop' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Testimonials 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Testimonials 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Typography' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), '404 Page' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Extra Pages' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Cart' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-shopping-cart', ), 'Event Grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-th-large', ), 'Event Classic' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-bank', ), 'Event Modern' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-list-ul', ), 'Appointment' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-calendar-check-o', ), 'Contacts' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contacts1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_mega_textarea' => '<table class="megamenu-contacts">
	<tr>
		<td><i class="stm_megaicon fa fa-map-marker"></i></td>
		<td>1010 Avenue of the Moon New York, NY 10018 US.</td>
	</tr>
	<tr>
		<td><i class="fa fa-phone" aria-hidden="true"></i></td>
		<td>+1 628 123 4000</td>
	</tr>
	<tr>
		<td><i class="fa fa-envelope" aria-hidden="true"></i></td>
		<td><a href="mailto:berg@consulting.wp">berg@consulting.wp</a></td>
	</tr>
	<tr>
		<td><i class="fa fa-clock-o" aria-hidden="true"></i></td>
		<td>Mon–Sat: 8:00AM–6:00PM Sunday: CLOSED</td>
	</tr>
</table>', ), 'Contact one' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact two' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact three' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact four' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact five' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), ),

        'layout_vienna' => array( 'Home' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About us' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Our approach' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Partners' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Careers' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Jobs listing' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Vacancy page' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Our team' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team list' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team member' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Services' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Services Grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Services with Tabs' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Cases' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Cases grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Cases with filter' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Single case layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Single case layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'News' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'List view' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Grid view' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single One' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single Two' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single Three' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Pages' => array( 'stm_mega' => 'boxed', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Company overview' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Company overview1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_image' => '5077', 'stm_mega_textarea' => 'Consulting is a global consultbe- gan our operations a fewd...', ), 'Example Pages' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Shop' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Testimonials 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Testimonials 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Typography' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), '404 Page' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Extra Pages' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Cart' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-shopping-cart', ), 'Event Grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-th-large', ), 'Event Classic' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-bank', ), 'Event Modern' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-list-ul', ), 'Appointment' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-calendar-check-o', ), 'Contacts' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contacts1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_mega_textarea'
        => '<table class="megamenu-contacts">
	<tr>
		<td><i class="stm_megaicon fa fa-map-marker"></i></td>
		<td>1010 Avenue of the Moon New York, NY 10018 US.</td>
	</tr>
	<tr>
		<td><i class="fa fa-phone" aria-hidden="true"></i></td>
		<td>+1 628 123 4000</td>
	</tr>
	<tr>
		<td><i class="fa fa-envelope" aria-hidden="true"></i></td>
		<td><a href="mailto:berg@consulting.wp">berg@consulting.wp</a></td>
	</tr>
	<tr>
		<td><i class="fa fa-clock-o" aria-hidden="true"></i></td>
		<td>Mon–Sat: 8:00AM–6:00PM Sunday: CLOSED</td>
	</tr>
</table>', ), 'Contact one' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact two' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact three' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact four' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact five' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), ),

        'layout_marseille' => array( 'Home' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About us' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Our approach' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Partners' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Careers' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Jobs listing' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Vacancy page' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Our team' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team list' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team member' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Services' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Services Grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Services with Tabs' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Cases' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Cases grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Cases with filter' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Single case layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Single case layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'News' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'List view' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Grid view' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single One' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single Two' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single Three' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Pages' => array( 'stm_mega' => 'boxed', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Company overview' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Company overview1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_image' => '5151', 'stm_mega_textarea' => 'Consulting is a global consultbe- gan our operations a fewd...', ), 'Example Pages' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Shop' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Testimonials 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Testimonials 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Typography' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), '404 Page' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Extra Pages' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Cart' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-shopping-cart', ), 'Event Grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-th-large', ), 'Event Classic' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-bank', ), 'Event Modern' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-list-ul', ), 'Appointment' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-calendar-check-o', ), 'Contacts' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contacts1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_mega_textarea' =>
            '<table class="megamenu-contacts">
        <tr>
            <td><i class="stm_megaicon fa fa-map-marker"></i></td>  
            <td>1010 Avenue of the Moon New York, NY 10018 US.</td>
        </tr>
        <tr>
            <td><i class="fa fa-phone" aria-hidden="true"></i></td>
            <td>+1 628 123 4000</td>
        </tr>
        <tr>
            <td><i class="fa fa-envelope" aria-hidden="true"></i></td>      
            <td><a href="mailto:berg@consulting.wp">berg@consulting.wp</a></td>
        </tr>
        <tr>
            <td><i class="fa fa-clock-o" aria-hidden="true"></i></td>
            <td>Mon–Sat: 8:00AM–6:00PM Sunday: CLOSED</td>
        </tr>
    </table>
', ), 'Contact one' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact two' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact three' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact four' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact five' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), ),

        'layout_berlin' => array( 'Home' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About us' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Our approach' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Partners' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Careers' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Jobs listing' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Vacancy page' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Our team' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team list' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team member' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Services' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Services Grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Services with Tabs' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Cases' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Cases grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Cases with filter' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Single case layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Single case layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'News' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'List view' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Grid view' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single One' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single Two' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single Three' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Pages' => array( 'stm_mega' => 'boxed', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Company overview' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Company overview1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_image' => '5588', 'stm_mega_textarea' => 'Consulting is a global consultbe- gan our operations a fewd...', ), 'Example Pages' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Shop' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Testimonials 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Testimonials 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Typography' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), '404 Page' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Extra Pages' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Cart' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-shopping-cart', ), 'Event Grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-th-large', ), 'Event Classic' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-bank', ), 'Event Modern' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-list-ul', ), 'Appointment' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-calendar-check-o', ), 'Contacts' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contacts1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_mega_textarea' => '<table class="megamenu-contacts">
	<tr>
		<td><i class="stm_megaicon fa fa-map-marker"></i></td>
		<td>1010 Avenue of the Moon New York, NY 10018 US.</td>
	</tr>
	<tr>
		<td><i class="fa fa-phone" aria-hidden="true"></i></td>
		<td>+1 628 123 4000</td>
	</tr>
	<tr>
		<td><i class="fa fa-envelope" aria-hidden="true"></i></td>
		<td><a href="mailto:berg@consulting.wp">berg@consulting.wp</a></td>
	</tr>
	<tr>
		<td><i class="fa fa-clock-o" aria-hidden="true"></i></td>
		<td>Mon–Sat: 8:00AM–6:00PM Sunday: CLOSED</td>
	</tr>
</table>', ), 'Contact one' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact two' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact three' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact four' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact five' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), ),

        'layout_lisbon' =>
            array(
                'Home' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'About us' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'About' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'About Layout 1' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'About Layout 2' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'About Layout 3' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Our approach' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Partners' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Careers' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Jobs listing' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Vacancy page' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Our team' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Team list' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Team grid' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Team member' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Services' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Services Grid' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Services with Tabs' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Service Layout 1' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Service Layout  2' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Service Layout 3' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Cases' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Cases grid' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Cases with filter' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Single case layout 1' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Single case layout 2' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'News' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'List view' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Grid view' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Portfolio' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Portfolio Single One' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Portfolio Single Two' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Portfolio Single Three' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Pages' =>
                    array(
                        'stm_mega' => 'boxed',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Company overview' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Company overview1' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_image' => '5151',
                        'stm_mega_textarea' => 'Consulting is a global consultbe- gan our operations a fewd...',
                    ),
                'Example Pages' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Shop' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-arrow-circle-right',
                    ),
                'Testimonials 1' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-arrow-circle-right',
                    ),
                'Testimonials 2' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-arrow-circle-right',
                    ),
                'Typography' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-arrow-circle-right',
                    ),
                '404 Page' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-arrow-circle-right',
                    ),
                'Extra Pages' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Cart' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-shopping-cart',
                    ),
                'Event Grid' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-th-large',
                    ),
                'Event Classic' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-bank',
                    ),
                'Event Modern' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-list-ul',
                    ),
                'Appointment' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-calendar-check-o',
                    ),
                'Contacts' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Contacts1' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_mega_textarea' => '<table class="megamenu-contacts">
	<tr>
		<td><i class="stm_megaicon fa fa-map-marker"></i></td>
		<td>1010 Avenue of the Moon New York, NY 10018 US.</td>
	</tr>
	<tr>
		<td><i class="fa fa-phone" aria-hidden="true"></i></td>
		<td>+1 628 123 4000</td>
	</tr>
	<tr>
		<td><i class="fa fa-envelope" aria-hidden="true"></i></td>
		<td><a href="mailto:berg@consulting.wp">berg@consulting.wp</a></td>
	</tr>
	<tr>
		<td><i class="fa fa-clock-o" aria-hidden="true"></i></td>
		<td>Mon–Sat: 8:00AM–6:00PM Sunday: CLOSED</td>
	</tr>
</table>',
                    ),
                'Contact one' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Contact two' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Contact three' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Contact four' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Contact five' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
            ),
        'layout_stockholm' =>
            array(
                'Home' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'About us' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'About' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'About Layout 1' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'About Layout 2' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'About Layout 3' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Our approach' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Partners' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Careers' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Jobs listing' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Vacancy page' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Our team' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Team list' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Team grid' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Team member' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Services' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Services Grid' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Services with Tabs' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Service Layout 1' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Service Layout  2' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Service Layout 3' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Cases' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Cases grid' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Cases with filter' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Single case layout 1' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Single case layout 2' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'News' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'List view' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Grid view' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Portfolio' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Portfolio Single One' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Portfolio Single Two' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Portfolio Single Three' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Pages' =>
                    array(
                        'stm_mega' => 'boxed',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Company overview' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Company overview1' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_image' => '5151',
                        'stm_mega_textarea' => 'Consulting is a global consultbe- gan our operations a fewd...',
                    ),
                'Example Pages' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Shop' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-arrow-circle-right',
                    ),
                'Testimonials 1' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-arrow-circle-right',
                    ),
                'Testimonials 2' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-arrow-circle-right',
                    ),
                'Typography' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-arrow-circle-right',
                    ),
                '404 Page' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-arrow-circle-right',
                    ),
                'Extra Pages' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Cart' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-shopping-cart',
                    ),
                'Event Grid' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-th-large',
                    ),
                'Event Classic' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-bank',
                    ),
                'Event Modern' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-list-ul',
                    ),
                'Appointment' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-calendar-check-o',
                    ),
                'Contacts' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Contacts1' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_mega_textarea' => '<table class="megamenu-contacts">
	<tr>
		<td><i class="stm_megaicon fa fa-map-marker"></i></td>
		<td>1010 Avenue of the Moon New York, NY 10018 US.</td>
	</tr>
	<tr>
		<td><i class="fa fa-phone" aria-hidden="true"></i></td>
		<td>+1 628 123 4000</td>
	</tr>
	<tr>
		<td><i class="fa fa-envelope" aria-hidden="true"></i></td>
		<td><a href="mailto:berg@consulting.wp">berg@consulting.wp</a></td>
	</tr>
	<tr>
		<td><i class="fa fa-clock-o" aria-hidden="true"></i></td>
		<td>Mon–Sat: 8:00AM–6:00PM Sunday: CLOSED</td>
	</tr>
</table>',
                    ),
                'Contact one' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Contact two' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Contact three' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Contact four' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Contact five' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
            ),
        'layout_barcelona' =>
            array(
                'Home' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'About us' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'About' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'About Layout 1' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'About Layout 2' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'About Layout 3' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Our approach' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Partners' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Careers' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Jobs listing' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Vacancy page' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Our team' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Team list' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Team grid' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Team member' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Services' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Services Grid' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Services with Tabs' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Service Layout 1' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Service Layout  2' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Service Layout 3' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Cases' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Cases grid' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Cases with filter' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Single case layout 1' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Single case layout 2' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'News' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'List view' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Grid view' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Portfolio' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Portfolio Single One' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Portfolio Single Two' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Portfolio Single Three' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Pages' =>
                    array(
                        'stm_mega' => 'boxed',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Company overview' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Company overview1' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_image' => '5151',
                        'stm_mega_textarea' => 'Consulting is a global consultbe- gan our operations a fewd...',
                    ),
                'Example Pages' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Shop' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-arrow-circle-right',
                    ),
                'Testimonials 1' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-arrow-circle-right',
                    ),
                'Testimonials 2' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-arrow-circle-right',
                    ),
                'Typography' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-arrow-circle-right',
                    ),
                '404 Page' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-arrow-circle-right',
                    ),
                'Extra Pages' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Cart' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-shopping-cart',
                    ),
                'Event Grid' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-th-large',
                    ),
                'Event Classic' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-bank',
                    ),
                'Event Modern' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-list-ul',
                    ),
                'Appointment' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-calendar-check-o',
                    ),
                'Contacts' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Contacts1' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_mega_textarea' => '<table class="megamenu-contacts">
	<tr>
		<td><i class="stm_megaicon fa fa-map-marker"></i></td>
		<td>1010 Avenue of the Moon New York, NY 10018 US.</td>
	</tr>
	<tr>
		<td><i class="fa fa-phone" aria-hidden="true"></i></td>
		<td>+1 628 123 4000</td>
	</tr>
	<tr>
		<td><i class="fa fa-envelope" aria-hidden="true"></i></td>
		<td><a href="mailto:berg@consulting.wp">berg@consulting.wp</a></td>
	</tr>
	<tr>
		<td><i class="fa fa-clock-o" aria-hidden="true"></i></td>
		<td>Mon–Sat: 8:00AM–6:00PM Sunday: CLOSED</td>
	</tr>
</table>',
                    ),
                'Contact one' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Contact two' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Contact three' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Contact four' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Contact five' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
            ),
        'layout_ankara' =>
            array(
                'Home' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'About us' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'About' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'About Layout 1' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'About Layout 2' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'About Layout 3' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Our approach' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Partners' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Careers' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Jobs listing' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Vacancy page' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Our team' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Team list' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Team grid' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Team member' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Services' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Services Grid' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Services with Tabs' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Service Layout 1' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Service Layout  2' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Service Layout 3' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Cases' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Cases grid' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Cases with filter' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Single case layout 1' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Single case layout 2' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'News' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'List view' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Grid view' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Portfolio' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Portfolio Single One' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Portfolio Single Two' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Portfolio Single Three' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Pages' =>
                    array(
                        'stm_mega' => 'boxed',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Company overview' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Company overview1' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_image' => '5151',
                        'stm_mega_textarea' => 'Consulting is a global consultbe- gan our operations a fewd...',
                    ),
                'Example Pages' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Shop' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-arrow-circle-right',
                    ),
                'Testimonials 1' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-arrow-circle-right',
                    ),
                'Testimonials 2' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-arrow-circle-right',
                    ),
                'Typography' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-arrow-circle-right',
                    ),
                '404 Page' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-arrow-circle-right',
                    ),
                'Extra Pages' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Cart' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-shopping-cart',
                    ),
                'Event Grid' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-th-large',
                    ),
                'Event Classic' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-bank',
                    ),
                'Event Modern' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-list-ul',
                    ),
                'Appointment' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-calendar-check-o',
                    ),
                'Contacts' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Contacts1' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_mega_textarea' => '<table class="megamenu-contacts">
	<tr>
		<td><i class="stm_megaicon fa fa-map-marker"></i></td>
		<td>1010 Avenue of the Moon New York, NY 10018 US.</td>
	</tr>
	<tr>
		<td><i class="fa fa-phone" aria-hidden="true"></i></td>
		<td>+1 628 123 4000</td>
	</tr>
	<tr>
		<td><i class="fa fa-envelope" aria-hidden="true"></i></td>
		<td><a href="mailto:berg@consulting.wp">berg@consulting.wp</a></td>
	</tr>
	<tr>
		<td><i class="fa fa-clock-o" aria-hidden="true"></i></td>
		<td>Mon–Sat: 8:00AM–6:00PM Sunday: CLOSED</td>
	</tr>
</table>',
                    ),
                'Contact one' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Contact two' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Contact three' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Contact four' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Contact five' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
            ),
        'layout_osaka' =>
            array(
                'Home' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'About us' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'About' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'About Layout 1' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'About Layout 2' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'About Layout 3' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Our approach' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Partners' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Careers' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Jobs listing' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Vacancy page' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Our team' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Team list' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Team grid' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Team member' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Services' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Services Grid' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Services with Tabs' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Service Layout 1' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Service Layout  2' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Service Layout 3' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Cases' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Cases grid' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Cases with filter' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Single case layout 1' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Single case layout 2' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'News' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'List view' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Grid view' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Portfolio' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Portfolio Single One' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Portfolio Single Two' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Portfolio Single Three' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Pages' =>
                    array(
                        'stm_mega' => 'boxed',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Company overview' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Company overview1' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_image' => '5151',
                        'stm_mega_textarea' => 'Consulting is a global consultbe- gan our operations a fewd...',
                    ),
                'Example Pages' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Shop' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-arrow-circle-right',
                    ),
                'Testimonials 1' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-arrow-circle-right',
                    ),
                'Testimonials 2' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-arrow-circle-right',
                    ),
                'Typography' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-arrow-circle-right',
                    ),
                '404 Page' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-arrow-circle-right',
                    ),
                'Extra Pages' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Cart' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-shopping-cart',
                    ),
                'Event Grid' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-th-large',
                    ),
                'Event Classic' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-bank',
                    ),
                'Event Modern' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-list-ul',
                    ),
                'Appointment' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-calendar-check-o',
                    ),
                'Contacts' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Contacts1' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_mega_textarea' => '<table class="megamenu-contacts">
	<tr>
		<td><i class="stm_megaicon fa fa-map-marker"></i></td>
		<td>1010 Avenue of the Moon New York, NY 10018 US.</td>
	</tr>
	<tr>
		<td><i class="fa fa-phone" aria-hidden="true"></i></td>
		<td>+1 628 123 4000</td>
	</tr>
	<tr>
		<td><i class="fa fa-envelope" aria-hidden="true"></i></td>
		<td><a href="mailto:berg@consulting.wp">berg@consulting.wp</a></td>
	</tr>
	<tr>
		<td><i class="fa fa-clock-o" aria-hidden="true"></i></td>
		<td>Mon–Sat: 8:00AM–6:00PM Sunday: CLOSED</td>
	</tr>
</table>',
                    ),
                'Contact one' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Contact two' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Contact three' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Contact four' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Contact five' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
            ),
        'layout_lyon' => array( 'Home' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About us' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Our approach' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Partners' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Careers' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Jobs listing' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Vacancy page' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Our team' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team list' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team member' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Services' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Services Grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Services with Tabs' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Cases' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Cases grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Cases with filter' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Single case layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Single case layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'News' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'List view' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Grid view' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single One' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single Two' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single Three' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Pages' => array( 'stm_mega' => 'boxed', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Company overview' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Company overview1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_image' => '33', 'stm_mega_textarea' => 'Consulting is a global consultbe- gan our operations a fewd...', ), 'Example Pages' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Shop' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Testimonials 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Testimonials 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Typography' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), '404 Page' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Extra Pages' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Cart' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-shopping-cart', ), 'Event Grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-th-large', ), 'Event Classic' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-bank', ), 'Event Modern' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-list-ul', ), 'Appointment' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-calendar-check-o', ), 'Contacts' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contacts1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_mega_textarea' => '<table class="megamenu-contacts">
	<tr>
		<td><i class="stm_megaicon fa fa-map-marker"></i></td>
		<td>1010 Avenue of the Moon New York, NY 10018 US.</td>
	</tr>
	<tr>
		<td><i class="fa fa-phone" aria-hidden="true"></i></td>
		<td>+1 628 123 4000</td>
	</tr>
	<tr>
		<td><i class="fa fa-envelope" aria-hidden="true"></i></td>
		<td><a href="mailto:berg@consulting.wp">berg@consulting.wp</a></td>
	</tr>
	<tr>
		<td><i class="fa fa-clock-o" aria-hidden="true"></i></td>
		<td>Mon–Sat: 8:00AM–6:00PM Sunday: CLOSED</td>
	</tr>
</table>', ), 'Contact one' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact two' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact three' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact four' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact five' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), ),

        'layout_melbourne' => array( 'Home' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About us' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'About Layout 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Our approach' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Partners' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Careers' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Jobs listing' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Vacancy page' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Our team' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team list' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Team member' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Services' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Services Grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Services with Tabs' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Service Layout 3' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Cases' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Cases grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Cases with filter' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Single case layout 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Single case layout 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'News' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'List view' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Grid view' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single One' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single Two' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Portfolio Single Three' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Pages' => array( 'stm_mega' => 'boxed', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Company overview' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Company overview1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_image' => '4018', 'stm_mega_textarea' => 'Consulting is a global consultbe- gan our operations a fewd...', ), 'Example Pages' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Testimonials 1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Testimonials 2' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Typography' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), '404 Page' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-arrow-circle-right', ), 'Extra Pages' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Event Grid' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-th-large', ), 'Event Classic' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-bank', ), 'Event Modern' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-list-ul', ), 'Appointment' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_menu_icon' => 'fa fa-calendar-check-o', ), 'Contacts' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contacts1' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', 'stm_mega_textarea' => '<table class="megamenu-contacts">
	<tr>
		<td><i class="stm_megaicon fa fa-map-marker"></i></td>
		<td>1010 Avenue of the Moon New York, NY 10018 US.</td>
	</tr>
	<tr>
		<td><i class="fa fa-phone" aria-hidden="true"></i></td>
		<td>+1 628 123 4000</td>
	</tr>
	<tr>
		<td><i class="fa fa-envelope" aria-hidden="true"></i></td>
		<td><a href="mailto:berg@consulting.wp">berg@consulting.wp</a></td>
	</tr>
	<tr>
		<td><i class="fa fa-clock-o" aria-hidden="true"></i></td>
		<td>Mon–Sat: 8:00AM–6:00PM Sunday: CLOSED</td>
	</tr>
</table>', ), 'Shop' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'My account' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Cart' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact one' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact two' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact three' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact four' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), 'Contact five' => array( 'stm_mega' => 'disabled', 'stm_mega_cols' => 'default', 'stm_mega_col_width' => 'default', 'stm_mega_cols_inside' => 'default', 'stm_mega_second_col_width' => 'default', ), ),

        'layout_liverpool' =>
            array(
                'Home' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'About us' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'About' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'About Layout 1' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'About Layout 2' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'About Layout 3' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'About Layout 4' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Our approach' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Partners' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Careers' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Jobs listing' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Job Listing Grid' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Vacancy page' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Vacancy page 2' =>
                    array(),
                'Our team' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Team list' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Our team list 2' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Team grid' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Team member' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'FAQ' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Services' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Services Grid' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Services Grid 2' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Services Grid 3' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Services List' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Services with Tabs' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Service Layout 1' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Service Layout  2' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Service Layout 3' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Service Layout 4' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Service Layout 5' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Cases' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Cases grid' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Cases grid 2' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Cases grid 3' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Cases list' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Cases with filter' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Single case layout 1' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Single case layout 2' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Single case layout 3' =>
                    array(),
                'Single case layout 4' =>
                    array(),
                'Single case layout 5' =>
                    array(),
                'News' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'List view' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'List view 2' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Grid view' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Grid view 2' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Single post' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Single post 2' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Portfolio' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Portfolio Style 2' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Portfolio Single One' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Portfolio Single Two' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Portfolio Single Three' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Pages' =>
                    array(
                        'stm_mega' => 'boxed',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Company overview' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Company overview1' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_image' => '5151',
                        'stm_mega_textarea' => 'Consulting is a global consultbe- gan our operations a fewd...',
                    ),
                'Example Pages' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Shop' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-arrow-circle-right',
                    ),
                'Testimonials 1' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-arrow-circle-right',
                    ),
                'Testimonials 2' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-arrow-circle-right',
                    ),
                'Graphs &#038; Charts' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-arrow-circle-right',
                    ),
                'Typography' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-arrow-circle-right',
                    ),
                'Coming Soon' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-arrow-circle-right',
                    ),
                'Extra Pages' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Cart' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-shopping-cart',
                    ),
                'Event Grid' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-th-large',
                    ),
                'Event Classic' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-bank',
                    ),
                'Event Modern' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-list-ul',
                    ),
                'Appointment' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-calendar-check-o',
                    ),
                'Cost Calculator' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-calculator',
                    ),
                'Contacts' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Contacts1' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_mega_textarea' => '<table class="megamenu-contacts">
	<tr>
		<td><i class="stm_megaicon fa fa-map-marker"></i></td>
		<td>1010 Avenue of the Moon New York, NY 10018 US.</td>
	</tr>
	<tr>
		<td><i class="fa fa-phone" aria-hidden="true"></i></td>
		<td>+1 628 123 4000</td>
	</tr>
	<tr>
		<td><i class="fa fa-envelope" aria-hidden="true"></i></td>
		<td><a href="mailto:berg@consulting.wp">berg@consulting.wp</a></td>
	</tr>
	<tr>
		<td><i class="fa fa-clock-o" aria-hidden="true"></i></td>
		<td>Mon–Sat: 8:00AM–6:00PM Sunday: CLOSED</td>
	</tr>
</table>',
                    ),
                'Contact one' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Contact two' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Contact three' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Contact four' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Contact five' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
            ),
        'layout_geneva' =>
            array(
                'Home' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'About us' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'About' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'About Layout 1' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'About Layout 2' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'About Layout 3' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'About Layout 4' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Our approach' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Partners' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Careers' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Jobs listing' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Job Listing Grid' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Vacancy page' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Vacancy page 2' =>
                    array(),
                'Our team' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Team list' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Our team list 2' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Team grid' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Team member' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'FAQ' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Services' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Services Grid' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Services Grid 2' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Services Grid 3' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Services List' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Services with Tabs' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Service Layout 1' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Service Layout  2' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Service Layout 3' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Service Layout 4' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Service Layout 5' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Cases' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Cases grid' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Cases grid 2' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Cases grid 3' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Cases list' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Cases with filter' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Single case layout 1' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Single case layout 2' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Single case layout 3' =>
                    array(),
                'Single case layout 4' =>
                    array(),
                'Single case layout 5' =>
                    array(),
                'News' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'List view' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'List view 2' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Grid view' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Grid view 2' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Single post' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Single post 2' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Portfolio' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Portfolio Style 2' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Portfolio Single One' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Portfolio Single Two' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Portfolio Single Three' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Pages' =>
                    array(
                        'stm_mega' => 'boxed',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Company overview' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Company overview1' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_image' => '6843',
                        'stm_mega_textarea' => 'Consulting is a global consultbe- gan our operations a fewd...',
                    ),
                'Example Pages' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Shop' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-arrow-circle-right',
                    ),
                'Testimonials 1' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-arrow-circle-right',
                    ),
                'Testimonials 2' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-arrow-circle-right',
                    ),
                'Graphs &#038; Charts' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-arrow-circle-right',
                    ),
                'Typography' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-arrow-circle-right',
                    ),
                'Webinars' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-arrow-circle-right',
                    ),
                'Extra Pages' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Cart' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-shopping-cart',
                    ),
                'Event Grid' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-th-large',
                    ),
                'Event Classic' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-bank',
                    ),
                'Event Modern' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-list-ul',
                    ),
                'Appointment' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-calendar-check-o',
                    ),
                'Cost Calculator' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_menu_icon' => 'fa fa-calculator',
                    ),
                'Contacts' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Contacts1' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                        'stm_mega_textarea' => '<table class="megamenu-contacts">
	<tr>
		<td><i class="stm_megaicon fa fa-map-marker"></i></td>
		<td>1010 Avenue of the Moon New York, NY 10018 US.</td>
	</tr>
	<tr>
		<td><i class="fa fa-phone" aria-hidden="true"></i></td>
		<td>+1 628 123 4000</td>
	</tr>
	<tr>
		<td><i class="fa fa-envelope" aria-hidden="true"></i></td>
		<td><a href="mailto:berg@consulting.wp">berg@consulting.wp</a></td>
	</tr>
	<tr>
		<td><i class="fa fa-clock-o" aria-hidden="true"></i></td>
		<td>Mon–Sat: 8:00AM–6:00PM Sunday: CLOSED</td>
	</tr>
</table>',
                    ),
                'Contact one' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Contact two' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Contact three' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Contact four' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
                'Contact five' =>
                    array(
                        'stm_mega' => 'disabled',
                        'stm_mega_cols' => 'default',
                        'stm_mega_col_width' => 'default',
                        'stm_mega_cols_inside' => 'default',
                        'stm_mega_second_col_width' => 'default',
                    ),
            ),



);
    return $mega;
}