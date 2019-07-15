<?php

require_once("databaseConnection.php");

class module {

    

    public $id_module;
    public $name_module;

    public function __construct($id_module,$name_module) {
        $this->$id_module = $name_module;
        $this->$name_module = $name_module;
    }

    public static function getModuleByName($name_module) {
        
        $sql = "SELECT id_module,name_module
                FROM module
                WHERE name_module=\":name_module\";";
        $sth = $dbh->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array(':name_module' => $name_module));
        $results = $sth->fetchAll();
        return $results;

    }


}



?>