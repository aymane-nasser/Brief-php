<?php
    $db_username = 'root';
    $db_password = '';
    $db_name     = 'gestion';
    $db_host     = 'localhost';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');
           $produit ="SELECT * FROM produit ORDER BY ref DESC";
           $conn = mysqli_query($db,$produit);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">   
     <title>Tanger Market</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-success d-flex justify-content-center p-3">
    <ul class="navbar-nav">
      <li class="nav-item   px-md-5">
        <a class="nav-link h5" href="principale.php">Home </a>
      </li>
      <li class="nav-item active  px-md-5">
        <a class="nav-link h5" href="produit.php">Produit</a>
      </li>
      <li class="nav-item  px-md-5">
        <a class="nav-link h5" href="ajouter.php">Ajouter</a>
      </li>
      <li class="nav-item  px-md-5">
      <a class="nav-link h5" href='principale.php?deconnexion=true'><span>Déconnexion</span></a>
      </li>
    </ul>
  </div>
</nav>


<br><br><br><br>
<?php if (mysqli_num_rows( $conn)) {?>
    <table class="table container">
    <thead class="bg-success text-light">
        <tr>
      
        <th scope="col">Produit</th>
        <th scope="col">Quantité inférieure</th>
        <th scope="col">Quantité minimale</th>
        <th scope="col">Prix minimale</th>
        <th scope="col">Prix unitair</th>
        <th scope="col">Éditer</th>
        </tr>
        </thead>


        <tbody>
        <?php  
        if(isset($_GET['produit']))
        {
            $cat=$_GET['produit'];
            $reqCat="SELECT * FROM produit WHERE catégories='$cat'";
            $conn=mysqli_query($db,$reqCat);
        }
    
        while($rows = mysqli_fetch_assoc($conn))
      {

         
      ?>
    
       
      <tr>
         
          <td><?= $rows ['ref'] ?></td>
          <td><?= $rows ['quantité_inférieure'] ?></td>
          <td><?= $rows ['quantité_minimale'] ?></td>
          <td><?= $rows ['prix_minimale'] ?></td>
          <td><?= $rows ['prix_unitair'] ?></td>
          <td> <a href="form.php?id=<?= $rows['id'] ?>"  class="btn btn-info">modifier</a>     <a href="supprimer.php?id=<?= $rows['id'] ?>" class="btn btn-danger">Delete</a>  </td>

          
      </tr>

         
        
            <?php   }?>

            
        </tbody>
    </table>
    <?php }?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>