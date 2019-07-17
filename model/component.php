<?php

require_once("databaseConnection.php");

class component {

    public $id_component;
    public $id_module;
    public $name_component;
    public $coeff_component;

    public function __construct($id_component,$id_module,$name_component,$coeff_component) {
        $this->$id_component = $id_component;
        $this->$id_module = $id_module;
        $this->$name_component = $name_component;
    }

    public static function getAllComponentByIdModule($id_module) {
        $sql = "SELECT C.id_component, C.id_module, C.name_component, C.coeff_component
                FROM component C
                WHERE C.id_module=:id_module;";
        $sth = $GLOBALS['dbh']->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array(':id_module' => $id_module));
        $results = $sth->fetchAll();
        return $results;

    }

    public static function modifyNameComponentByIdComponent($id_component,$name_component) {
        $sql = "UPDATE component
                SET name_component=:name_component
                WHERE id_component=:id_component";
         $stmt = $GLOBALS['dbh']->prepare($sql);
         $stmt->bindParam(':id_component', $id_component, PDO::PARAM_STR);
         $stmt->bindParam(':name_component', $name_component, PDO::PARAM_STR); 
         $stmt->execute();
    }

    public static function modifyCoeffComponentByIdComponent($id_component,$coeff_component) {
        $sql = "UPDATE component
                SET coeff_component=:coeff_component
                WHERE id_component=:id_component";
         $stmt = $GLOBALS['dbh']->prepare($sql);
         $stmt->bindParam(':id_component', $id_component, PDO::PARAM_STR);
         $stmt->bindParam(':coeff_component', $coeff_component, PDO::PARAM_STR); 
         $stmt->execute();

    }

}

?>