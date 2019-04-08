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


    ?>


      </ul>
    </nav>

    <div class="tab-content">
      <div class="tab-pane active" id="Menus">
        <div class="row">

          <div class="col-sm-6 col-md-4">
            <div class="card">
              <img src="images/m1.png" alt="..." class="card-img-top">
              <div class="price">8.90 $</div>
              <div class="card-block">
                <h4 class="card-title">Menu Classic</h4>
                <p class="card-text">Sandwitch: Burger, Salades, Tomate, Cornichon + Frites + Boissons</p>
                <a href="#" class="btn btn-order" role="button"><span class="fas fa-shopping-cart"></span>Commader</a>
              </div>
            </div>
          </div>
        <div class="col-sm-6 col-md-4">
            <div class="card">
              <img src="images/m2.png" alt="..." class="card-img-top">
              <div class="price">7.60 $</div>
              <div class="card-block">
                <h4 class="card-title">Menu Classic</h4>
                <p class="card-text">Sandwitch: Burger, Salades, Tomate, Cornichon + Frites + Boissons</p>
                <a href="#" class="btn btn-order" role="button"><span class="fas fa-shopping-cart"></span>Commader</a>
              </div>
            </div>
          </div>
        <div class="col-sm-6 col-md-4">
            <div class="card">
              <img src="images/m3.png" alt="..." class="card-img-top">
              <div class="price">8.90 $</div>
              <div class="card-block">
                <h4 class="card-title">Menu Classic</h4>
                <p class="card-text">Sandwitch: Burger, Salades, Tomate, Cornichon + Frites + Boissons</p>
                <a href="#" class="btn btn-order" role="button"><span class="fas fa-shopping-cart"></span>Commader</a>
              </div>
            </div>
          </div>
        <div class="col-sm-6 col-md-4">
            <div class="card">
              <img src="images/m4.png" alt="..." class="card-img-top">
              <div class="price">8.90 $</div>
              <div class="card-block">
                <h4 class="card-title">Menu Classic</h4>
                <p class="card-text">Sandwitch: Burger, Salades, Tomate, Cornichon + Frites + Boissons</p>
                <a href="#" class="btn btn-order" role="button"><span class="fas fa-shopping-cart"></span>Commader</a>
              </div>
            </div>
          </div>
        <div class="col-sm-6 col-md-4">
            <div class="card">
              <img src="images/m5.png" alt="..." class="card-img-top">
              <div class="price">8.90 $</div>
              <div class="card-block">
                <h4 class="card-title">Menu Classic</h4>
                <p class="card-text">Sandwitch: Burger, Salades, Tomate, Cornichon + Frites + Boissons</p>
                <a href="#" class="btn btn-order" role="button"><span class="fas fa-shopping-cart"></span>Commader</a>
              </div>
            </div>
          </div>
        <div class="col-sm-6 col-md-4">
            <div class="card">
              <img src="images/m6.png" alt="..." class="card-img-top">
              <div class="price">8.90 $</div>
              <div class="card-block">
                <h4 class="card-title">Menu Classic</h4>
                <p class="card-text">Sandwitch: Burger, Salades, Tomate, Cornichon + Frites + Boissons</p>
                <a href="#" class="btn btn-order" role="button"><span class="fas fa-shopping-cart"></span>Commader</a>
              </div>
            </div>
          </div>

      </div>
    </div>
    <div class="tab-pane" id="Burgers">
        <div class="row">

          <div class="col-sm-6 col-md-4">
            <div class="card">
              <img src="images/b1.png" alt="..." class="card-img-top">
              <div class="price">4.90 $</div>
              <div class="card-block">
                <h4 class="card-title">Burger Classic</h4>
                <p class="card-text">Sandwitch: Burger, Salades, Tomate, Cornichon </p>
                <a href="#" class="btn btn-order" role="button"><span class="fas fa-shopping-cart"></span>Commader</a>
              </div>
            </div>
          </div>
        <div class="col-sm-6 col-md-4">
            <div class="card">
              <img src="images/b2.png" alt="..." class="card-img-top">
              <div class="price">4.90 $</div>
              <div class="card-block">
                <h4 class="card-title">Burger Poulet</h4>
                <p class="card-text">Sandwitch: Burger, Salades, Tomate, Cornichon</p>
                <a href="#" class="btn btn-order" role="button"><span class="fas fa-shopping-cart"></span>Commader</a>
              </div>
            </div>
          </div>
        <div class="col-sm-6 col-md-4">
            <div class="card">
              <img src="images/b3.png" alt="..." class="card-img-top">
              <div class="price">4.90 $</div>
              <div class="card-block">
                <h4 class="card-title">Burger Poisson</h4>
                <p class="card-text">Sandwitch: Burger, Salades, Tomate, Cornichon</p>
                <a href="#" class="btn btn-order" role="button"><span class="fas fa-shopping-cart"></span>Commader</a>
              </div>
            </div>
          </div>
        <div class="col-sm-6 col-md-4">
            <div class="card">
              <img src="images/b4.png" alt="..." class="card-img-top">
              <div class="price">4.90 $</div>
              <div class="card-block">
                <h4 class="card-title">Burger Chesse</h4>
                <p class="card-text">Sandwitch: Burger, Salades, Tomate, Cornichon</p>
                <a href="#" class="btn btn-order" role="button"><span class="fas fa-shopping-cart"></span>Commader</a>
              </div>
            </div>
          </div>
        <div class="col-sm-6 col-md-4">
            <div class="card">
              <img src="images/b5.png" alt="..." class="card-img-top">
              <div class="price">50 $</div>
              <div class="card-block">
                <h4 class="card-title">Burger Caviar</h4>
                <p class="card-text">Sandwitch: Burger, Salades, Tomate, Cornichon</p>
                <a href="#" class="btn btn-order" role="button"><span class="fas fa-shopping-cart"></span>Commader</a>
              </div>
            </div>
          </div>
        <div class="col-sm-6 col-md-4">
            <div class="card">
              <img src="images/b6.png" alt="..." class="card-img-top">
              <div class="price">100 $</div>
              <div class="card-block">
                <h4 class="card-title">Burger des Rois</h4>
                <p class="card-text">Sandwitch: Burger, Salades, Tomate, Cornichon</p>
                <a href="#" class="btn btn-order" role="button"><span class="fas fa-shopping-cart"></span>Commader</a>
              </div>
            </div>
          </div>

      </div>
    </div>

    <div class="tab-pane" id="Snacks">
        <div class="row">

          <div class="col-sm-6 col-md-4">
            <div class="card">
              <img src="images/s1.png" alt="..." class="card-img-top">
              <div class="price">3.50 $</div>
              <div class="card-block">
                <h4 class="card-title">Frites</h4>
                <p class="card-text"> Frites croustillantes</p>
                <a href="#" class="btn btn-order" role="button"><span class="fas fa-shopping-cart"></span>Commader</a>
              </div>
            </div>
          </div>
        <div class="col-sm-6 col-md-4">
            <div class="card">
              <img src="images/s2.png" alt="..." class="card-img-top">
              <div class="price">3.50 $</div>
              <div class="card-block">
                <h4 class="card-title">Onions Rings</h4>
                <p class="card-text">Onions doré et croustillant </p>
                <a href="#" class="btn btn-order" role="button"><span class="fas fa-shopping-cart"></span>Commader</a>
              </div>
            </div>
          </div>
        <div class="col-sm-6 col-md-4">
            <div class="card">
              <img src="images/s3.png" alt="..." class="card-img-top">
              <div class="price">3.50 $</div>
              <div class="card-block">
                <h4 class="card-title">Nuget</h4>
                <p class="card-text">Viande de poulet savoureuse</p>
                <a href="#" class="btn btn-order" role="button"><span class="fas fa-shopping-cart"></span>Commader</a>
              </div>
            </div>
          </div>
        <div class="col-sm-6 col-md-4">
            <div class="card">
              <img src="images/s4.png" alt="..." class="card-img-top">
              <div class="price">3.50 $</div>
              <div class="card-block">
                <h4 class="card-title">Chesse Crespe</h4>
                <p class="card-text">Sandwitch: Burger, Salades, Tomate, Cornichon</p>
                <a href="#" class="btn btn-order" role="button"><span class="fas fa-shopping-cart"></span>Commader</a>
              </div>
            </div>
          </div>
        <div class="col-sm-6 col-md-4">
            <div class="card">
              <img src="images/s5.png" alt="..." class="card-img-top">
              <div class="price">3.50 $</div>
              <div class="card-block">
                <h4 class="card-title">Chicken Wings</h4>
                <p class="card-text">Cuisses de poulet tandres et croustillantes</p>
                <a href="#" class="btn btn-order" role="button"><span class="fas fa-shopping-cart"></span>Commader</a>
              </div>
            </div>
          </div>


      </div>
    </div>

    <div class="tab-pane" id="Salades">
        <div class="row">

          <div class="col-sm-6 col-md-4">
            <div class="card">
              <img src="images/sa1.png" alt="..." class="card-img-top">
              <div class="price">3.50 $</div>
              <div class="card-block">
                <h4 class="card-title">Salade Sezar</h4>
                <p class="card-text">Salade: Tomate, Onions, Cornichon, Poulet</p>
                <a href="#" class="btn btn-order" role="button"><span class="fas fa-shopping-cart"></span>Commader</a>
              </div>
            </div>
          </div>
        <div class="col-sm-6 col-md-4">
            <div class="card">
              <img src="images/sa2.png" alt="..." class="card-img-top">
              <div class="price">3.50 $</div>
              <div class="card-block">
                <h4 class="card-title">Salade Belge</h4>
                <p class="card-text">Salade: Tomate, Onions, Cornichon, Poulet</p>
                <a href="#" class="btn btn-order" role="button"><span class="fas fa-shopping-cart"></span>Commader</a>
              </div>
            </div>
          </div>
        <div class="col-sm-6 col-md-4">
            <div class="card">
              <img src="images/sa3.png" alt="..." class="card-img-top">
              <div class="price">3.50 $</div>
              <div class="card-block">
                <h4 class="card-title">Salade Végi</h4>
                <p class="card-text">Salade: Tomate, Onions, Cornichon, Poulet</p>
                <a href="#" class="btn btn-order" role="button"><span class="fas fa-shopping-cart"></span>Commader</a>
              </div>
            </div>
          </div>
        <div class="col-sm-6 col-md-4">
            <div class="card">
              <img src="images/sa4.png" alt="..." class="card-img-top">
              <div class="price">3.50 $</div>
              <div class="card-block">
                <h4 class="card-title">Salade de Mer</h4>
                <p class="card-text">Salade: Tomate, Onions, Cornichon, Poulet</p>
                <a href="#" class="btn btn-order" role="button"><span class="fas fa-shopping-cart"></span>Commader</a>
              </div>
            </div>
          </div>
        <div class="col-sm-6 col-md-4">
            <div class="card">
              <img src="images/sa5.png" alt="..." class="card-img-top">
              <div class="price">3.50 $</div>
              <div class="card-block">
                <h4 class="card-title">Babecue Salade</h4>
                <p class="card-text">Salade: Tomate, Onions, Cornichon, Poulet</p>
                <a href="#" class="btn btn-order" role="button"><span class="fas fa-shopping-cart"></span>Commader</a>
              </div>
            </div>
          </div>

      </div>
    </div>

    <div class="tab-pane" id="Boissons">
        <div class="row">

          <div class="col-sm-6 col-md-4">
            <div class="card">
              <img src="images/bo1.png" alt="..." class="card-img-top">
              <div class="price">2 $</div>
              <div class="card-block">
                <h4 class="card-title">CocaCola Classic</h4>
                <p class="card-text"></p>
                <a href="#" class="btn btn-order" role="button"><span class="fas fa-shopping-cart"></span>Commader</a>
              </div>
            </div>
          </div>
        <div class="col-sm-6 col-md-4">
            <div class="card">
              <img src="images/bo2.png" alt="..." class="card-img-top">
              <div class="price">2 $</div>
              <div class="card-block">
                <h4 class="card-title">CocaCola Light</h4>
                <p class="card-text"></p>
                <a href="#" class="btn btn-order" role="button"><span class="fas fa-shopping-cart"></span>Commader</a>
              </div>
            </div>
          </div>
        <div class="col-sm-6 col-md-4">
            <div class="card">
              <img src="images/bo3.png" alt="..." class="card-img-top">
              <div class="price">2 $</div>
              <div class="card-block">
                <h4 class="card-title">CocaCola Zero</h4>
                <p class="card-text"></p>
                <a href="#" class="btn btn-order" role="button"><span class="fas fa-shopping-cart"></span>Commader</a>
              </div>
            </div>
          </div>
        <div class="col-sm-6 col-md-4">
            <div class="card">
              <img src="images/bo4.png" alt="..." class="card-img-top">
              <div class="price">2 $</div>
              <div class="card-block">
                <h4 class="card-title">Fanta</h4>
                <p class="card-text"></p>
                <a href="#" class="btn btn-order" role="button"><span class="fas fa-shopping-cart"></span>Commader</a>
              </div>
            </div>
          </div>
        <div class="col-sm-6 col-md-4">
            <div class="card">
              <img src="images/bo5.png" alt="..." class="card-img-top">
              <div class="price">2 $</div>
              <div class="card-block">
                <h4 class="card-title">Sprite</h4>
                <p class="card-text"></p>
                <a href="#" class="btn btn-order" role="button"><span class="fas fa-shopping-cart"></span>Commader</a>
              </div>
            </div>
          </div>

      </div>
    </div>

    <div class="tab-pane" id="Desserts">
        <div class="row">

          <div class="col-sm-6 col-md-4">
            <div class="card">
              <img src="images/d1.png" alt="..." class="card-img-top">
              <div class="price">4.90 $</div>
              <div class="card-block">
                <h4 class="card-title">Mousse</h4>
                <p class="card-text">Mousse au Chocolat et à la Vanille de qualité supérieur</p>
                <a href="#" class="btn btn-order" role="button"><span class="fas fa-shopping-cart"></span>Commader</a>
              </div>
            </div>
          </div>
        <div class="col-sm-6 col-md-4">
            <div class="card">
              <img src="images/d2.png" alt="..." class="card-img-top">
              <div class="price">4.90 $</div>
              <div class="card-block">
                <h4 class="card-title">Mefine</h4>
                <p class="card-text">Mefine Chocolat et Fraise incontournable</p>
                <a href="#" class="btn btn-order" role="button"><span class="fas fa-shopping-cart"></span>Commader</a>
              </div>
            </div>
          </div>
        <div class="col-sm-6 col-md-4">
            <div class="card">
              <img src="images/d3.png" alt="..." class="card-img-top">
              <div class="price">4.90 $</div>
              <div class="card-block">
                <h4 class="card-title">Donut</h4>
                <p class="card-text">Donut Chocolat et Vanille Homer en rafole</p>
                <a href="#" class="btn btn-order" role="button"><span class="fas fa-shopping-cart"></span>Commader</a>
              </div>
            </div>
          </div>
        <div class="col-sm-6 col-md-4">
            <div class="card">
              <img src="images/d4.png" alt="..." class="card-img-top">
              <div class="price">4.90 $</div>
              <div class="card-block">
                <h4 class="card-title">Smousie</h4>
                <p class="card-text">Smousie chocolat, Vanille et Fraise un petit plasir</p>
                <a href="#" class="btn btn-order" role="button"><span class="fas fa-shopping-cart"></span>Commader</a>
              </div>
            </div>
          </div>

      </div>
    </div>
 
    
  </div>
</div>
    
</body>
</html>