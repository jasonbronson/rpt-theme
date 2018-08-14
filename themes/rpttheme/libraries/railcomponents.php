<?php

namespace Libraries;

class RailComponents extends Loader {

    function __construct(){
        $this->addOptions();
    }

    /**
     * Adds the options page for global settings.
     *
     * @return void
     */
    public function addOptions(){
        acf_add_options_page(array(
            'page_title' => 'Rail Components',
            'menu_title'	=> 'Rail Components',
            'menu_slug' 	=> 'rail-components',
            'capability'	=> 'manage_options',
            'redirect'		=> false,
            'icon_url' => 'dashicons-admin-settings'
        ));
    }

}