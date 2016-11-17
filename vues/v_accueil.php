<div id="accueil">
    <h2>Gestion des frais<small> - Visiteur : <?php echo $_SESSION['prenom'] . " " . $_SESSION['nom'] ?></small></h2>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <span class="glyphicon glyphicon-bookmark"></span> Navigation</h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-12 col-md-12">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <a href="index.php?uc=gererFrais&action=saisirFrais" class="btn btn-success btn-block" role="button"><h4><span class="glyphicon glyphicon-plus-sign"></h4></span> <br/>Saisir fiche de frais</a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <a href="index.php?uc=etatFrais&action=selectionnerMois" class="btn btn-primary btn-block" role="button"><h4><span class="glyphicon glyphicon-list-alt"></h4></span> <br/>Mes fiches de frais</a>
                        </div>
                        <div class="hidden-lg hidden-md hidden-sm">
                            <br></br>&nbsp;
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <a href="index.php?uc=statAnnee&action=selectionnerAnnee" class="btn btn-info btn-block" role="button"><h4><span class="glyphicon glyphicon-stats"></h4></span> <br/>Statistiques annuelles</a>
                        </div>
                        <div class="hidden-lg hidden-md hidden-xs">
                            <br></br>&nbsp;
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <a href="index.php?uc=etatFraisTotal&action=selectionnerAnnee" class="btn btn-warning btn-block" role="button"><h4><span class="glyphicon glyphicon-th-list"></h4></span> <br/>Tableau de bord</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
