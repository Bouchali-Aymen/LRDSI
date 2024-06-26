<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter Membre</title>
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
    <form method="post" action="insertion.php">
        <label for="nom" ><b>Nom</b></label>
        <br>
         
    <div class="input-group mb-3">
        
    <input type="text" class="form-control" placeholder="Nom" aria-label="Username" aria-describedby="basic-addon1" name="nom" required>
  </div>
<label for="prenom"><b>Prenom</b></label>
<div class="input-group mb-3">
        
    <input type="text" class="form-control" placeholder="Prenom" aria-label="Username" aria-describedby="basic-addon1" name="prenom" required>
  </div>
  <label for="email"><b>Email</b></label>
  <div class="mb-3">
    
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" name="email" required>
    
  </div>
  <label for="grade"><b>Grade</b></label>
  <select class="form-select" aria-label="Default select example" name="grade">
    <option selected>Clicker pur selectioner le grade</option>
    <option value="lenseignant chercheur">lenseignant chercheur</option>
    <option value="doctorant">doctorant</option>
    
  </select>
  <br>
  <label for="team"><b>Domain</b></label>
  <select class="form-select" aria-label="Default select example" name="team">
    <option selected>Clicker pur selectioner le grade</option>
    <option value="RESEAUX (RES)">RESEAUX</option>
    <option value="SECURITE DE SYSTEMES INFORMATIQUES ETRAISONNEMENT SIR">SECURITE DE SYSTEMES INFORMATIQUES ETRAISONNEMENT (SIR)</option>
    <option value="RECONNAISSANCE DES FORMES ET APPLICATIONS (RFA)">RECONNAISSANCE DES FORMES ET APPLICATIONS (RFA)</option>
    <option value="BIG DATA ET SYSTEMES DECISIONNELS (BDD">BIG DATA ET SYSTEMES DECISIONNELS (BDD</option>
    <option value="INTELLIGENCE COMPUTATIONNELLE (INTEC">INTELLIGENCE COMPUTATIONNELLE (INTEC)</option>
  </select>
 <br>
  
  
  <input class="btn btn-primary" type="submit" value="Submit" name="submit">
</form>
</div>
<a class="btn btn-primary" href="controlpanel.php" role="button">RETOUR AU CONTROL PANEL</a>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> 
</body>
</html>
