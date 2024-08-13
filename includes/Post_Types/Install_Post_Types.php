<?php
namespace BookCPT\Post_Types;
use BookCPT\Interface_Classes_Init;


class Install_Post_Types implements Interface_Classes_Init
{
    public function classes_init()
    {
        $this->create_install_object(new Post_Type_Books());
        $this->create_install_object(new Post_Type_Articles());
    }

    private function create_install_object(Abstract_Post_Type_Register $installClass)
	{
		return $installClass;
	}

    public function __construct()
    {
        $this->classes_init();
    }
}