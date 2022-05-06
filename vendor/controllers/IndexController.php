<?php

namespace controllers;

use core\View;
class IndexController extends \core\AbstractController
{

    public function index()
    {
        $this ->view->render('front');
    }


}