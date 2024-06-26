<?php 
    include 'connect.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member</title>
    <meta name="description" content="this is Elzero web ">
        <!-- Render All Elements Normally -->
    <link rel="stylesheet" href="css/normlaize.css">
        <!-- Font Awesome Library -->
    <link rel="stylesheet" href="css/all.min.css">
        <!-- Main Template CSS File -->
    <link rel="stylesheet" href="css/elzero.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800;900;1000&display=swap" rel="stylesheet">  
    <link rel="stylesheet" href="style2.css">  
    
</head>
<body>
    <!-- start head -->
   
    <!-- start head -->
    <!-- start header -->

    <!-- end header -->
    <div class="box1">
        <ul>
         <li>
             <img  src="lrdsi-logo-removebg-preview.png" alt="lrdsi" height="120px" width="170px">
         </li>
         <li>
             <div class="icon-container">
             <img  src="gch-removebg-preview.png" alt="gch" height="60">
             <span class="text1">+213 (0)25 27 24 36</span>
         </div>
         </li>
         <li>
             <div class="icon-container">
                 <img src="299087_marker_map_icon.png" alt="marker" height="60">
                 <span class="text2">Bp 270, Route de Soumaa<br>09100-Blida-Algérie</span>
             </div>
         </li>
         <li>
             <div class="icon-container">
             <img src="270271_email_icon.png" alt="email-icon" height="60">
             <span class="text3">lrdsi@univ-blida.dz</span>
         </div>
         </li>
        </ul>
 
     </div>
     
     <nav>
     <div class="menu">
     <a href="home-page.php">Home</a>
        <a href="presentation.php">Presentation</a>
        <a href="affichermembre.php">Membres</a>
        <a href="formation.php">Formation</a>
        <a href="equipe.php">Equipe</a>
        <a href="projects.php">Projects</a>
        <a href="publication.php">Publications</a>
        <a href="adminlogin.html">Login</a>
       </div>
     </nav>
 
     <div class="box3">
 
     </div>
    <div class="members">
        <div class="container">
            
           
            <?php 
                $sql = "SELECT * FROM equipes_de_recherche";
                $resault = mysqli_query($con , $sql);
                
                while($row= mysqli_fetch_assoc($resault)){
                    $aymen = $row['domain'];
                    $membre = "SELECT * FROM member inner join equipes_de_recherche on member.id=equipes_de_recherche.id_chef where equipes_de_recherche.domain = '$aymen'";
                    $res = mysqli_query($con , $membre);
                    $row1 = mysqli_fetch_assoc($res);
                    $aymen2 = $row['id'];
                    $membre1 = "SELECT * FROM member inner join equipe_membres on member.id = equipe_membres.member_id inner join equipes_de_recherche on equipes_de_recherche.id=equipe_membres.equipes_id where equipe_membres.equipes_id = $aymen2  ";
                    $res2 = mysqli_query($con , $membre1);
                    $row2 = mysqli_fetch_assoc($res2);
                    
                    echo'<div class="equipe">
                <div class="title">
                    <h2>'.$row['domain'].'</h2>
                </div>
                <div class="mbr chef-e">
                    <h3>Chef d’équipe</h3>
                    <div class="about">
                        <div class="name">'.$row1['Nom'].' '.$row1['Prenom'].' Professeur</div>
                        <div class="mail">'.$row1['Email'].'</div>
                    </div>
                </div>
                <div class="mbr m-eq">
                    <h3>Membres</h3>
                    ';
                    while ($row2 = mysqli_fetch_assoc($res2)) {
                        echo '<div class="about">
                        <div class="name">'.$row2['Nom'].' '.$row2['Prenom'].' - Maitre Assistante (A)</div>
                        <div class="mail">'.$row2['Email'].'</div>
                        </div>';
                    };
                    
                    
                echo'</div>
                <div class="mbr doctorant">
                    <h3>Doctorants</h3>
                    <div class="name">ABDICHE Mohand Amokrane</div>
                    <div class="name">ABDICHE Mohand Amokrane</div>
                    <div class="name">ABDICHE Mohand Amokrane</div>
                    <div class="name">ABDICHE Mohand Amokrane</div>
                    <div class="name">ABDICHE Mohand Amokrane</div>
                </div>
                <div class="misson">
                    <a href="#">misson ....</a>
                </div>
            </div>
            
        ';}?>
        </div>
    </div>
    <!-- start footer 
    <footer>
        <p>LABORATOIRE DE RECHERCHE POUR LE DEVELOPPEMENT DES SYSTEMES INFORMATISES
        </p>
        <p>Université Saad Dahlab - Blida 1  |  Faculté des Sciences  
        </p>
        <a href="#">http://www.univ-blida.dz </a>
        <br>
        <p>Copyright &#169; All rights reserved to LRDSI</p>
    </footer>
     end footer -->
</body>
</html>