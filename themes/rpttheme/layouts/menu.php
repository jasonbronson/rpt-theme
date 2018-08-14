<?php
namespace Layouts;

class MainNav
{
    public function __construct()
    {
        //register main nav
        add_action('init', array($this, 'registerNavMenu'));
    }
    public function registerNavMenu()
    {
        register_nav_menus(
            array(
                'primary' => __('Header Nav Menu'),
                'footer_left' => __('Footer Left Nav Menu'),
                'footer_right' => __('Footer Right Nav Menu'),
            )
        );
    }
}
$nav = new MainNav();
