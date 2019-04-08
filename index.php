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
    <link rel="stylesheet" href="css/style.css">
    <title>Maksym Food</title>
</head>
<body>
  <div class="container site">
    <h1 class="text-logo"><span class="fas fa-utensils"></span> Maksym Food <span class="fas fa-utensils"></h1>

    <?php
    require 'admin/database.php';
    echo'<nav>
           <ul class="nav nav-pills">';
    $db = Database::connect();
    $statement = $db->query('SELECT * FROM categories');
    $categories = $statement->fetchAll();
    foreach($categories AS $category){
      if($category['id'] == '1')
        echo '<li role="presentation" class="nav-item"><a class="nav-link active" href="#' . $category['name'] . '" data-toggle="tab">' .$category['name']. '</a></li>';
      else 
        echo '<li role="presentation" class="nav-item"><a class="nav-link" href="#' . $category['name'] . '" data-toggle="tab">' .$category['name']. '</a></li>';
    }
    echo   '</ul>
        </nav>';

    echo '<div class="tab-content">';
    foreach($categories as $category){
      if($category['id'] == '1')
        echo ' <div class="tab-pane active" id="' . $category['name'] . '">';
      else 
        echo ' <div class="tab-pane" id="' . $category['name'] . '">';
      
      echo'<div class="row">';

      $statement = $db->prepare ('SELECT * FROM items WHERE items.category = ?');
      $statement->execute(array($category['id']));

      while($item = $statement->fetch()){
        echo'<div class="col-sm-6 col-md-4">
                  <div class="card">
                    <img src="images/' . $item['image'] . '" alt="..." class="card-img-top">
                    <div class="price">' . number_format($item['price'], 2, '.', '') . ' $</div>
                    <div class="card-block">
                      <h4 class="card-title">'. $item['name'] .'</h4>
                      <p class="card-text">' . $item['description'] . '</p>
                      <a href="#" class="btn btn-order" role="button"><span class="fas fa-shopping-cart"></span>Commader</a>
                    </div>
                  </div>
                </div>';
      }

      echo  '</div>
          </div>';

    }

    Database::disconnect();
    echo'</div>';
    ?>


     
</div>
    
</body>
</html>