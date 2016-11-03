<?php
/**
 * Fonctions pour l'application GSB
 * @package default
 * @author Cheri Bibi
 * @version    1.0
 */
/**
 * Teste si un quelconque visiteur est connecté
 * @return vrai ou faux
 */
function estConnecte() {
    return isset($_SESSION['idVisiteur']);
}
/**
 * Enregistre dans une variable session les infos d'un visiteur
 *
 * @param $id
 * @param $nom
 * @param $prenom
 */
function connecter($id, $nom, $prenom) {
    $_SESSION['idVisiteur'] = $id;
    $_SESSION['nom'] = $nom;
    $_SESSION['prenom'] = $prenom;
}
/**
 * Détruit la session active
 */
function deconnecter() {
    session_destroy();
}
/**
 * Transforme une date au format français jj/mm/aaaa vers le format anglais aaaa-mm-jj
 *
 * @param $madate au format  jj/mm/aaaa
 * @return la date au format anglais aaaa-mm-jj
 */
function dateFrancaisVersAnglais($maDate) {
    @list($jour, $mois, $annee) = explode('/', $maDate);
    return date('Y-m-d', mktime(0, 0, 0, $mois, $jour, $annee));
}
/**
 * Transforme une date au format format anglais aaaa-mm-jj vers le format français jj/mm/aaaa
 *
 * @param $madate au format  aaaa-mm-jj
 * @return la date au format format français jj/mm/aaaa
 */
function dateAnglaisVersFrancais($maDate) {
    @list($annee, $mois, $jour) = explode('-', $maDate);
    $date = "$jour" . "/" . $mois . "/" . $annee;
    return $date;
}
/**
 * retourne le mois au format aaaamm selon le jour dans le mois
 *
 * @param $date au format  jj/mm/aaaa
 * @return le mois au format aaaamm
 */
function getMois($date) {
    @list($jour, $mois, $annee) = explode('/', $date);
    if (strlen($mois) == 1) {
        $mois = "0" . $mois;
    }
    return $annee . $mois;
}
/* gestion des erreurs */
/**
 * Indique si une valeur est un entier positif ou nul
 *
 * @param $valeur
 * @return vrai ou faux
 */
function estEntierPositif($valeur) {
    return preg_match("/[^0-9]/", $valeur) == 0;
}
/**
 * Indique si un tableau de valeurs est constitué d'entiers positifs ou nuls
 *
 * @param $tabEntiers : le tableau
 * @return vrai ou faux
 */
function estTableauEntiers($tabEntiers) {
    $ok = true;
    foreach ($tabEntiers as $unEntier) {
        if (!estEntierPositif($unEntier)) {
            $ok = false;
        }
    }
    return $ok;
}
/**
 * Vérifie si une date est comprise entre 1 an avant aujourd'hui et aujourd'hui
 * retourne vrai si invalide et faux si valide
 * @param $dateTestee
 * @return vrai ou faux
 */
function estDateDepassee($dateTestee) {
    $dateActuelle = date("d/m/Y");
    @list($jour, $mois, $annee) = explode('/', $dateActuelle);
    $annee--;
    $AnPasse = $annee . $mois . $jour;
    @list($jourTeste, $moisTeste, $anneeTeste) = explode('/', $dateTestee);
    $yearOk = ($anneeTeste . $moisTeste . $jourTeste > $AnPasse);
    @list($jour, $mois, $annee) = explode('/', $dateActuelle);
    $jour++;
    $demain = $annee . $mois . $jour;
    @list($jourTeste, $moisTeste, $anneeTeste) = explode('/', $dateTestee);
    $tomorrowOk = $anneeTeste . $moisTeste . $jourTeste > $demain;
    return ($tomorrowOk && $yearOk);
}

/**
 * Vérifie la validité du format d'une date française jj/mm/aaaa
 *
 * @param $date
 * @return vrai ou faux
 */
