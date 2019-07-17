<?php

require_once("databaseConnection.php");

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

    public static function showInformationByIdPerson($id_person) {
        $sql="SELECT id_person,firstname_person,lastname_person,mail_person,username
        FROM person
        where id_person:id_person;";
        $sth = $GLOBALS['dbh']->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array(':id_person' => $id_person));

        $tabWithoutMark = $sth->fetchAll();
        return $tabWithoutMark;

    }

    public static function verifyInformationConnexion($username) {
        
        //Part to know if person is staff or student
        $sql1 = "SELECT P.username, P.password, P.firstname_person, P.lastname_person
        FROM person P
            JOIN student S ON S.id_student=P.id_person
        WHERE P.username=:username";
        $sth = $GLOBALS['dbh']->prepare($sql1, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array(':username' => $username));
        $isStudent= $sth->fetchAll();
        if (count($isStudent) == 0) {
            $role = "staff";
        }
        else {
            $role = "student";
        };

        // Creation de l'array de la personne
        $sql = "SELECT P.username, P.password, P.firstname_person, P.lastname_person
        FROM person P
        WHERE P.username=:username";
        $sth = $GLOBALS['dbh']->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array(':username' => $username));
        $tab= $sth->fetchAll();
        $tab[0][] = $role;
        return $tab[0];

    }
    



}


?>