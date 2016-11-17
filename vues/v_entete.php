<!DOCTYPE html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="UTF-8" />
    <title>Intranet du Laboratoire Galaxy-Swiss Bourdin</title>
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,
          initial-scale=1,
          minimum-scale=1,
          maximum-scale = 1,
          user-scalable=no">
    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="container">
        <?php
        if ($estConnecte) {
            ?>
            <div class="page-header">
                <div class="navbar navbar-inverse navbar-fixed-top">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="index.php">GsbFrais</a>
                        </div>
                        <div id="navbar" class="collapse navbar-collapse ">
                            <div class="nav navbar-nav">
                                <li <?php if (!isset($_REQUEST['uc']) || $_REQUEST['uc'] == 'accueil') { ?> class="active"<?php } ?>><a href="index.php">Accueil</a></li>
                                <li <?php if (isset($_REQUEST['uc']) && $_REQUEST['uc'] == 'gererFrais') { ?> class="active"<?php } ?>><a href="index.php?uc=gererFrais&action=saisirFrais">Saisie fiche de frais</a></li>
                                <li <?php if (isset($_REQUEST['uc']) && $_REQUEST['uc'] == 'etatFrais') { ?> class="active"<?php } ?>><a href="index.php?uc=etatFrais&action=selectionnerMois">Mes fiches de frais</a></li>
                                <li <?php if (isset($_REQUEST['uc']) && $_REQUEST['uc'] == 'etatFraisTotal') { ?> class="active"<?php } ?>><a href="index.php?uc=etatFraisTotal&action=selectionnerAnnee">Tableau de bord total</a></li>
                                <li <?php if (isset($_REQUEST['uc']) && $_REQUEST['uc'] == 'statAnnee') { ?> class="active"<?php } ?>><a href="index.php?uc=statAnnee&action=selectionnerAnnee">Statistiques annuelles</a></li>
                                <li <?php if (isset($_REQUEST['uc']) && $_REQUEST['uc'] == 'deconnexion') { ?> class="active"<?php } ?>><a href="index.php?uc=deconnexion&action=demandeDeconnexion">Déconnexion</a></li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        } else {
            ?>
            <h1><img src="./img/logo.jpg" class="img-responsive center-block" alt="Laboratoire Galaxy-Swiss Bourdin" title="Laboratoire Galaxy-Swiss Bourdin"></h1>
            <?php
        }
        ?>
