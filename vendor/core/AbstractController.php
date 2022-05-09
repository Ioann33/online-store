<?php

namespace core;

use models\categoryModel;
use models\pageModel;

abstract class AbstractController
{
    protected $view;

    protected $pageModel;

    protected $categoryModel;

    public function __construct($template)
    {
        $this->view = new View($template);
        $this->pageModel = new pageModel();
        $this->categoryModel = new categoryModel();
    }

    abstract function index();
}