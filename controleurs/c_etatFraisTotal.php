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
            $id_visiteur = $_SESSION["idVisiteur"];
            $lesAnnees = $pdo->getLesFraisAnnuels($id_visiteur,null);
            $lesMois = $pdo->getLesMoisDisponibles($id_visiteur);
            
            include("vues/v_listeTotalAnnee.php");
        ?>
    </body>
</html>
