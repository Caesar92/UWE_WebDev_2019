<?php
    // require_once('controler/Controller.php');

    // $controller = new Controller();
    // $controller = invoke();
    // echo "coucou";
    //require_once("./model/databaseConnection.php");
    
    // require_once("./controler/home.ctrl.php");

    

//if (!auth()) {
//    header('WWW-Authenticate: Basic realm="My Realm"');
//  exit;
//}
//header('location: controler/main.ctrl.php');


require_once('model/person.php');
print_r(person::verifyInformationConnexion("jeremy"));
// print_r("test");

// $resultWithoutMark = module::getModuleWithoutMarkByStudent(1);
// print_r($resultWithoutMark);

?>
