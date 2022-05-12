<?php

namespace core;

use models\AdminModel;
use models\categoryModel;
use models\pageModel;
use models\ProductModel;
use models\ValidatorModel;

abstract class AbstractController
{
    protected $view;

    protected $pageModel;

    protected $categoryModel;

    protected $productModel;

    protected $AdminModel;

    public function __construct($template)
    {
        $this->view = new View($template);
        $this->pageModel = new pageModel();
        $this->categoryModel = new categoryModel();
        $this->productModel = new ProductModel();
        $this->AdminModel = new AdminModel();
    }

    abstract function index();
}