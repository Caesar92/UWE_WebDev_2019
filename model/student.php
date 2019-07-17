<?php

require_once("./person.php");

class student extends person {

    public function __construct($id_person,$lastname_person,$firstname_person,$mail_person,$username,$password) {
        $this->$id_person = $id_person;
        $this->$lastname_person = $lastname_person;
        $this->$firstname_person = $firstname_person;
        $this->$mail_person = $mail_person;
        $this->$username = $username;
        $this->password = $password;
    }

    public static function getAllStudents() {
        $sql = "SELECT P.id_person,P.firstname_person, P.lastname_person 
                FROM person P
                    JOIN student S ON S.id_student=P.id_person";
        $sth = $dbh->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array());
        $results = $sth->fetchAll();
        return $results;
    }


}

?>