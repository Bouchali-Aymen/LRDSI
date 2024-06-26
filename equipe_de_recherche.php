<?php
include 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipe De Recherche</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
  <h2>POUR CHANGER LE CHEF D'EQUIPE CLICKER SUR UPDATE</h2>
<div class="container">
        
        <br><br><br>
        <table class="table table-white">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">nom_equipe</th>
      <th scope="col">domain</th>
      <th scope="col">id_chef</th>
      <th scope="col">Nom de chef</th>
      <th scope="col">Prenom de chef</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql = "Select * from equipes_de_recherche ";
    $sql2 = "SELECT Nom,Prenom FROM member INNER JOIN equipes_de_recherche ON member.id=equipes_de_recherche.id_chef";
    $result2 = mysqli_query($con,$sql2);
    $result = mysqli_query($con, $sql);
    
    if($result){
      while($row = mysqli_fetch_assoc($result) and $row2 = mysqli_fetch_assoc($result2)){
        
        $Id = $row['id'];
        $nom_equipe = $row['Nom_equipe'];
        $domain = $row['domain'];
        $id_chef = $row['id_chef'];
        $nomchef = $row2['Nom'];
        $prenomchef = $row2['Prenom'];
        echo '<tr>
        <th scope="row">' . $Id . '</th>
        <td>' . $nom_equipe . '</td>
        <td>' . $domain. '</td>
        <td>' . $id_chef. '</td>
        <td>' . $nomchef. '</td>
        <td>' . $prenomchef. '</td>
        <td>
        <button type="button" class="btn btn-danger"><a href="updateequipe.php?updateid='.$Id.'" style="color:white;">Update</a></button>
        </td>
      </tr>';
    
      }
    }
    ?>
  </tbody>
</table>
    </div>

    <a class="btn btn-primary" href="controlpanel.php" role="button">RETOUR AU CONTROL PANEL</a>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> 

</body>
</html>