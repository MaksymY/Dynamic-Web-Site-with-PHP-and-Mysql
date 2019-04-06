<?php 
  require 'database.php';

  if(!empty($_GET['id'])){
      $id = checkInput($_GET['id']);
  }

  if(!empty($_POST)){
      $id = checkInput($_POST['id']);
      $db = Database::connect();
      $statement = $db->prepare("DELETE FROM items WHERE id = ?");
      $statement->execute(array($id));
      Database::disconnect();
      header("Location: index.php");
  }

  function checkInput($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Lobster" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../css/adminStyle.css">
  <title>Maksym Food</title>
</head>

  <body>
    <h1 class="text-logo"><span class="fas fa-utensils"></span> Maksym Food <span class="fas fa-utensils"></h1>
    <div class="container admin">
      <div class="row">

          <h1><strong>Supprimer un item</strong></h1>
          <br>
          <form class="form" role="form" action="delete.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>"/>
            <p class="alert alert-warning">Êtes vous sûr de vouloir supprimer</p>
            <div class="form-actions">
                <button type="submite" class="btn btn-warning">Oui</button>
                <a class="btn btn-outline-dark" href="index.php">Non</a>
            </div>
        </form>
        
      </div>
    </div>
  </body>
</html>