<h2>Mes fiches de frais</h2>

<div class="row">
    <div class="col-md-4">
        <h3>Sélectionner une année : </h3>
    </div>
    <div class="col-md-4">
        <form action="index.php?uc=statAnnee&action=selectionnerAnnee" method="post" role="form">
            <div class="form-group">
                <label for="lstAnnee" accesskey="n">Année : </label>
                <select id="lstAnnee" name="lstAnnees" class="form-control">
                    <?php
                    foreach ($lesAnnees as $uneAnnee) 
                    {
                        $annee = $uneAnnee['annee'];
                        ?>
                        <option selected value="<?php echo $annee ?>"><?php echo $annee ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <input id="ok" type="submit" value="Valider" class="btn btn-success" role="button" onclick="afficherStatAnnee();return false"/>
            <input id="annuler" type="reset" value="Effacer" class="btn btn-danger" role="button" />
        </form>
        <div id="zoneStat">
        </div>
    </div>
</div>
