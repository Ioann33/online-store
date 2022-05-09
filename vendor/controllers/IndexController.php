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
        //TODO remake model class and connect their
        $page = $this->pageModel->showPage();// Home page content
        $this ->view->render('index_index_view');
    }

    public function contacts(){
        //TODO remake model class and connect their
        $page = $this->pageModel->showPage();// Contacts page content
        $page.= ' contacts';
        $this ->view->render('index_contacts_view', ['page'=>$page]);
    }

    public function deliveryPay(){
        //TODO remake model class and connect their
        $page = $this->pageModel->showPage();// deliveryPay page content
        $page.= ' deliveryPay';
        $this ->view->render('index_deliverypay_view', ['page'=>$page]);
    }
}