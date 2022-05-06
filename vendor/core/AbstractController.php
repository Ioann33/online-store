<?php

namespace core;

abstract class AbstractController
{
    protected $view;

    public function __construct()
    {
        $this -> view = new View();
    }

    abstract function index();
}