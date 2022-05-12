<?php

namespace controllers;

use core\AbstractController;

class AdminUserController extends AbstractController
{
    public function __construct()
    {
        parent::__construct('admin');
    }

    public function index(){
        $page = $this->AdminModel->showUsers();
        $this ->view->render('adminuser_index_view', ['page'=>$page]);
    }
}