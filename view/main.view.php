<html>
<head>
  <meta charset="UTF-8">
  <title>Logiciel EtuEvalTool (aide à la correction)</title>
  <?php include '../view/include/head.php' ?>
</head>
<body>
  <div class="container">
    <div class="page-header">
      <h1> EtuEvalTool : l'aide à la correction</h1>
    </div>
    <?php if (isset($error) && $error != "") {print('<p class="alert alert-danger">Erreur : '.$error.'</p>');}?>

    <form action="doc.ctrl.php" id="doc"></form>
    <form action="newExam.ctrl.php" id="newExam"></form>
    <form action="logout.ctrl.php" id="logout"></form>


    <div class="btn-group">
      <button type="submit" class="btn btn-primary" form ="doc"><span class="glyphicon glyphicon-file"></span> Documentation</button>
      <button type="submit" class="btn btn-primary" form ="newExam"><span class="glyphicon glyphicon-plus-sign"></span> Nouvelle évaluation</button>
      <button type="submit" class="btn btn-primary" form ="logout"><span class="glyphicon glyphicon-off"></span> Logout (<?= $this->user ?>)</button>
    </div>
    <h2 class="text-primary"> Choisir l'évaluation à corriger :</h2>
    <form action="main.ctrl.php" class="form-horizontal">
          <?php
          foreach($this->titleExamList as $idEval => $examTitle) {
            echo '<div class="form-group">';
            echo '<label for="'.$idEval.'" class="control-label col-sm-4">'.$examTitle.'</label>';
            echo '<div class="">';
            echo '<button type="submit" class="btn btn-primary col-sm-3" name="idEval" value="'.$idEval.'" id="'.$idEval.'">'.$idEval.'</button> ';
            echo '</div>';
            echo '</div>';
          }
          ?>
    </form>
  </div>
</body>
</html>
