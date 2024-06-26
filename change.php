<?php 
include 'connect.php';
if(isset($_GET['selecteid'])){
    //get new chef id
    $select = $_GET['selecteid'];
    //get the id of the team of the new chef 
    $sql2 = "SELECT equipes_id FROM equipe_membres WHERE member_id=$select";
    $result2 = mysqli_query($con,$sql2);
    $row = mysqli_fetch_assoc($result2);
    $idteam = $row['equipes_id'];
    //update in table equipe_de_recherche
    $sql = "UPDATE equipes_de_recherche SET id_chef=$select WHERE id=$idteam";
    $result = mysqli_query($con,$sql);
    if($result){
        header("location:membre_de_equipe.php");
    }
    else{
        die(mysqli_errno($con));
    }
}



?>