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
        $this ->view->render('category_index_view');
    }

}