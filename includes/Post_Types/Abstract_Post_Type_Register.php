<?php
/**
 * Register post type
 */

 namespace BookCPT\Post_Types;

 abstract class Abstract_Post_Type_Register
 {
    /**
     * 
     * @var string
     * Post type key. Must not exceed 20 characters and may only contain lowercase alphanumeric characters, dashes, and underscores
     */
    protected string $post_type;

    /**
     * @var array
     * Array or string of arguments for registering a post type
     */
    protected array $args;

    abstract protected function init_properties();

    public function register()
    {
        $this->init_properties();
        register_post_type($this->post_type, $this->args);
    }

    public function __construct()
    {
        add_action( 'init', [$this, 'register']);
    }
 }