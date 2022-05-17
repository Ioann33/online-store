<?php

namespace controllers;

use core\AbstractController;

class AdminCategoryController extends AbstractController
{
    public function __construct()
    {
        parent::__construct('admin');
    }

    public function index()
    {
        $page = $this->categoryModel->showCategories();
        $message = \Route::getMessage();
        $this->view->render('admincategory_index_view', [
            'page' => $page,
            'message' => $message
            ]);
    }

    public function create(){
        $errors = \Route::getErrors();
        $this ->view->render('admincategory_create_view',['errors'=>$errors]);
    }

    public function save()
    {
        $name = filter_input(INPUT_POST,'name');
        $errors = [];
        if ($name === ''){
            $errors[] = 'Category name cannot be empty';
        }
        if (count($errors)>0){
            \Route::addErrors($errors);
            \Route::redirect(\Route::url('AdminUserController', 'create'));
        }else{
            $result = $this->categoryModel->saveCategory($name);
        }
        if ($result){
            $message = 'Category added successfully';
            \Route::addMessage($message);
            \Route::redirect(\Route::url('AdminCategoryController', 'index'));
        }else {
            $errors[] = 'Something went wrong, please try again';
            \Route::addErrors($errors);
            \Route::redirect(\Route::url('AdminCategoryController', 'create'));
        }
    }

    public function edit()
    {
        $id = filter_input(INPUT_POST,'id');
        $category = $this->categoryModel->showCategory($id);
        $this->view->render('admincategory_edit_view', ['category' => $category]);
    }

    public function update()
    {
        $id = filter_input(INPUT_POST, 'id');
        $name = filter_input(INPUT_POST, 'name');
        $result = $this->categoryModel->updateCategory($id,$name);
        $errors = [];
        if($result){
            $message = 'Category changed successfully';
            \Route::addMessage($message);
            \Route::redirect(\Route::url('AdminCategoryController', 'index'));
        }else{
            $errors[] = 'Something went wrong, please try again';
            \Route::addErrors($errors);
            \Route::redirect(\Route::url('AdminCategoryController', 'edit'));
        }
    }

    public function delete()
    {
        $id = filter_input(INPUT_POST, 'id');
        $this->categoryModel->deleteCategory($id);
        \Route::redirect(\Route::url('AdminCategoryController', 'index'));
    }
}