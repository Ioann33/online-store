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
        $this ->view->render('admin_index_view');
    }

}