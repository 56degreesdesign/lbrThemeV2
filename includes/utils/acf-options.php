<?php
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Callendar Settings',
		'menu_title'	=> 'Callendar',
		'parent_slug'	=> 'theme-general-settings',
	));

    acf_add_options_sub_page(array(
        'page_title' => 'Global sections',
        'menu_title' => 'Global sections',
        'parent_slug' => 'theme-general-settings',
    ));
    acf_add_options_sub_page(array(
        'page_title' => 'Footer',
        'menu_title' => 'Footer',
        'parent_slug' => 'theme-general-settings',
    ));
    
}


