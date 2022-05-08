<?php

namespace core;

abstract class AbstractController
{
    protected $view;

    public function __construct($default)
    {
        $this->view = new View($default);
    }

    abstract function index();
}