<?php

/**
 * Resorts Class
 *
 * This is for Resorts custom post type
 */
namespace Libraries;
use Libraries\Options;
class Resorts extends Posts {
	protected $options;

	public function __construct(){
		$this->options = new Options();
		$this->args = array('post_type' => 'resorts');
	}
		
	protected function getDataObject($post){
		$authorData = $this->getAuthorById($post->ID, $post->post_author);
		$data = (object) array(
			'id' => $post->ID,
			'title' => get_field('resortname', $post->ID),
			'content' => get_field('about_resort', $post->ID),
			'url' => $post->post_name,
			'author_display_name' => $authorData['display_name'],
			'author_user_login' => $authorData['login'],
			/*'caption' => get_the_post_thumbnail_caption($post),
			'image_alt' => get_post_meta(get_post_thumbnail_id( $post->ID ), '_wp_attachment_image_alt', true),
			'thumbnail' => get_the_post_thumbnail_url( $post->ID, 'thumbnail' ),
			'image_fullsize' => get_the_post_thumbnail_url( $post->ID, 'full' ),
			'image_large' => get_the_post_thumbnail_url( $post->ID, 'large' ),
			'image_medium' => get_the_post_thumbnail_url( $post->ID, 'medium' ),*/
			'date' => $post->post_date,
			'date_site_format' => date($this->options->getDateFormat(), strtotime($post->post_date)),
			'permalink' => get_the_permalink($post->ID),
			//'featured_image' => get_field('blog_featured_image', $post->ID),
			
		);
		return $data;
	}
}
