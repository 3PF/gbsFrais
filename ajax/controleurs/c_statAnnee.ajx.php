<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $action = $_POST["action"];
            $id_visiteur = $_SESSION["idVisiteur"];
            switch($action)
            {
                case'voirStatAnnee':{
                    $lAnnee = intval($_POST["lstAnnee"]);
                    $lesFraisAnnuels = $pdo->getLesFraisAnnuels($id_visiteur,$lAnnee);
                    include("vues/v_statAnnee.ajx.php");
                }
            }
        ?>
    </body>
</html>
