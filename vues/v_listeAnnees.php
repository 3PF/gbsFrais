<h2>Mes fiches de frais</h2>

<div class="row">
    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
        <h3>Sélectionner une année : </h3>
    </div>
    <div class="col-lg-4 col-lg-offset-0 col-md-5 col-md-offset-0 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-3">
        <form action="index.php?uc=statAnnee&action=selectionnerAnnee" method="post" role="form">
            <div class="form-group">
                <label for="lstAnnee" accesskey="n">Année : </label>
                <select id="lstAnnee" name="lstAnnees" class="form-control">
                    <?php
                    foreach ($lesAnnees as $uneAnnee) {
                        $annee = $uneAnnee['annee'];
                        ?>
                        <option selected value="<?php echo $annee ?>"><?php echo $annee ?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <div class="col-lg-12">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <input id="ok" type="submit" value="Valider" class="btn btn-success btn-block" role="button" onclick="afficherStatAnnee();return false"/>
                    </div>
                    <span class="hidden-lg hidden-md hidden-sm">
                        <br></br>
                    </span>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <input id="annuler" type="reset" value="Effacer" class="btn btn-danger pull-right btn-block" role="button" />
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<hr>
<div id="zoneStat">
</div>
