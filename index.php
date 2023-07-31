<?php
session_start();
//require_once("model/class.pdoNorthgardFR.inc.php");
include("view/v_header.php");
//$pdo = PdoNorthgardFR::getPdoNorthgardFR();

if(!isset($_REQUEST['uc']))
    $uc = 'homepage';
else
    $uc = $_REQUEST['uc'];

switch($uc)
{
	case 'homepage':
		{
            include("view/v_menu.php");
            include("controller/c_homepage.php");
            break;
		}

    case 'listClan':
    {
        include("view/v_menu.php");
        include("controller/c_listClan.php");
        break;
    }

    default :
    {
        ?>
        <script type="text/javascript">
            window.location.replace('404.html');
        </script>
        <?php
        break;
    }
}
include("view/v_footer.php");
?>