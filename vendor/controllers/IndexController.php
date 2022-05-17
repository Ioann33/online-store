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
        $page = $this->pageModel->showPage('home');// Home page content
        $this ->view->render('index_index_view', ['page'=>$page[0]]);
    }

    public function contacts(){
        $page = $this->pageModel->showPage('contacts');
        $this ->view->render('index_contacts_view', ['page'=>$page[0]]);
    }

    public function deliveryPay(){
        $page = $this->pageModel->showPage('deliveryPay');
        $this ->view->render('index_deliverypay_view', ['page'=>$page[0]]);
    }
}