<?php

if(!isset($_REQUEST['action']))
     $action = 'homepage';
else
	$action = $_REQUEST['action'];

switch($action)
{
	case 'homepage':
	{
		/*
		$lesSections=$pdo->getLesSections();
		$lesTypePartenaires=$pdo->getLesTypePartenaires();
		$lesSaisons=$pdo->getLesSaisons();
		$lesPartenaires = $pdo->getLesPartenairesFiltre($_SESSION['filtreSection'],$_SESSION['filtreTypePartenaire'],$_SESSION['filtreSaison']);
		*/

		include("view/v_homepage.php");
		break;
	}
}


?>