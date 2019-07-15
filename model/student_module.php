<?php

    public $id_module;
    public $id_student;

    public function __construct($id_module,$id_student) {
        $this->$id_student = $id_student;
        $this->$id_module = $id_module;
    }



?>