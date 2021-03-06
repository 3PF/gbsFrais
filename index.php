<?php

require_once("include/fct.inc.php");
require_once ("include/class.pdogsb.inc.php");
session_start();
$pdo = PdoGsb::getPdoGsb();
$estConnecte = estConnecte();
include("vues/v_entete.php");
if (!isset($_REQUEST['uc']) && !$estConnecte) {
    $_REQUEST['uc'] = 'connexion';
} else if (empty($_REQUEST['uc'])) {
    $_REQUEST['uc'] = 'accueil';
}
$uc = $_REQUEST['uc'];

switch ($uc) {
    case 'connexion': {
            include("controleurs/c_connexion.php");
            break;
        }
    case 'accueil': {
            include("controleurs/c_accueil.php");
            break;
        }
    case 'gererFrais' : {
            include("controleurs/c_gererFrais.php");
            break;
        }
    case 'etatFrais' : {
            include("controleurs/c_etatFrais.php");
            break;
        }
    case 'etatFraisTotal' : {
            include("controleurs/c_etatFraisTotal.php");
            break;
        }
    case 'deconnexion' : {
            include("controleurs/c_deconnexion.php");
            break;
        }
   case 'statAnnee':
      {
         include("controleurs/c_listAnnees.php");
         break;
      }break;

}
include("vues/v_pied.php");
?>

<!--jQuery library-->
<script src="bootstrap/js/jquery-3.1.1.js"></script>
<script src="js/jquery-1.11.3.min.js"></script>

<!--Bootstrap library-->
<script src="bootstrap/js/bootstrap.min.js"></script>

<!--Perso library-->
<script type="text/javascript" src="ajax\js\_ajax.lib.js"></script>


