<?php 
	require_once('Config.php');



if (isset($_GET['edit'])) 
{
	  $id = $_GET['edit']; 
	  $sql = "SELECT * FROM jouets  WHERE id='$id'";
	  $res = $db->prepare($sql);
	  $res->execute();
	  $row = $res->fetchall();

	  for ($i=0; $i <count($row) ; $i++) 
	  { 
	  	$id = $row[$i]['id'];
	  	$libelle = $row[$i]['libelle'];
	  	$prix= $row[$i]['prix'];
	  	$description = $row[$i]['description'];
	  }
}

if (isset($_POST['modifier']) && $_POST['modifier'] == 'Modifier') 
{
	$data = [
    'libelle' => $_POST['libelle'],
    'prix' => $_POST['prix'] ,
    'description' => $_POST['description'] ,
    'id' => $_GET['edit'] ,
];
	$sql = "UPDATE jouets SET libelle=:libelle, prix=:prix, description=:description WHERE id=:id";
	$stmt= $db->prepare($sql);
	$stmt->execute($data);
	if ($stmt) 
	 	header('location: Menu.php');
	else
		echo " <h1> Failed </h1> ";
}

?>



<!DOCTYPE html>
<html>
<head>
	<title>Modifier Un  Article</title>
	<link rel="stylesheet" type="text/css" href="CSS.css">
   <script src="https://kit.fontawesome.com/45e38e596f.js" crossorigin="anonymous"></script>
   <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
    .container > .modifier
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
        <h1> Modifier Un Article </h1>
		<div class="modifier">
			<form action="" method="POST" >
				<div class="form-group">
			    <!--	<label for="exampleInputPassword1">id</label> -->
			    	<input type="hidden" class="form-control" name="id" id="exampleInputPassword1">
			  </div>

			  <div class="form-group">
			    <label for="exampleInputEmail1">Libelle</label>
			    <input type="text" class="form-control" name="libelle" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $libelle; ?>" >
			 <!--   <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Prix</label>
			    <input type="text" class="form-control" name="prix" id="exampleInputPassword1" value="<?php echo $prix; ?>">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Description</label>
			    <input type="text" class="form-control" name="description" id="exampleInputPassword1" value="<?php echo $description; ?>">
			  </div>


		<!--	  <div class="form-check">
			    <input type="checkbox" class="form-check-input" id="exampleCheck1">
			    <label class="form-check-label" for="exampleCheck1">Description</label>
			  </div>
		-->
			  <button type="submit" class="btn btn-primary" name="modifier" value="Modifier">modifier</button>
			</form>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="../css/bootstrap.min.js"></script>
</body>
</html>