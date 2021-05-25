<?php include 'modifier.php'; ?>
<!DOCTYPE html>
<html>

<head>
  <title>modifier</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">   
  <link rel="stylesheet" href="css/style.css">
</head>

<body> 
  <div class="container">
  <br><br><br><br>
  <div class="form-group container bg-light rounded">
    <form action="modifier.php" name="modifier" method="POST" class="form" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?= $row['id'] ?>">
      <h4 class="display-4 text-center">modifier</h4>
      <hr><br>
      <div class="form-group">
        <input type="name" class="form-control" name="ref" value="<?= $row['ref'] ?>">
      </div>

      <div class="form-group">
        <input type="number" class="form-control"name="quantité_inférieure" value="<?= $row['quantité_inférieure'] ?>">
      </div>
      <div class="form-group">
        <input type="number" class="form-control" name="quantité_minimale" value="<?= $row['quantité_minimale'] ?>">
      </div>
      <div class="form-group">
        <input type="number" class="form-control" name="prix_minimale" value="<?= $row['prix_minimale'] ?>">
      </div>
      <div class="form-group">
        <input type="number" class="form-control" name="prix_unitair" value="<?= $row['prix_unitair'] ?>">
      </div>

      <button type="submit" class="btn btn-primary" name="submit">modifier</button>
      <a href="produit.php" class="link-primary">Tableau de Produits</a>
    </form>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>

</html>