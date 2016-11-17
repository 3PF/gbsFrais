<div class='row'>
    <div class='col-lg-5 col-md-5 col-sm-6'>
        <div class="panel panel-info">
            <div class="panel-heading">Total remboursement de frais pour l'année : <?php echo($lAnnee) ?></div>
            <table class="table table-bordered table-responsive table-striped">
            <tr>
                <th>Mois</th>
                <th>Montant</th>
                <th>Nombres de justificatifs</th>
            </tr>
            <?php
            $totalMontant = 0;
            $totalJustificatifs = 0;

            foreach ($lesFraisAnnuels as $uneAnnee) {
                $annee = getMonth(intval($uneAnnee['month']),1);
                $montant = $uneAnnee['montant'];
                $nbJustificatifs = $uneAnnee['nbJust'];
                ?>
                <tr>
                    <td><?php echo $annee ?></td>
                    <td><?php echo $montant ?></td>
                    <td class='text-center'><?php echo $nbJustificatifs ?></td>
                </tr>
                <?php
                $totalMontant += $montant;
                $totalJustificatifs += $nbJustificatifs;
            }
            ?>
            </table>
        </div>
    </div>
    <div class="col-lg-5 col-lg-offset-2 col-md-5 col-md-offset-2 col-sm-5 col-sm-offset-1">
        <div class='panel panel-primary'>
            <div class='panel-heading'>
                <div class='panel-title'>Total</div>
            </div>
            <div class='panel-body'>
                <div class='alert alert-info'>
                    <?php echo ("Total montant : <span class='badge'>".$totalMontant."</span>")?>
                </div>
                 <div class='alert alert-info'>
                    <?php echo ("Total justificatifs : <span class='badge'>".$totalJustificatifs."</span>")?>
                </div>
            </div>
        </div>
    </div>
</div>
