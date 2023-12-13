<?php
include_once "Bicycle.php"
?>

<div style="text-align: center;">
    <?php echo "Le VTT est équipée de pneu " . $Head->getAfficherTaillePneu() . " pouces."; ?><br>
    <?php echo "Le cadre fait " . $Head->getAfficherTailleCadre() . " pouces."; ?><br>
    <?php echo "Le cadre est de couleur " . $Head->couleurCadre . "."; ?><br>
    <?php echo "Le prix actuel est de  " . $Head->prix . " euros, grâce à une promotion de -50%. À l'origine, il est au prix de " . $Head->prixOriginal . " euros."; ?><br>
</div>

<br>

<div style="text-align: center;">
    <?php echo "Le VTT est équipée de pneu " . $Lapierre->getAfficherTaillePneu() . " pouces."; ?><br>
    <?php echo "Le cadre fait " . $Lapierre->getAfficherTailleCadre() . " pouces."; ?><br>
    <?php echo "Le cadre est de couleur " . $Lapierre->couleurCadre . "."; ?><br>
    <?php echo "Le prix actuel est de  " . $Lapierre->prix . " euros, grâce à une promotion de -20%. À l'origine, il est au prix de " . $Lapierre->prixOriginal . " euros."; ?><br>
</div>

<br>

<?php /* J'en revient pas de découvir que l'on pouvait stylisé nos var dump ^^ c'est trop cool lol */?>
<div style="text-align: center;">
<?php var_dump($Lapierre->prixOriginal);?>
<?php var_dump($Lapierre->getAfficherTaillePneu());?>
<?php var_dump($Head->getAfficherTaillePneu());?>
<?php var_dump($Head->prix);?>
<?php var_dump($Head->getAfficherTailleCadre());?>
</div>

<br>

<div style="text-align: center;">
    <?php echo $tornado->forward(); ?>
    <?php echo '<br> Vitesse du vélo Tornado : ' . $tornado->currentSpeed . ' km/h' . '<br>'; ?>
    <?php echo $tornado->brake(); ?>
    <?php echo '<br> Vitesse du vélo Tornado : ' . $tornado->currentSpeed . ' km/h' . '<br>'; ?>
    <?php echo $tornado->brake(); ?>
</div>

<br>

<div style="text-align: center;">
    <?php var_dump($Trek);?>
    <?php $Trek->dump();?>
</div>
