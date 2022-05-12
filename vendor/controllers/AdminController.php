<?php

namespace controllers;

use core\AbstractController;

class AdminController extends AbstractController
{
    public function __construct()
    {
        parent::__construct('admin');
    }

    public function index()
    {
        $page = $this->pageModel->showPage('home');// Home page content
        $this ->view->render('admin_index_view', ['page'=>$page[0]]);
    }

}