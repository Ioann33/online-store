<?php


class Route
{

    static public function getUri(){
        $uri = $_SERVER['REQUEST_URI'];
        $uriComponents = explode('/', $uri);
        array_shift($uriComponents);
        return $uriComponents;
    }

    static public function init(){
        $uriComponents = self::getUri();
        if(count($uriComponents)>3){
            self::notFound();
        }

        $controllerName = 'IndexController';
        $action = 'index';
        if(!empty($uriComponents[0])){
            $controllerName = mb_strtolower(urldecode($uriComponents[0]));
        }
        if(!empty($uriComponents[1])){
            $action = mb_strtolower(urldecode($uriComponents[1]));
        }
        $controllerClass = 'Controllers\\'.mb_ucfirst($controllerName);
        if(!class_exists($controllerClass)){
            self::notFound();
        }

        $controller = new $controllerClass();

        if(!method_exists($controller, $action)){
            self::notFound();
        }

        try{
            $controller->$action();
        }catch (Exception $e){
            exit($e->getMessage());
        }

    }


    static public function notFound()
    {
        http_response_code(404);
        exit();
    }

    /**
     * create url by controller and action
     * @param string $controller
     * @param string $action
     * @return string
     */
    static public function url(string $controller = 'IndexController', string $action = 'index',string $id = '')
    {
        return "/$controller/$action/$id";
    }

    /**
     * redirect to url
     * @param string $url
     */
    static public function redirect(string $url)
    {
        header("location: $url");
        exit();
    }

    static public function addErrors(array $errors)
    {
        session_start();
        $_SESSION['errors'] = $errors;
    }

    static public function getErrors()
    {
        session_start();
        $errors = [];
        if(isset($_SESSION['errors'])){
            $errors = $_SESSION['errors'];
            unset($_SESSION['errors']);
        }
        return $errors;
    }

}
