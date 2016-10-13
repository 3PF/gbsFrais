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
echo($_POST['uc']);
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
