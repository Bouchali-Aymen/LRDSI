<?php 
include 'connect.php'

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membre</title>
    <link rel="stylesheet" href="stylemember.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
</head>
<body>
 <h1><u>Membres De Laboratoire De Recherche</u></h1> 
<a class="btn btn-dark" id="add" href="addmember.php" role="button">Ajouter un nouvel membre</a>

<div class="container">
        
        <br><br><br>
        <table class="table table-white">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Email</th>
      <th scope="col">Grade</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql = "Select * from member ";
    $result = mysqli_query($con, $sql);
    if($result){
      while($row = mysqli_fetch_assoc($result)){
        
        $Id = $row['id'];
        $fname = $row['Nom'];
        $lname = $row['Prenom'];
        $myemail = $row['Email'];
        $mygrede = $row['grade'];
        echo '<tr>
        <th scope="row">' . $Id . '</th>
        <td>' . $fname . '</td>
        <td>' . $lname . '</td>
        <td>' . $myemail . '</td>
        <td>' . $mygrede . '</td>
        <td><button type="button" class="btn btn-primary"><a href="deleteall.php?deleteid='.$Id.'" style="color:white;" >Delete</a></button>
        <buttontype="button" class="btn btn-danger"><a href="updatemember.php?updateid='.$Id.'" style="color:white;">Update</a></button>
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
</body>
</html>