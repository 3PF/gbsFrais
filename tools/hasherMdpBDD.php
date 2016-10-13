<?php

$serveur = 'mysql:host=localhost';
$bdd = 'dbname=gsb_frais';
$user = 'root';
$mdp = '';
$salt = 'eca46a4797240dd4936bdf61bf32768c62f539ee46472cf9db01f50231328d2e';

try {
    $monPdo = new PDO($serveur . ';' . $bdd, $user, $mdp);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
$monPdo->query("SET CHARACTER SET utf8");
$monPdo->exec('ALTER TABLE visiteur CHANGE mdp mdp CHAR(128) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL');
echo 'Hashage des mots de passe déjà présent dans la BDD en cours...';
$res = $monPdo->query('SELECT * FROM visiteur');
while ($donnees = $res->fetch()) {
    $hash = $salt . hash("sha256", $donnees['mdp'] . $salt);
    $req = $monPdo->prepare('UPDATE visiteur SET mdp = :mdp WHERE id = :id');
    $req->execute(array(
        'mdp' => $hash,
        'id' => $donnees['id']
    ));
}
echo 'Terminé avec succès !';
?>