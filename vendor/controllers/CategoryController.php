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
        $uriComponents = \Route::getUri();
        $id = (int) $uriComponents[2];
        $page = $this->categoryModel->showCategory($id);
        $this->view->render('category_show_view', ['page'=>$page]);
    }
}