<?php
    // require_once('controler/Controller.php');

    // $controller = new Controller();
    // $controller = invoke();
    // echo "coucou";
    // require_once("./model/databaseConnection.php");
    
    require_once("./model/module.php");

    $result = module::getModuleByName("Mathematics");
    print_r($result);

//if (!auth()) {
//    header('WWW-Authenticate: Basic realm="My Realm"');
//  exit;
//}
//header('location: controler/main.ctrl.php');
?>
