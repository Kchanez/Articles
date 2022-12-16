<?php 
	require_once('Config.php');


	if (isset($_GET['id']))
	{
		$id=$_GET['id'];
		$query = ('DELETE FROM jouets WHERE id= '.$id);
		$res=$db->exec($query) 	or 
			die('Erreur SQL! <br>'.$query.'<br>'.$db->errorInfo());
			header("location:Menu.php?page=prestataire");
	}


	




