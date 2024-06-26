<?php 
include 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RFA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    
<h2>Domain: RECONNAISSANCE DES FORMES ET APPLICATIONS (RFA)</h2>
    <?php
;
$sql2 = "SELECT * FROM member INNER JOIN equipes_de_recherche ON member.id = equipes_de_recherche.id_chef WHERE equipes_de_recherche.domain = 'RECONNAISSANCE DES FORMES ET APPLICATIONS (RFA)' ";

$res = mysqli_query($con,$sql2);

$row1 = mysqli_fetch_assoc($res);

echo "<b>".$row1['Nom']." ".$row1['Prenom']."</b>";
?>
<div class="container">
        
        <br><br><br>
        <table class="table table-white">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">grade</th>
      <th scope="col">Email</th>
      
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
    <?php
   $sql = "SELECT * FROM member INNER JOIN equipe_membres ON member.id = equipe_membres.member_id WHERE equipe_membres.equipes_id = 3";
    $result2 = mysqli_query($con,$sql);
    if($result2){
      while($row = mysqli_fetch_assoc($result2)){
        
        $Id = $row['id'];
        $nom = $row['Nom'];
        $prenom = $row['Prenom'];
        $grade = $row['grade'];
        $email = $row['Email'];
        
        echo '<tr>
        <th scope="row">' . $Id . '</th>
        <td>' . $nom . '</td>
        <td>' . $prenom . '</td>
        <td>' . $grade . '</td>
        <td>' . $email . '</td>
        <td><button type="button" class="btn btn-primary"><a href="change.php?selecteid='.$Id.'"style="color:white;">SELECT</a></button>
        </td>
      </tr>';
      }
    }
    ?>
        <a class="btn btn-primary" href="controlpanel.php" role="button">RETOUR AU CONTROL PANEL</a>

  </tbody>
</table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>