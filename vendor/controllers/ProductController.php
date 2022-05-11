<?php

namespace controllers;

use core\AbstractController;

class ProductController extends AbstractController
{
    public function __construct()
    {
        parent::__construct('front');
    }

    public function index()
    {
        $uri = $_SERVER['REQUEST_URI'];
        $uriComponents = explode('/', $uri);
        array_shift($uriComponents);
        $id = (int) $uriComponents[2];
        $page = $this->productModel->showProduct($id);
        $this ->view->render('product_show_view', ['page'=>$page]);
    }

}