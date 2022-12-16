<?php 
	require_once('Config.php');



/* if (isset($_POST['inserer'])) 
{
	// récupération des valeurs
		$libelle = $_POST['libelle'];
		$prix = $_POST['prix'];
		$description = $_POST['description'];

	$query="INSERT INTO jouets (libelle,prix,description)
	VALUES
	(' ".$_POST['libelle']." ',
	' ".$_POST['prix']." ',
	' ".$_POST['description']." ')";
	$res=$db->exec($query) or
	die('Erreur SQL !<br>'.$query.'<br>'.$db->errorInfo());
	header('location: Menu.php');
} */

 if (isset($_POST['inserer'])) 
{
	// récupération des valeurs
		$libelle = $_POST['libelle'];
		$prix = $_POST['prix'];
		$description = $_POST['description'];

	$query="INSERT INTO jouets (libelle,prix,description)
	VALUES
	(' ".$libelle." ',
	' ".$prix." ',
	' ".$description." ')";
	$res=$db->exec($query) or
	die('Erreur SQL !<br>'.$query.'<br>'.$db->errorInfo());
	header('location: Menu.php');
}

?>



<!DOCTYPE html>
<html>
<head>
	<title>Ajouter Un  Article</title>
	<link rel="stylesheet" type="text/css" href="CSS.css">
   <script src="https://kit.fontawesome.com/45e38e596f.js" crossorigin="anonymous"></script>
   <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
    .container > .ajouter 
	{
		width: 50%;
	    height: auto;
	    margin: auto;
	    margin-top: 3%;
	}
	.container > h1
	{
		text-align: center;
		margin-bottom: 0px;
    	margin-top: 5%;

	}
    </style>
</head>
<body>
	<div class="container" style="margin-top: 5%; box-sizing: border-box;">
	   <?php  
            require_once('header.php'); 
        ?>
        <h1> Ajouter Un Article </h1>
		<div class="ajouter">
			<form action="" method="POST" >
			  <div class="form-group">
			    <label for="exampleInputEmail1">Libelle</label>
			    <input type="text" class="form-control" name="libelle" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrez le nom de votre article">
			 <!--   <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Prix</label>
			    <input type="text" class="form-control" name="prix" id="exampleInputPassword1" placeholder=" Donnez le prix de votre">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Description</label>
			    <input type="text" class="form-control" name="description" id="exampleInputPassword1" placeholder="Décrivez votre article">
			  </div>


		<!--	  <div class="form-check">
			    <input type="checkbox" class="form-check-input" id="exampleCheck1">
			    <label class="form-check-label" for="exampleCheck1">Description</label>
			  </div>
		-->
			  <button type="submit" class="btn btn-primary" name="inserer">insérer</button>
			</form>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="../css/bootstrap.min.js"></script>
</body>
</html>