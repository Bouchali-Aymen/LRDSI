<?php
include "connect.php";
if(isset($_GET['deleteid'])){

$deletethis = $_GET['deleteid'];
$sql2 = "SELECT equipes_de_recherche.id_chef FROM equipes_de_recherche";
$res3 = mysqli_query($con,$sql2);




    $cpt = 0;
    foreach ($res3 as $row) {
        if ($row['id_chef'] == $deletethis) {
            $cpt = 1;
            break; // Exit the loop once the condition is met
        }
    }

    if ($cpt == 1) {
        echo '<script type="text/javascript">';
        echo 'var result= confirm("Tu peux pas supprimer cette membre parce que il est CHEF vous devez dabord mettre à jour le chef");';
        echo 'if(result==true){window.location.href = "updatechef.php";}
        else{
            window.location.href = "membre.php";
        }';
        echo '</script>';
        exit; // Make sure to exit after displaying the alert and redirecting
    } else {
        $sql = "DELETE FROM equipe_membres WHERE equipe_membres.member_id = $deletethis";
        $res = mysqli_query($con, $sql);
        header("location: membre_de_equipe.php");
    }
    if($res)
    {
      $sql3 = "DELETE FROM member WHERE member.id = $deletethis " ;
      $res1 = mysqli_query($con,$sql3);
      if($res1)
      {
         header('location:membre.php');
      }else{
         die(mysqli_error($con));
      }
}
}
?>
