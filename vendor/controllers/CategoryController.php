<?php

namespace controllers;

use core\AbstractController;

class CategoryController extends AbstractController
{
    public function __construct()
    {
        parent::__construct('front');
    }

    public function index()
    {
        $page = $this->categoryModel->showCategories();
        $this ->view->render('category_index_view', ['page'=>$page]);
    }

    public function showAllProducts(){
        $uri = $_SERVER['REQUEST_URI'];
        $uriComponents = explode('/', $uri);
        array_shift($uriComponents);
        $id = (int) $uriComponents[2];
        $page = $this->categoryModel->showCategory($id);
        $this->view->render('category_show_view', ['page'=>$page]);
    }
}