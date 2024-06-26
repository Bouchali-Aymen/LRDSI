<?php 
include "connect.php";

if(isset($_GET['updateid'])){

$updatethis = $_GET['updateid'];
$sql2 = "SELECT equipes_de_recherche.id_chef FROM equipes_de_recherche";
$res3 = mysqli_query($con,$sql2);




    $cpt = 0;
    foreach ($res3 as $row) {
        if ($row['id_chef'] == $updatethis) {
            $cpt = 1;
            break; // Exit the loop once the condition is met
        }
    }

    if ($cpt == 1) {

      header("location:updatechef.php");
    }
    else{
        $id = $_GET['updateid'];
$sql = "Select * from member where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$sql2 = "SELECT equipes_id FROM equipe_membres WHERE member_id = $id";
$result2 = mysqli_query($con,$sql2);
$row2 = mysqli_fetch_assoc($result2);
$idequipe = $row2['equipes_id'];
$sql3 = "SELECT domain FROM equipes_de_recherche WHERE id=$idequipe";
$result3 = mysqli_query($con,$sql3);
$row3 = mysqli_fetch_assoc($result3);
$nom = $row['Nom'];
$Prenom = $row['Prenom'];
$email = $row['Email'];
$grade = $row['grade'];
$equipe =$row3['domain'];
if (isset($_POST['update'])) {
    $Nom = $_POST['nom'];
    $Prenom = $_POST['prenom'];
    $Email = $_POST['email'];
    $Grade = $_POST['grade'];
    $Domain = $_POST['team'];
    $sql4 = "UPDATE member SET id=$id,Nom='$Nom',Prenom='$Prenom',Email='$Email',grade='$Grade' where id=$id ";
  $result4 = mysqli_query($con,$sql4);
  $sql5 = "SELECT id FROM equipes_de_recherche WHERE domain = '$Domain'";
  $result5 = mysqli_query($con,$sql5);
  $row5 = mysqli_fetch_assoc($result5);
  $idtoset = $row5['id'];
  $sql6 = "UPDATE equipe_membres SET  equipes_id=$idtoset WHERE member_id=$id";
  $result6 = mysqli_query($con,$sql6);

  if(!$result4){
    die(mysqli_error($con));
  }
 header("location:membre.php");
}
    }


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        .add{
            width: 40%;
            margin: auto;
            margin-top: 30px;
            
            border: 1px solid black;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 4px rgba(0, 0, 0, 0.642);
        }
        
    </style>
</head>
<body>
    <div class="add">
        <h1>Ajouter</h1>
        <br>
    <form method="post" action="">
        <label for="nom" ><b>Nom</b></label>
        <br>
         
    <div class="input-group mb-3">
        
    <input type="text" class="form-control" placeholder="Nom" aria-label="Username" aria-describedby="basic-addon1" name="nom" value="<?php echo $nom;?>"required>
  </div>
<label for="prenom"><b>Prenom</b></label>
<div class="input-group mb-3">
        
    <input type="text" class="form-control" placeholder="Prenom" aria-label="Username" aria-describedby="basic-addon1" name="prenom" value="<?php echo $Prenom;?>" required>
  </div>
  <label for="email"><b>Email</b></label>
  <div class="mb-3">
    
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
    
  </div>
  <label for="grade"><b>Grade</b></label>
  <select class="form-select" aria-label="Default select example" name="grade">
    <option selected><?php echo $grade; ?></option>
    <option value="lenseignant chercheur">lenseignant chercheur</option>
    <option value="doctorant">doctorant</option>
    
  </select>
  <br>
  <label for="team"><b>Domain</b></label>
  <select class="form-select" aria-label="Default select example" name="team">
    <option selected><?php echo $equipe; ?></option>
    <option value="RESEAUX (RES)">RESEAUX (RES)</option>
    <option value="SECURITE DE SYSTEMES INFORMATIQUES ETRAISONNEMENT SIR">SECURITE DE SYSTEMES INFORMATIQUES ETRAISONNEMENT SIR</option>
    <option value="RECONNAISSANCE DES FORMES ET APPLICATIONS (RFA)">RECONNAISSANCE DES FORMES ET APPLICATIONS (RFA)</option>
    <option value="BIG DATA ET SYSTEMES DECISIONNELS (BDD">BIG DATA ET SYSTEMES DECISIONNELS (BDD</option>
    <option value="INTELLIGENCE COMPUTATIONNELLE (INTEC">INTELLIGENCE COMPUTATIONNELLE (INTEC</option>
  </select>
 <br>
  
  
  <input class="btn btn-primary" type="submit" value="Submit" name="update">
</form>
</div>
<a class="btn btn-primary" href="controlpanel.php" role="button">RETOUR AU CONTROL PANEL</a>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> 
</body>
</html>