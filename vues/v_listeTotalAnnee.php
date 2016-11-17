<h2>Mes fiches de frais annuelles totales</h2>
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="form-group">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <span class="panel-title">Total de remboursement des frais annuelles</span>
                </div>
                <table class="table table-bordered table-responsive table-striped">
                    <tr>
                        <th class="date">Année</th>
                        <th class="montant">Montant</th>                
                    </tr>
                    <?php
                    foreach ($lesAnnees as $uneAnnee) {
                        ?>
                        <tr>
                            <td><?php echo $uneAnnee['year']; ?></td>
                            <td><span class="text-info"><?php echo $uneAnnee['montant'] . ' €'; ?></span></td>
                        </tr>  
                        <?php
                    }
                    ?> 
                </table>
            </div>
        </div>
    </div>
</div>