<?php

require_once("./person.php");

class teacher extends person {

    public function __construct($id_person,$lastname_person,$firstname_person,$mail_person,$username,$password) {
        $this->$id_person = $id_person;
        $this->$lastname_person = $lastname_person;
        $this->$firstname_person = $firstname_person;
        $this->$mail_person = $mail_person;
        $this->$username = $username;
        $this->password = $password;
    }

    
}

?>