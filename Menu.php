<?php 
	require_once('Config.php');
	require_once('Delete.php');

$liste = array 
	(
		"Libellé" ,
		"prix",
		"description",
		"Action"
	); 

	
	// Récuperer les informations des articles
	$sql = 'SELECT * FROM jouets';
	$res = $db->prepare($sql);
	$res->execute();
	$ligne = $res->fetchall();

	
	
?>



<!DOCTYPE html>
<html>
<head>
	<title>Liste des articles</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    <script src="https://kit.fontawesome.com/45e38e596f.js" crossorigin="anonymous"></script>
   <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" type="text/css" href="CSS.css">
</head>
<body>
	<div class="container" style="margin-top: 5%">
		<?php 
			include_once('header.php');
		?>
	       <br><br>
        <!-- Menu -->
        <div class="menu">
            <p>La liste des articles</p>
        </div>
		<!-- Table -->
    <table class="table">
    <thead >
    <tr class="table-dark">
        <?php 
            for ($i=0; $i <count($liste) ; $i++) 
            {
        ?>
            <th scope="col-auto"> <?php echo $liste[$i]; ?></th>
        <?php 
            }
        ?>  
    </tr>
    </thead>
    
    <tbody>
    <?php
        for ($i=0; $i<count($ligne) ; $i++)
        {
    ?>
        <tr>
        <th scope="row" class="align-middle"><?php echo $ligne[$i]['libelle'];?> </th>
        <td class="align-middle"><?php echo $ligne[$i]['prix']; ?></td>
        <td class="align-middle"><?php echo $ligne[$i]['description']; ?></td>
        <td>
            <a class="btn btn-primary" href="Modifier.php?edit=<?php echo $ligne[$i]['id']?>"> 
                <i class="fas fa-pencil-alt fa-lg"></i>
            </a>

            <a class="btn btn-danger" href="Delete.php?id=<?php echo $ligne[$i]['id']?>"> 
                <i class="fa fa-trash-o fa-lg" aria-hidden="true"></i>
            </a>
        </td>     
        </tr>
    <?php 
    	}
    ?> 
    </tbody>
    </table>


	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="../css/bootstrap.min.js"></script>
</body>
</html>