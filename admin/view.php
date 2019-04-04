<?php
  require 'database.php';

  if(!empty($_GET['id'])){
    $id = checkInput($_GET['id']);
  }

  $db = Database::connect();
  $statement = $db->prepare('SELECT items.id, items.name, items.description, items.price, items.image, categories.name AS category From items LEFT JOIN categories ON items.category = categories.id WHERE items.id = ?');
  $statement->execute(array($id));
  $item = $statement->fetch();
  Database::disconnect();


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
        <div class="col-sm-6">
          <h1><strong>Voir un item </strong></h1>
          <br>
          <form>
              <div class="form-group">
                <label>Nom:</label><?php echo ' ' . $item['name']; ?>
              </div>
              <div class="form-group">
                <label>Description:</label><?php echo ' ' . $item['description']; ?>
              </div>
              <div class="form-group">
                <label>Prix:</label><?php echo ' ' . number_format((float)$item['price'],2, '.', ''); ?>
              </div>
              <div class="form-group">
                <label>Catégorie:</label><?php echo ' ' . $item['category']; ?>
              </div>
              <div class="form-group">
                <label>Image:</label><?php echo ' ' . $item['image']; ?>
              </div>

          </form>
          <div class="form-actions">
              <a class="btn btn-primary" href="index.php"><span class="fas fa-arrow-left"></span> Retour</a>
          </div>
        </div>

        <div class="col-sm-6 site">
            <div class="card">
              <img src="<?php echo'../images/' . $item['image'] ?>" alt="..." class="card-img-top">
              <div class="price"><?php echo number_format((float)$item['price'],2, '.', ''); ?></div>
              <div class="card-block">
                <h4 class="card-title"><?php echo $item['name']; ?></h4>
                <p class="card-text"><?php echo $item['description']; ?></p>
                <a href="#" class="btn btn-order" role="button"><span class="fas fa-shopping-cart"></span>Commader</a>
              </div>
            </div>
          </div>
        
      </div>
    </div>
  </body>
</html>
