<?php

require_once("databaseConnection.php");

class module {

    

    public $id_module;
    public $name_module;
    public $number_module;

    public function __construct($id_module,$name_module) {
        $this->$id_module = $name_module;
        $this->$name_module = $name_module;
        $this->$number_module = $number_module;
    }

    public static function getModuleByName($name_module) {
        
        $sql = "SELECT id_module,name_module
                FROM module
                WHERE name_module=:name_module;";
        $sth = $GLOBALS['dbh']->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array(':name_module' => $name_module));
        $results = $sth->fetchAll();
        return $results;

    }

    public static function getModuleByIdPerson($id_student) {
        $sql = "SELECT M.id_module,M.name_module
        FROM module M
            JOIN student_module SM ON M.id_module=SM.id_module 
        WHERE SM.id_student=:id_student;";
        $sth = $dbh->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array(':id_student' => $id_student));
        $results = $sth->fetchAll();
        return $results;
    }

    public static function getModuleComponentMarkByStudent($id_student) {
        $sql = "SELECT S.id_student, M.name_module, M.number_module,C.name_component,C.coeff_component,MC.mark
                FROM student S
                    JOIN student_module SM ON SM.id_student=S.id_student
                    JOIN module M ON M.id_module=SM.id_module
                    JOIN mark_component MC ON SM.id_studient=MC.id_studient
                    JOIN component C ON C.id_component=MC.id_component
                    LEFT JOIN student_module SM ON SM.id_module=C.id_module
                WHERE id_student=:id_student;";
        $sth = $dbh->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array(':id_student' => $id_student));
        $results = $sth->fetchAll();


        return $tabOfMark
    }



}



?>