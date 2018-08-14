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
			'title' => get_field('blog_title', $post->ID),
			'subtitle' => get_field('blog_subtitle', $post->ID),
			'content' => get_field('blog_content', $post->ID),
			'url' => $post->post_name,
			'blog_title' => get_field('blog_title', $post->ID),
			'author_display_name' => $authorData['display_name'],
			'author_user_login' => $authorData['login'],
			'caption' => get_the_post_thumbnail_caption($post),
			'image_alt' => get_post_meta(get_post_thumbnail_id( $post->ID ), '_wp_attachment_image_alt', true),
			'thumbnail' => get_the_post_thumbnail_url( $post->ID, 'thumbnail' ),
			'image_fullsize' => get_the_post_thumbnail_url( $post->ID, 'full' ),
			'image_large' => get_the_post_thumbnail_url( $post->ID, 'large' ),
			'image_medium' => get_the_post_thumbnail_url( $post->ID, 'medium' ),
			'date' => $post->post_date,
			'date_site_format' => date($this->options->getDateFormat(), strtotime($post->post_date)),
			'permalink' => get_the_permalink($post->ID),
			'featured_image' => get_field('blog_featured_image', $post->ID),
			'description_overview' => get_field('blog_news_overview', $post->ID),
			'offsite_link_enabled' => get_field('offsite_link_enabled', $post->ID),
			'offsite_link_url' => get_field('blog_offsite_link', $post->ID),
			'meta_description' => get_field('meta_description', $post->ID),
			'footer_button_visible' => get_field('blog_post_button_visible', $post->ID),
			'footer_button_text' => get_field('blog_post_button_text', $post->ID),
			'footer_button_url' => get_field('blog_post_button_url', $post->ID),
			'footer_button_newtab' => get_field('blog_post_button_newtab', $post->ID),
		);
		return $data;
	}
}
