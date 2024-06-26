<?php
include 'connect.php';
if(isset($_POST['submit'])){
  $Nom = $_POST['nom'];
  $Prenom = $_POST['prenom'];
  $Email = $_POST['email'];
  $Grade = $_POST['grade'];
  $Domain = $_POST['team'];
  
  $sql = "INSERT INTO member (Nom,Prenom,grade,Email)
  value('$Nom','$Prenom','$Grade','$Email')";
  $result = mysqli_query($con,$sql);
  if(!$result){
    die(mysqli_error($con));
  }
  else{
  $sql1 = "SELECT id FROM member WHERE member.Nom = '$Nom'";
  $result2 = mysqli_query($con,$sql1);
  $row = mysqli_fetch_assoc($result2);
  $idtoadd = $row['id'];
  $sql2 = "SELECT id FROM equipes_de_recherche WHERE equipes_de_recherche.domain = '$Domain'";
  $result3 = mysqli_query($con,$sql2);
  $row2 = mysqli_fetch_assoc($result3);
  $idteam = $row2['id'];
  if($result2 && $result3){
    $sql3 = "INSERT INTO equipe_membres(member_id,equipes_id)
    values('$idtoadd','$idteam')";
    $result4 = mysqli_query($con,$sql3);
    if($result4){
        header("location:membre_de_equipe.php");
    }
    else{
        die(mysqli_error($con));
    }

  }
}

}
?>