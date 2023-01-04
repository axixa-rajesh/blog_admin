<?php
class Loader
{
    function __construct()
    {
        $rq = request();
        $controller = DCONTROLLER;
        $method = DMETHOD;
        $para = $rq->para;

        if (Session::get('loginDtl')) {
            $controller = $rq->controller;
            $method = $rq->method;
            $para = $rq->para;
            if ($controller == DCONTROLLER && $method == DMETHOD) {

                $controller = LCONTROLLER;
                $method = LMETHOD;
                $para = $rq->para;
            }
        }
        $path = "apps/controllers/$controller.php";
        if (file_exists($path)) {
            require_once $path;
            $cobj = new $controller();
            $cobj->$method($para);
        } else {
            echo "404 page not found";
        }
    }
}
