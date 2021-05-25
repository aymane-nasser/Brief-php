<?php
    require_once('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">   
    <title>Ajouter</title>
</head>
<body class="">
<nav class="navbar navbar-expand-lg navbar-dark bg-success d-flex justify-content-center p-3">
    <ul class="navbar-nav">
      <li class="nav-item   px-md-5">
        <a class="nav-link h5" href="principale.php">Home </a>
      </li>
      <li class="nav-item  px-md-5">
        <a class="nav-link h5" href="produit.php">Produit</a>
      </li>
      <li class="nav-item active  px-md-5">
        <a class="nav-link h5" href="ajouter.php">Ajouter</a>
      </li>
      <li class="nav-item  px-md-5">
      <a class="nav-link h5" href='principale.php?deconnexion=true'><span>Déconnexion</span></a>
      </li>
    </ul>
  </div>
</nav>

    <br><br><br><br><br>
    
<div  class="form-group container bg-light rounded">
  <div>
  <h2 class="bg-success p-3 d-flex justify-content-center text-light rounded">Ajouter Nouvelle Produit</h2><br>
  </div>
       <form name="formAdd" action="ajouter.php" method="POST" class="form" enctype="multipart/form-data"><br>
         

           
           <input type="text" name="produit" class="form-control" placeholder="Entrer Le Produit" required><br><br>
       
           <input type="number" name="quantité_inférieure" class="form-control" placeholder="Entrer Quantité Inférieure" required><br><br>

           <input type="number" name="quantité_minimale" class="form-control" placeholder="Entrer Quantité Minimale" required><br><br>

           <input type="number" name="prix_minimale" class="form-control" placeholder="Entrer Prix Minimale" required><br><br>

           <input type="text" name="prix_maximale" class="form-control" placeholder="Entrer Prix Maximale" required><br><br>

           <input type="text" name="catégories" class="form-control" placeholder="Entrer Catégories" required><br><br>


           <input type="submit" name="Ajouter" value="Ajouter" class="submit btn btn-success"><br><br>

           <p><a href="produit.php"  class="submit text-info h5">Tableau de Produits</a></p>

                <?php
                if(isset($_POST['Ajouter']))
                {
                
                    $produit=$_POST['produit'];
                    $quantité_inférieure=$_POST['quantité_inférieure'];
                    $quantité_minimale=$_POST['quantité_minimale'];
                    $prix_minimale=$_POST['prix_minimale'];
                    $prix_maximale=$_POST['prix_maximale'];
                    $catégories=$_POST['catégories'];
                    $reqAdd="INSERT INTO produit( ref, quantité_inférieure, quantité_minimale, prix_minimale, prix_unitair, catégories) 
                    VALUES ('$produit','$quantité_inférieure','$quantité_minimale','$prix_minimale','$prix_maximale', '$catégories')";
                
              $resultat= mysqli_query($db,$reqAdd);
              if($resultat){
                  echo "Insertion des données validés";
              }else{
                  echo "Echec d Insertion des données";
              }
  
                     
                }
                ?>
                

           </label>
       </form>
   </div> 
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>