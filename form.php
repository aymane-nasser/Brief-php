<?php include 'modifier.php'; ?>
<!DOCTYPE html>
<html>

<head>
  <title>modifier</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="container">
    <form action="modifier.php" name="modifier" method="POST" enctype="multipart/form-data">
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
</body>

</html>