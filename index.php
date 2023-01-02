<?php
    require_once("Config/Config.php");
    require_once("Helpers/Helpers.php");

    $url = !empty($_GET["url"]) ? $_GET["url"]: "Home/Home";
    $arrUrl = explode("/", $url);
    $controller = $arrUrl[0];
    $method = $arrUrl[0];
    $params = "";
    
    
    spl_autoload_register(function($class){
        if(file_exists('Libraries/Core/'.$class.".php")){
            echo $class;
            require_once('Libraries/Core/'.$class.".php");
        }
    });
    //Load
    $controllerFile = "Controllers/".$controller.".php";
    if(file_exists($controllerFile)){
        require_once($controllerFile);
        $controller = new $controller();
        if(method_exists($controller, $method)){
            $controller->{$method}($params);
            echo "<br>Existe el metodo";
        }else{
            echo "No existe metodo";
        }
    }else{
        echo "No existe controlador";
    }


?>