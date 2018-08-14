<?php
/**
 * Custom Post Types
 * @package
 * @subpackage
 */
namespace Libraries;

class CustomPostTypes {

  /**
   * Array of custom post types for class methods
   */
  protected $postTypes = array();

  /**
   * Array of field names that should replace the 'title' for the custom post types
   */
  protected $titles = array();

  protected $name = "Custom Forms";

  function __construct($posttypes, $titles, $name){

    $this->postTypes = $posttypes; 
    $this->titles = $titles;
    $this->name = $name;

    add_action( 'admin_menu', array($this, 'customPostTypeMenu') );
    //add_action( 'save_post', array($this, 'acfTitle') );

  }

  /**
   * Updates the title for the custom post type once the post is saved.
   *
   * @return void
   */
  public function customPostTypeMenu(){
    $name = $this->name;
    add_menu_page( $name, $name, 'edit_posts', 'menu_custom_forms', '','dashicons-admin-post', 20 );
  }

  /**
   * Creates a custom post type based on passed attributes
   *
   * @since 1.0.0
   * @param string $post_type The custom post type.
   * @param string $label The singular version of post type display name.
   * @param string $plural The plural version of the post type display name.
   * @param array $atts An array of attributes to update/add to the custom post type.
   */
  public function registerCustomPostType( $post_type, $label, $plural, $atts, $slug, $supports ) {
    $defaults = array(
      'labels' => array(
        'name' => __( $label ),
        'singular_name' => __( $label ),
        'add_new' => __( "Add New " . $label ),
        'add_new_item' => __( "Add New " . $label ),
        'edit_item' => __( "Edit " . $label ),
        'new_item' => __( "New " . $label ),
        'view_item' => __( "View " . $label ),
        'view_items' => __( "View " . $label ),
        'search_items' => __( "Search " . $label ),
        'not_found' => __( "No " . $plural . " found" ),
        'not_found_in_trash' => __( "No " . $plural . "found in trash" ),
        'parent_item_colon' => __( "Parent " . $label ),
        'all_items' => __( "All " . $plural ),
        'archives' => __( $label . " Archives" ),
        'attributes' => __( $label . " Attributes" ),
        'insert_into_item' => __( "Insert into " . $label ),
        'uploaded_to_this_item' => __( "Upload to this " . $label ),
        'featured_image' => __( "Featured Image" ),
        'set_featured_image' => __( "Set Featured Image" ),
        'remove_featured_image' => __( "Remove Featured Image" ),
        'use_featured_image' => __( "Use as featured image" ),
        'menu_name' => __( $label )
      ),
      'public' => true,
      'has_archive' => false,
      'hierarchical' => false,
      'supports' => $supports,
      'rewrite' => array( 'slug' => $slug )
    );

    $settings = array_merge( $defaults, $atts );

    register_post_type( $post_type, $settings );
  }

  /**
   * Updates the title for the custom post type once the post is saved.
   *
   * @param int $post_id The post id being edited
   * @return void
   */
  public function acfTitle( $post_id ) {
    $post_type = get_post_type( $post_id );
    if( !in_array( $post_type, $this->postTypes ) ) return;

    //Check it's not an auto save routine
     if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE )
          return;

    //Perform permission checks! For example:
    if ( !current_user_can('edit_post', $post_id) )
          return;

    $new_title = get_field($this->titles[$post_type], $post_id);
    $new_slug = sanitize_title( $new_title );

    remove_action( 'save_post', array($this, 'acfTitle'), 10 );
    wp_update_post( array(
			'ID' => $post_id,
			'post_title' => $new_title,
			'post_name' => $new_slug,
			) );
    add_action( 'save_post', array($this, 'acfTitle'), 10 );
  }

}

