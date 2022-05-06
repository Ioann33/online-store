<?php


class Route
{

    static public function init(){
        $uri = $_SERVER['REQUEST_URI'];
        $uriComponents = explode('/', $uri);
        array_shift($uriComponents);
        if(count($uriComponents)>2){
            self::notFound();
        }

        $controllerName = 'IndexController';
        $action = 'index';

        $controllerClass = '\controllers\\'.$controllerName;
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

    static public function url(string $controller = 'index', string $action = 'index')
    {
        return "/$controller/$action";
    }

    static public function redirect(string $url)
    {
        header("location: $url");
        exit();
    }

}
