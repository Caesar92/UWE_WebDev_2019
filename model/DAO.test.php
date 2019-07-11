<?php
require_once("../controler/helper.php");
require_once('../model/DAO.class.php');

$config = parse_ini_file("../config/config.ini");
// Choisi un exam qui existe
$idEval = '2015M3104';
// Calcule les liens
recomputeConfigPath($idEval);


$dao = new DAO;

echo "Liste des groupes\n";
$l = $dao->getGroupList();
var_dump($l);

$e = $dao->getEtudiant('zoubirim');
var_dump($e);

echo "Premier étudiant de C1\n";
$e = $dao->getFirstEtudiant('C1');
var_dump($e);

echo "Deuxième étudiant de C1\n";
$e = $dao->getNextEtudiant($e);
var_dump($e);

$groupe = 'C1';
echo "Tous les noms des étudiants de $groupe \n";
$e = $dao->getFirstEtudiant($groupe);
while ($e != false) {
  echo $e->nom."\n";
  $e = $dao->getNextEtudiant($e);
}

 ?>
