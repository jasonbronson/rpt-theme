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
        
        register_nav_menus(array(
            'left-of-logo' => __('Left Of Logo', 'rpttheme'),
            'right-of-logo' => __('Right Of Logo', 'rpttheme')
        ));
    }

}
$nav = new MainNav();
