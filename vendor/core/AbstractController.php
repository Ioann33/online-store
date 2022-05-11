<?php

namespace core;

use models\categoryModel;
use models\pageModel;
use models\ProductModel;

abstract class AbstractController
{
    protected $view;

    protected $pageModel;

    protected $categoryModel;

    protected $productModel;

    public function __construct($template)
    {
        $this->view = new View($template);
        $this->pageModel = new pageModel();
        $this->categoryModel = new categoryModel();
        $this->productModel = new ProductModel();
    }

    abstract function index();
}