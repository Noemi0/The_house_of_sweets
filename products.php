<html>
    
<head>
    <title>The House of Sweets</title>
    <meta charset="utf-8">
      <link rel="stylesheet" href="sty.css">
      <script src="utils.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>


        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
        
        <a href="home.html" class="logo"><img src="logo.png"></a>  
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="home.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Products
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Cakes</a></li>
                <li><a class="dropdown-item" href="#">Cupcakes</a></li>
                <li><a class="dropdown-item" href="#">Gluten Free or Vegan</a></li>
                <li><a class="dropdown-item" href="#">Cookies & Brownies</a></li>
                <li><a class="dropdown-item" href="#">On Sale</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="events.html">Events</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
          </ul>
         
          <div class="filler"></div>
          <div class="social">
            <a href="tel:0770 172072"><i class="fa fa-phone fa-phone"></i> 0770 172072</a>
            <a href="https://www.facebook.com/" class="fa-brands fa-facebook-f"></a>
            <a href="https://www.instagram.com/" class="fa-brands fa-instagram"></a>
            </div>

        </div>
     
      
   
    </nav>



</body>
</html>

<?php 
session_start();
require_once('config.php');

$sql = "SELECT image FROM products ";
$sql3 = "SELECT image FROM products where id=2";
$sql2 = "SELECT product_name FROM products ";
$sql4 = "SELECT product_name FROM products where id=2";
$sql5 = "SELECT image FROM products where id=3";
$sql6 = "SELECT product_name FROM products where id=3 ";
//Prepare our SQL statement,
try{
        $statement = $pdo->prepare($sql);
        $statement->execute();
        $tables = $statement->fetch();
        $_image = $tables['image'];

}catch(Exception $ex){
    echo "Aaa ";
        echo($ex->getMessage());
}

try{
    $statement = $pdo->prepare($sql3);
    $statement->execute();
    $tables = $statement->fetch();
    $_image2 = $tables['image'];

}catch(Exception $ex){
echo "Aaa ";
    echo($ex->getMessage());
}

try{
    $statement = $pdo->prepare($sql2);
    $statement->execute();
    $tables = $statement->fetch();
    $_product_name = $tables['product_name'];

}catch(Exception $ex){
echo "Aaa ";
    echo($ex->getMessage());
}

try{
    $statement = $pdo->prepare($sql4);
    $statement->execute();
    $tables = $statement->fetch();
    $_product_name2 = $tables['product_name'];

}catch(Exception $ex){
echo "Aaa ";
    echo($ex->getMessage());
}

try{
    $statement = $pdo->prepare($sql5);
    $statement->execute();
    $tables = $statement->fetch();
    $_image = $tables['image'];

}catch(Exception $ex){
echo "Aaa ";
    echo($ex->getMessage());
}

try{
$statement = $pdo->prepare($sql6);
$statement->execute();
$tables = $statement->fetch();
$_image2 = $tables['image'];

}catch(Exception $ex){
echo "Aaa ";
echo($ex->getMessage());
}


//echo "<img src=".$_image.">";
//echo $_product_name;

?>
<div class="container">

      <div class="row justify-content-center align-items-start my-2">
          <div class="col-12 col-md-6 col-lg-4">
              <div class="card">
                  <img class="card-img-top" <?php echo "<img src=".$_image.">"?>>
              
                  <div class="card-body p-3">
                      <h1 class="text-center">
                          Pista Bacsi
                      </h1>
                      <hr>
                      <p>
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, maxime.
                      </p>
                  </div>
              </div>
          </div>

          <div class="col-12 col-md-6 col-lg-4">
              <div class="card">
                  <img class="card-img-top" <?php echo "<img src=".$_image.">"?>>
              
                  <div class="card-body p-3">
                      <h1 class="text-center">
                      <?php echo $_product_name?>
                      </h1>
                      <hr>
                      <p>
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, maxime.
                      </p>
                  </div>
              </div>
          </div>

          <div class="col-12 col-md-6 col-lg-4">
              <div class="card">
                  <img class="card-img-top" <?php echo "<img src=".$_image2.">"?>>
                  <div class="card-body p-3">
                      <h1 class="text-center">
                      <?php echo $_product_name2?>

                      </h1>
                      <hr>
                      <p>
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, maxime.
                      </p>
                  </div>
              </div>
          </div>
          
        </div>

        
      </div>

    </div>


