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
            $action = $_REQUEST["action"];
            $id_visiteur = $_SESSION["idVisiteur"];
            switch($action)
            {
                case'selectionnerAnnee':
                {
                    $lesAnnees = $pdo->getLesAnneesDisponibles($id_visiteur);
                    include("vues/v_listeAnnees.php");
                }
            }
        ?>
    </body>
</html>
