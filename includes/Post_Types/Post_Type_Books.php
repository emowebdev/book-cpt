<?php
namespace BookCPT\Post_Types;

class Post_Type_Books extends Abstract_Post_Type_Register
{

   function init_properties()
   {
       $this->post_type = 'book';
       $labels = [
           'name' => __('Books', 'text_domain'),
           'singular_name' => __('Book', 'text_domain'),
           'add_new' => __('Add New', 'text_domain'),
           'add_new_item' => __('Add New Book','text_domain'),
           'edit_item' => __('Edit Book', 'text_domain'),
           'new_item' => __('New Book', 'text_domain'),
           'view_item' => __('View Book', 'text_domain'),
           'search_items' => __('Search Books', 'text_domain'),
           'not_found' =>  __('No Books found', 'text_domain'),
           'not_found_in_trash' => __('No Books found in Trash', 'text_domain'),
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
       'menu_icon' =>'dashicons-book-alt',
       'taxonomies' => [ 'post_tag'],
       'can_export' => true,
       'supports' => ['title','editor','thumbnail','custom-fields', 'comments', 'excerpt'],
       ];

   }
   public function __construct()
   {
        parent::__construct();
   }
}