function estDateValide($date) {
    $tabDate = explode('/', $date);
    $dateOK = true;
    if (count($tabDate) != 3) {
        $dateOK = false;
    } else {
        if (!estTableauEntiers($tabDate)) {
            $dateOK = false;
        } else {
            if (!checkdate($tabDate[1], $tabDate[0], $tabDate[2])) {
                $dateOK = false;
            }
        }
    }
    return $dateOK;
}
/**
 * Vérifie que le tableau de frais ne contient que des valeurs numériques
 *
 * @param $lesFrais
 * @return vrai ou faux
 */
function lesQteFraisValides($lesFrais) {
    return estTableauEntiers($lesFrais);
}
/**
 * Vérifie la validité des trois arguments : la date, le libellé du frais et le montant
 *
 * des message d'erreurs sont ajoutés au tableau des erreurs
 *
 * @param $dateFrais
 * @param $libelle
 * @param $montant
 */
function valideInfosFrais($dateFrais, $libelle, $montant) {
    if ($dateFrais == "") {
        ajouterErreur("Le champ date ne doit pas être vide");
    } else {
        if (!estDatevalide($dateFrais)) {
            ajouterErreur("Date invalide");
        } else {
            if (estDateDepassee($dateFrais)) {
                ajouterErreur("Date d'enregistrement du frais dépassée de plus d'un an ou postérieure à la date du jour");
            }
        }
    }
    if ($libelle == "") {
        ajouterErreur("Le champ description ne peut pas être vide");
    }
    if ($montant == "") {
        ajouterErreur("Le champ montant ne peut pas être vide");
    } else
    if (!is_numeric($montant)) {
        ajouterErreur("Le champ montant doit être numérique");
    }
}
/**
 * Ajoute le libellé d'une erreur au tableau des erreurs
 *
 * @param $msg : le libellé de l'erreur
 */
function ajouterErreur($msg) {
    if (!isset($_REQUEST['erreurs'])) {
        $_REQUEST['erreurs'] = array();
    }
    $_REQUEST['erreurs'][] = $msg;
}
/**
 * Retoune le nombre de lignes du tableau des erreurs
 *
 * @return le nombre d'erreurs
 */
function nbErreurs() {
    if (!isset($_REQUEST['erreurs'])) {
        return 0;
    } else {
        return count($_REQUEST['erreurs']);
    }
}



/**
* Retourne le mois d'une date exprimé en français
* @date : un numéro de mois
* @mode : 1 == le mois en entier, 2 == le mois abrégé
* @return le mois
*/
function getMonth($month,$mode) {
   switch ($month) {
       case 1 : {
           if ($mode == 1) {
               $result = 'Janvier';
           }
           else {
               $result = 'Jan';
           }
       } break;
       case 2 : {
           if ($mode == 1) {
               $result = 'Février';
           }
           else {
               $result = 'Fév';
           }
       } break;
       case 3 : {
           if ($mode == 1) {
               $result = 'Mars';
           }
           else {
               $result = 'Mar';
           }
       } break;
       case 4 : {
           if ($mode == 1) {
               $result = 'Avril';
           }
           else {
               $result = 'Avr';
           }
       } break;
       case 5 : {
           $result = 'Mai';
       } break;
       case 6 : {
           if ($mode == 1) {
               $result = 'Juin';
           }
           else {
               $result = 'Jun';
           }
       } break;
       case 7 : {
           if ($mode == 1) {
               $result = 'Juillet';
           }
           else {
               $result = 'Jul';
           }
       } break;
       case 8 : {
           if ($mode == 1) {
               $result = 'Août';
           }
           else {
               $result = 'Aug';
           }
       } break;
       case 9 : {
           if ($mode == 1) {
               $result = 'Septembre';
           }
           else {
               $result = 'Sep';
           }
       } break;
       case 10 : {
           if ($mode == 1) {
               $result = 'Octobre';
           }
           else {
               $result = 'Oct';
           }
       } break;
       case 11 : {
           if ($mode == 1) {
               $result = 'Novembre';
           }
           else {
               $result = 'Nov';
           }
       } break;
       case 12 : {
           if ($mode == 1) {
               $result = 'Décembre';
           }
           else {
               $result = 'Dec';
           }
       } break;
       default : $result = 'OOPS'; break;
   }
   return $result;
}
?>
