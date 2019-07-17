<?php
    

    require_once("model/databaseConnection.php");
    require_once("model/mark_component.php");
    require_once("model/module.php");
    require_once("model/person.php");
    require_once("model/student_module.php");
    require_once("model/student.php");
    require_once("model/teacher.php");

    



    function connexion() {

        

        require('view/login.php';)
    }


    $result = module::getModuleByName("Mathematics");
    print_r($result);




?>