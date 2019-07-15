<?php

require_once("./databaseConnection.php");

class person {

    public $id_person;
    public $lastname_person;
    public $firstname_person;
    public $mail_person;
    public $username;
    public $password;

    public function __construct($id_person,$lasname_person,$firstname_person,$mail_person,$username,$password) {
        $this->$id_person = $id_person;
        $this->$lasname_person = $lasname_person;
        $this->$firstname_person = $firstname_person;
        $this->$mail_person = $mail_person;
        $this->$username = $username;
        $this->password = $password;
    }


    



}


?>