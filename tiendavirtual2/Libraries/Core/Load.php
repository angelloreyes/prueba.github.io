<?php
///Load
$controlllerFile= "Controllers/".$controller.".php";
if (file_exists($controlllerFile)) {
     require_once($controlllerFile);
     $controller = new $controller();
     if (method_exists($controller,$method)) {
        $controller->{$method}($params);
     }else{
       require_once("Controllers/Error.php");
     }
}else{
    require_once("Controllers/Error.php");
}




?>