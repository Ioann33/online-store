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
        $message = \Route::getMessage();
        $this ->view->render('adminuser_index_view', ['page'=>$page, 'message'=>$message]);
    }

    public function create(){
        $errors = \Route::getErrors();
        $this ->view->render('adminuser_create_view',['errors'=>$errors]);
    }

    public function save(){
        $name = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');
        $passConfirm = filter_input(INPUT_POST, 'passConfirm');
        $errors = [];
        if ($name === ''){
            $errors[]= 'name must not be empty';
        }
        if ($email === ''){
            $errors[]= 'email must not be empty';
        }
        if ($password === ''){
            $errors[]= 'password must not be empty';
        }
        if ($password!==$passConfirm){
            $errors[]= 'do not match password';
        }

        if (count($errors)>0){
            \Route::addErrors($errors);
            \Route::redirect(\Route::url('AdminUserController', 'create'));
        }else{
            $result = $this->AdminModel->saveUser($name, $email,$password);
        }
        if ($result){
            $message = 'User create secsussfuly';
            \Route::addMessage($message);
            \Route::redirect(\Route::url('AdminUserController', 'index'));
        }else{
            $errors[]= 'this email alredy using';
            \Route::addErrors($errors);
            \Route::redirect(\Route::url('AdminUserController', 'create'));
        }
    }
    public function edit(){
        $id = filter_input(INPUT_POST, 'id');
        $user = $this->AdminModel->showUser($id);
        $this ->view->render('adminproduct_edit_view',['user'=>$user[0]]);
    }

    public function update(){
        $id = (int) filter_input(INPUT_POST, 'id');
        $name = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');
        $result = $this->AdminModel->updateUser($id, $name, $email, $password);

        if ($result){
            $message = 'user update is secsessfuly';
            \Route::addMessage($message);
            \Route::redirect(\Route::url('AdminUserController', 'index'));
        }else{
            exit('some errors with DB request');
        }
    }

    public function delete(){
        $id = (int) filter_input(INPUT_POST, 'id');
        $this->AdminModel->deleteUser($id);
        \Route::redirect(\Route::url('AdminUserController', 'index'));
    }
}