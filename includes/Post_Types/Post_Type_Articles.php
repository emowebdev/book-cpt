<?php
namespace BookCPT\Post_Types;

class Post_Type_Articles extends Abstract_Post_Type_Register
{

   function init_properties()
   {
       $this->post_type = 'article';
       $labels = [
           'name' => __('Articles', 'text_domain'),
           'singular_name' => __('Article', 'text_domain'),
           'add_new' => __('Add New', 'text_domain'),
           'add_new_item' => __('Add New Article','text_domain'),
           'edit_item' => __('Edit Article', 'text_domain'),
           'new_item' => __('New Article', 'text_domain'),
           'view_item' => __('View Article', 'text_domain'),
           'search_items' => __('Search Articles', 'text_domain'),
           'not_found' =>  __('No Articles found', 'text_domain'),
           'not_found_in_trash' => __('No Articles found in Trash', 'text_domain'),
           'parent_item_colon' => ''
       ];
         
       $this->args = [
       'labels' => $labels,
       'public' => true,
       'publicly_queryable' => true,
       'show_ui' => true,
       'query_var' => true,
       'rewrite' => true,
       'show_in_rest'       => true, // To use Gutenberg editor.
       'capability_type' => 'post',
       'hierarchical' => true,
       'menu_position' => 5,
       'menu_icon' =>'dashicons-welcome-write-blog',
       'can_export' => true,
       'supports' => ['title','editor','thumbnail','custom-fields', 'comments', 'excerpt'],
       ];

   }
   public function __construct()
   {
        parent::__construct();
   }
}