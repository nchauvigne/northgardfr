<?php

if(!isset($_REQUEST['action']))
     $action = 'displayListClan';
else
	$action = $_REQUEST['action'];

switch($action)
{
	case 'displayListClan':
	{
		include("view/v_listClan.php");
		break;
	}

    case 'cerf':
    {
        include("view/v_cerf.php");
        break;
    }

    case 'chevre':
    {
        include("view/v_chevre.php");
        break;
    }

    case 'loup':
    {
        include("view/v_loup.php");
        break;
    }

    case 'corbeau':
    {
        include("view/v_corbeau.php");
        break;
    }

    case 'ours':
    {
        include("view/v_ours.php");
        break;
    }
    case 'serpent':
    {
        include("view/v_serpent.php");
        break;
    }
}

?>