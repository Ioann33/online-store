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
        $this ->view->render('product_show_view');
    }

}