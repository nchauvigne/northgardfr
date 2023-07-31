<?php
/**
 * Classe d'accès aux données.

 * Utilise les services de la classe PDO
 * pour l'application
 * Les attributs sont tous statiques,
 * les 4 premiers pour la connexion
 * $myPdo de type PDO
 * $myPdoGsb qui contiendra l'unique instance de la classe
 *
*/

class PdoNorthgardFR
{
      	private static $serveur='mysql:host=mysql-northgardfr.alwaysdata.net';
      	private static $bdd='dbname=northgardfr_db';
      	private static $user='270858';
      	private static $mdp='13nico49';
		private static $myPdo;
		private static $myPdoNorthgardFR = null;
/**
 * Constructeur privé, crée l'instance de PDO qui sera sollicitée
 * pour toutes les méthodes de la classe
 */
    private function __construct()
	{
    		PdoNorthgardFR::$myPdo = new PDO(PdoNorthgardFR::$serveur.';'.PdoNorthgardFR::$bdd, PdoNorthgardFR::$user, PdoNorthgardFR::$mdp);
			PdoNorthgardFR::$myPdo->query("SET CHARACTER SET utf8");
			PdoNorthgardFR::$myPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	public function _destruct(){
		PdoNorthgardFR::$myPdo = null;
	}
/**
 * Fonction statique qui crée l'unique instance de la classe
 *
 * Appel : $instancePdoNorthgardFR = PdoNorthgardFR::getPdoNorthgardFR();
 * @return l'unique objet de la classe PdoNorthgardFR
 */
	public static function getPdoNorthgardFR()
	{
		if(PdoNorthgardFR::$myPdoNorthgardFR == null)
		{
			PdoNorthgardFR::$myPdoNorthgardFR = new PdoNorthgardFR();
		}
		return PdoNorthgardFR::$myPdoNorthgardFR;
	}

    /*
    public function getGameByGameArmelloId($GameArmelloId)
    {
        $req="SELECT * FROM game Where GameArmelloId='$GameArmelloId'";
        $res=PdoNorthgardFR::$myPdo->query($req)->fetch();
        return $res;
    }

	public function addGame($GameArmelloId, $GameMode, $Complete, $VictoryType, $VictoryState, $NumPlayers, $Date, $GamePhaseCount)
	{
	    $sql = PdoNorthgardFR::$myPdo->prepare("INSERT INTO `game` (`GameId`, `GameArmelloId`, `GameMode`, `Complete`, `VictoryType`, `VictoryState`, `NumPlayers`, `Date`, `GamePhaseCount`) VALUES (NULL, :GameArmelloId, :GameMode, :Complete, :VictoryType, :VictoryState, :NumPlayers, :Date, :GamePhaseCount)");
	    $sql->bindParam(':GameArmelloId', $GameArmelloId, PDO::PARAM_STR);
		$sql->bindParam(':GameMode', $GameMode, PDO::PARAM_STR);
		$sql->bindParam(':Complete', $Complete, PDO::PARAM_BOOL);
		$sql->bindParam(':VictoryType', $VictoryType, PDO::PARAM_STR);
		$sql->bindParam(':VictoryState', $VictoryState, PDO::PARAM_STR);
		$sql->bindParam(':NumPlayers', $NumPlayers, PDO::PARAM_INT);
		$sql->bindParam(':Date', $Date, PDO::PARAM_STR);
		$sql->bindParam(':GamePhaseCount', $GamePhaseCount, PDO::PARAM_INT);
		$sql->execute();
		return PdoNorthgardFR::$myPdo->lastInsertId();
	}

    public function updateGame($GameId, $GameArmelloId,  $GameMode, $Complete, $VictoryType, $VictoryState, $NumPlayers, $Date, $GamePhaseCount)
    {
        $sql = PdoNorthgardFR::$myPdo->prepare("UPDATE `game` SET `GameArmelloId` = :GameArmelloId, `GameMode` = :GameMode, `Complete` = :Complete, `VictoryType` = :VictoryType, `VictoryState` = :VictoryState, `NumPlayers` = :NumPlayers, `Date` = :Date, `GamePhaseCount` = :GamePhaseCount WHERE `game`.`GameId` = :GameId ");
        $sql->bindParam(':GameArmelloId', $GameArmelloId, PDO::PARAM_STR);
        $sql->bindParam(':GameMode', $GameMode, PDO::PARAM_STR);
        $sql->bindParam(':Complete', $Complete, PDO::PARAM_BOOL);
        $sql->bindParam(':VictoryType', $VictoryType, PDO::PARAM_STR);
        $sql->bindParam(':VictoryState', $VictoryState, PDO::PARAM_STR);
        $sql->bindParam(':NumPlayers', $NumPlayers, PDO::PARAM_INT);
        $sql->bindParam(':Date', $Date, PDO::PARAM_STR);
        $sql->bindParam(':GamePhaseCount', $GamePhaseCount, PDO::PARAM_INT);
        $sql->bindParam(':GameId', $GameId, PDO::PARAM_INT);
        $sql->execute();
    }
    */

}
?>