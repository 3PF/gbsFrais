<?php
foreach ($lesFraisAnnuels as $uneAnnee) {
   $annee = $uneAnnee['annee'];
   ?>
      <option selected value="<?php echo $annee ?>"><?php echo $annee ?></option>
   <?php
}
?>
