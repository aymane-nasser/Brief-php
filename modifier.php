
<?php 
 require_once('connect.php');
//  if (isset($_POST["submit"])) {
//     $ref=$_POST["ref"];
//   $sqli = "UPDATE produit
//           SET ref='$ref', quantité_inférieure='$quantité_inférieure', quantité_minimale='$quantité_minimale', prix_minimale='$prix_minimale', prix_unitair='$prix_maximale'
//           WHERE id=$id ";
//   $resulti = mysqli_query($db, $sqli);
//   if ($resulti) {
//       header("Location: ./produit.php?produit=successfully updated");
//   }
//   else
//   echo "err";
// }
// else{
// echo "no data";
// }*

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $sql = "SELECT * FROM produit WHERE id=$id";
    $result = mysqli_query($db, $sql);

    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
    }
}else if(isset($_POST['submit'])){
  $idpro=$_POST["id"];
	$ref = $_POST['ref'];
  $quantité_inférieure=$_POST['quantité_inférieure'];
  $quantité_minimale=$_POST['quantité_minimale'];
  $prix_minimale=$_POST['prix_minimale'];
  $prix_maximale=$_POST['prix_unitair'];
  $sqli = "UPDATE produit
  SET ref='$ref', quantité_inférieure='$quantité_inférieure', quantité_minimale='$quantité_minimale', prix_minimale='$prix_minimale', prix_unitair='$prix_maximale'
  WHERE id=$idpro";
    $resulti = mysqli_query($db, $sqli);
    if ($resulti) {
    header("Location: ./principale.php?produit= successfully updated");
    }
    else
    echo "err";

}
