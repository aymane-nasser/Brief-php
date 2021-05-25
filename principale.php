<?php
    require_once('connect.php');
?>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="" media="screen" type="text/css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">   

    </head>
    <body>



        <div id="content">
        <nav class="navbar navbar-expand-lg navbar-dark bg-success d-flex justify-content-center p-3 ">
    <ul class="navbar-nav">
      <li class="nav-item active  px-md-5 ">
        <a class="nav-link h5" href="principale.php">Home </a>
      </li>
      <li class="nav-item  px-md-5">
        <a class="nav-link h5" href="produit.php">Produit</a>
      </li>
      <li class="nav-item  px-md-5">
        <a class="nav-link h5" href="ajouter.php">Ajouter</a>
      </li>
      <li class="nav-item  px-md-5">
      <a class="nav-link h5 " href='principale.php?deconnexion=true'><span>Déconnexion</span></a>
      </li>
    </ul>
  </div>
</nav>

            <?php
                session_start();
                if(isset($_GET['deconnexion']))
                { 
                   if($_GET['deconnexion']==true)
                   {  
                      session_unset();
                      header("location:login.php");
                   }
                }
                else if($_SESSION['username'] !== ""){
                    $user = $_SESSION['username'];
                    // afficher un message
                    echo "<br> <h3 class='d-flex justify-content-center mb-5'>Bonjour $user, vous êtes connectés<h3/>";
                }
            ?>
       </div>

       <?php
$Select="SELECT DISTINCT catégories FROM produit";
$resultat= mysqli_query($db,$Select);

while($ligne=mysqli_fetch_assoc($resultat))
{
?>
<div class="container">
<div class=" col-12 d-flex justify-content-center mb-5">
<div class="card " style="width: 18rem;">
  <img class="card-img-top" src="supermarche.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php echo $ligne['catégories'];?></h5>
    <a href="produit.php?produit=<?php echo $ligne['catégories'];?>" class="btn btn-success">show</a>
  </div>
</div>
</div>
</div>


<?php } ?>


 



              
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    </body>
</html>