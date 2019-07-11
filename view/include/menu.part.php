<nav>
  <!-- Les boutons peuvent être en dehors de lmeur formulaire s'ils s'y refrères grâce à l'attribut 'form' et 'id' -->

  <!-- Liste des formulaires avec les actions -->
  <form action="main.ctrl.php" id="main"></form>
  <form action="updateExamen.ctrl.php" id="updateExamen"></form>
  <form action="etatCorrection.ctrl.php" id="etatCorrection"></form>
  <form action="afficherBareme.ctrl.php" id="afficherBareme"></form>
  <form action="parametres.ctrl.php" id="parametres"></form>
  <form action="chooseGroup.ctrl.php" id="choixGroupe"></form>
  <form action="modifierBareme.ctrl.php" id="modifierBareme"></form>

  <!-- Liste des boutons de ces formulaires -->
  <div class="btn-group">
    <button type="submit" name="" form="main" class="btn btn-primary"> <span class="glyphicon glyphicon-chevron-left"></span> Changer d'évaluation</button>
    <button type="submit" name="" form="choixGroupe" class="btn btn-primary"> <span class="glyphicon glyphicon-user"></span> Corriger</button>
    <button type="submit" name="" form="etatCorrection" class="btn btn-primary"> <span class="glyphicon glyphicon-signal"></span> Etat des corrections</button>
    <button type="submit" name="" form="afficherBareme" class="btn btn-primary"> <span class="glyphicon glyphicon-print"></span> Afficher le bareme</button>
    <button type="submit" name="" form="modifierBareme" class="btn btn-primary"> <span class="glyphicon glyphicon-list-alt"></span> Modifier le bareme</button>
    <button type="submit" name="" form="parametres" class="btn btn-primary"> <span class="glyphicon glyphicon-cog"></span> Paramètres </button>
  </div>
</nav>

<?php if (isset($this->error) && $this->error != "") {print('<p class="alert alert-danger">Erreur : '.$this->error.'</p>');}?>
<?php if (isset($this->info) && $this->info != "") {print('<p class="alert alert-info">'.$this->info.'</p>');}?>
<?php if (isset($this->success) && $this->success != "") {print('<p class="alert alert-success">'.$this->success.'</p>');}?>
