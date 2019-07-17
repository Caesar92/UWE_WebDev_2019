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

    // 
    public static function getModuleByName($name_module) {
        
        $sql = "SELECT id_module,name_module
                FROM module
                WHERE name_module=:name_module;";
        $sth = $GLOBALS['dbh']->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array(':name_module' => $name_module));
        $results = $sth->fetchAll();
        return $results;

    }

    public static function getModuleByIdStudent($id_student) {
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
        $sqlModulesWithMark = "SELECT M.name_module, M.number_module,C.name_component,C.coeff_component,MC.mark
                FROM student S
                JOIN mark_component MC ON S.id_student=MC.id_studient
                JOIN component C ON C.id_component=MC.id_component
                JOIN module M ON M.id_module=C.id_module
                WHERE S.id_student=:id_student
                GROUP BY M.name_module";
        $sth =  $GLOBALS['dbh']->prepare($sqlModulesWithMark, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array(':id_student' => $id_student));

        $tabWithMark = $sth->fetchAll();
        return $tabWithMark;
    }

    public static function getModuleWithoutMarkByStudent($id_student) {
        $sqlModulesWithoutMark= "SELECT M.name_module,M.number_module,C.name_component,C.coeff_component
                                FROM module M
                                LEFT JOIN component C ON C.id_module=M.id_module
                                WHERE M.id_module IN
                                (SELECT DISTINCT SM.id_module
                                FROM student_module SM
                                WHERE SM.id_studient=1 AND SM.id_module NOT IN (
                                SELECT C.id_module
                                FROM component C
                                JOIN mark_component MC ON MC.id_component=C.id_component
                                WHERE MC.id_studient=:id_student
                                ));";
        $sth = $GLOBALS['dbh']->prepare($sqlModulesWithoutMark, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array(':id_student' => $id_student));

        $tabWithoutMark = $sth->fetchAll();
        return $tabWithoutMark;
    }

    public static function getMarkOfStudentsByIdModule($id_module) {
        $sql = "SELECT P.firstname_person,P.lastname_person, AVG(MC.mark)AS \"Average\"
                FROM component C
                    JOIN mark_component MC ON MC.id_component=C.id_component
                    JOIN student S ON S.id_student=MC.id_studient
                    JOIN person P ON P.id_person=S.id_student
                WHERE C.id_module=:id_module
                GROUP BY P.id_person;";
        $sth = $GLOBALS['dbh']->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array(':id_module' => $id_module));

        $tab = $sth->fetchAll();
        return $tab;


    }

    public static function getMarkOfStudentsByIdModule() {
        $sql = "SELECT P.firstname_person,P.lastname_person, AVG(MC.mark)AS \"Average\"
                FROM component C
                    JOIN mark_component MC ON MC.id_component=C.id_component
                    JOIN student S ON S.id_student=MC.id_studient
                    JOIN person P ON P.id_person=S.id_student
                GROUP BY P.id_person;";
        $sth = $GLOBALS['dbh']->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array());
        $tab = $sth->fetchAll();
        return $tab;
    }

    public static function getStudentWithoutMarkByIdModule($id_module) {
        $sql = "SELECT P.firstname_person, P.lastname_person
                FROM person P
                    JOIN student S ON S.id_student=P.id_person
                    JOIN student_module SM ON SM.id_studient=S.id_student
                WHERE SM.id_module=2 AND S.id_student NOT IN 
                (SELECT MC.id_studient
                FROM mark_component MC
                JOIN component C ON C.id_component=MC.id_component
                WHERE C.id_module=2);";
        $sth = $GLOBALS['dbh']->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array(':id_module' => $id_module));

        $tab = $sth->fetchAll();
        return $tab;
    }

    public static function modifyModuleNameByIdModule($id_module,$name_module) {
        $sql = "UPDATE module
                SET name_module=:name_module
                WHERE id_module=:id_module";
         $stmt = $GLOBALS['dbh']->prepare($sql);
         $stmt->bindParam(':id_module', $id_module, PDO::PARAM_STR);
         $stmt->bindParam(':name_module', $name_module, PDO::PARAM_STR); 
         $stmt->execute();
    }

    public static function modifyNumberModuleByIdModule($id_module,$number_module) {
        $sql = "UPDATE module
                SET number_module=:number_module
                WHERE id_module=:id_module";
         $stmt = $GLOBALS['dbh']->prepare($sql);
         $stmt->bindParam(':id_module', $id_module, PDO::PARAM_STR); 
         $stmt->bindParam(':number_module', $number_module, PDO::PARAM_STR); 
         $stmt->execute();
    }
    
    public static function getAllModules() {
        $sql = "SELECT M.id_module,M.name_module,M.number_module
                FROM module M";
        $sth = $GLOBALS['dbh']->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array());

        $tab = $sth->fetchAll();
        return $tab; 
    }

    public static function insertModule($name_module,$number_module) {
        $sql = "INSERT INTO module(name_module,number_module)
                VALUES (:name_module,:number_module)";
        
        try {
            $stmt = $GLOBALS['dbh']->prepare($sql);
            $stmt->bindParam(':name_module', $name_module, PDO::PARAM_STR);
            $stmt->bindParam(':number_module', $number_module, PDO::PARAM_STR);
            $stmt->execute();
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }

    public static function getStudentNotInModuleByIdModule($id_module) {
        $sql = "SELECT P.id_person,P.firstname_person,P.lastname_person
                FROM person P
                    JOIN student S ON S.id_student=P.id_person
                WHERE S.id_student NOT IN
                (SELECT S.id_student
                FROM student S
                    JOIN student_module SM ON SM.id_studient=S.id_student
                WHERE SM.id_module=:id_module)";
        $sth = $GLOBALS['dbh']->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array(':id_module' => $id_module));
        $tab = $sth->fetchAll();
        return $tab; 
    }



}



?>