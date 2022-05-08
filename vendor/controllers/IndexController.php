<?php

namespace controllers;

use core\View;
class IndexController extends \core\AbstractController
{

    public function __construct()
    {
        parent::__construct('front');
    }

    public function index()
    {
        $this ->view->render('index_index_view');
    }


}