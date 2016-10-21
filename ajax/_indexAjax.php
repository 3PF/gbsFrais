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

session_start();
require_once("../include/fct.inc.php");
require_once ("../include/class.pdogsb.inc.php");
$pdo = PdoGsb::getPdoGsb();
// Verifier qu'un utilisateur est connecté
if ( estConnecte() && isset($_POST['uc']) ) {
    $uc = $_POST['uc'];
    switch ($uc) {
        case 'statAnnee': {
            include("controleurs/c_statAnnee.ajx.php");
            break;
        }
    }
}

?>
<script type="text/javascript" src="../js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="js\_ajax.lib.js"></script>