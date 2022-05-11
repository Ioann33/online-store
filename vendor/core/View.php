<?php

namespace core;
class View
{
    const VIEW_DIR = 'views';
    const TEMPLATE_DIR = 'templates';

    protected $view_template_dir ;
    protected $view_template_file ;

    public function __construct(string $template )
    {
        $this->view_template_dir = $template;
        $this->view_template_file = $template;

    }

    public function render(string $pageTemplate, array $data = []){
        extract($data);
        include_once 'vendor' . DIRECTORY_SEPARATOR . self::VIEW_DIR . DIRECTORY_SEPARATOR . self::TEMPLATE_DIR . DIRECTORY_SEPARATOR . $this->view_template_file.'.php';
    }

}