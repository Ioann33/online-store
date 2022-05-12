<?php

namespace controllers;

use core\View;
class SinginController extends \core\AbstractController
{

    public function __construct()
    {
        parent::__construct('admin');
    }

    public function index()
    {
        $this ->view->render('singin_show_view');
    }
}