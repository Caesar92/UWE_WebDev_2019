<?php

// Classe pour normaliser l'usage d'un controlleur
class Controler {

  // Methode statique qui relance un autre controleur
  static function forward(string $ctrl) {
    include($ctrl);
    exit(0);
  }

  // Methode statique qui relance un autre controleur
  // Passer en parametre si l'on veut que l'utilisateur soit identifié pour cette page et son niveau d'otorisation requis
  static function authentication() {
    // Verifier ici si l'utilisateur est connecté et/ou a le droit d'etre sur cette page
    // le rediriger vers la page principale ou la page d'authentification si besoin (redirigeren utilisant la fonction forward)
    // Si tout est en ordre, ne rien faire
  }


}



?>
