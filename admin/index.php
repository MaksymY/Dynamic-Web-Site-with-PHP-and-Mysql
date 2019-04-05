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
        <h1><strong>Liste des items </strong><a href="insert.php" class="btn btn-success btn-lg"><span class="fas fa-plus"></span>Ajouter</a></h1>
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>Nom</th>
              <th>Description</th>
              <th>Prix</th>
              <th>Catégorie</th>
              <th>Actions</th>
            </th>
          </thead>
          <tbody>
            <?php
            require 'database.php';
            $db = database::connect();
            $statement = $db->query('SELECT items.id, items.name, items.description, items.price, categories.name AS category From items LEFT JOIN categories ON items.category = categories.id ORDER BY items.id DESC');
            while($item = $statement->fetch()){
              echo '<tr>';
              echo '<td>' . $item['name'] . '</td>';
              echo '<td>' . $item['description'] . '</td>';
              echo '<td>' . number_format((float)$item['price'],2, '.', '') . '</td>';
              echo '<td>' . $item['category'] . '</td>';
              echo '<td width="350">';
              echo '<a class="btn btn-outline-dark" href="view.php?id=' . $item['id'] . '"><span class="far fa-eye"></span> Voir</a>';
              echo ' ';
              echo '<a class="btn btn-primary" href="update.php?id=' . $item['id'] . '"><span class="fas fa-pen"></span> Modifier</a>';
              echo ' ';
              echo '<a class="btn btn-danger" href="delete.php?id=' . $item['id'] . '"><span class="far fa-trash-alt"></span> Supprimer</a>';
              echo '</td>';
              echo '</tr>';
            }
            Database::disconnect();
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </body>
</html>
