<?php

namespace controllers;

use core\View;
class SinginController extends \core\AbstractController
{

    public function __construct()
    {
        parent::__construct('front');
    }

    public function index()
    {
        $errors = \Route::getErrors();
        var_dump($errors);
        $this->view->render('singin_show_view', ['errors' => $errors]);
    }

    public function validationUser()
    {
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');
        $userFromDataBase = $this->AdminModel->getUserByEmail($email);
        if(!$userFromDataBase){
            $errors[] = 'Email or password entered is incorrect';
            \Route::addErrors($errors);
            \Route::redirect(\Route::url('SinginController', 'index'));
        }
        if($password === $userFromDataBase['password']){
            \Route::redirect(\Route::url('AdminController', 'index'));
        }else{
            $errors[] = 'Email or password entered is incorrect';
            \Route::addErrors($errors);
            \Route::redirect(\Route::url('SinginController', 'index'));
        }
    }

}