<?php

    public $id_component;
    public $id_studient;
    public $mark;

    public function __construct($id_component,$id_studient,$mark) {
        $this->$id_component = $id_component;
        $this->$id_studient = $id_studient;
        $this->$mark = $mark;
    }

    public static function getAllComponentByIdModuleAndIdStudent($id_module,$id_studient) {


    }

    

?>