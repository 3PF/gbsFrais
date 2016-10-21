<?php

/**
 * 
 * Application Schuman
 * © Vincent, 2016
 * 
 * Name
 *
 * Utilise les services de
 *
 * @package     default
 * @author      pv
 * @version     1.0
 * @link        
 */

if (!isset($_REQUEST['action'])) {
    $_REQUEST['action'] = 'demandeinscription';
}
$action = $_REQUEST['action'];
switch ($action) {
    case 'demandeinscription': {
            include("vues/v_inscription.php");
            break;
        }
    case 'valideInscription': {
            $firstName = $_REQUEST['firstName'];
            $name = $_REQUEST['name'];
            $mdp = $_REQUEST['mdp'];
            $confirmMdp = $_REQUEST['confimrMdp'];
            if($mdp == $confirmMdp)
            {
                $visiteur = $pdo->setInfoVisiteur($firstName,$name,$mdp,$confirmMdp);
                var_dump($visiteur);
            }
            else{
                ajouterErreur("Les mots de passe ne correspondent pas");
                include("vues/v_erreurs.php");
                include("vues/v_inscription.php");
            }
            break;
        }
    default : {
            include("vues/v_connexion.php");
            break;
        }
}
?>