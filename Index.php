<?php
include_once "Car.php";
include_once "Bicycle.php";
?>

<br>

<div style="text-align: center;">
<?php var_dump($renault);?>
<?php var_dump($peugeot);?>
</div>

<br>

<div style="text-align: center;">
    <?php echo '<br>Nombre de roues : ' . $renault->getNbWheels() . '<br>'; ?>
    <?php echo 'Vitesse courante : ' . $renault->getCurrentSpeed() . ' km/h<br>'; ?>
    <?php echo 'Couleur : ' . $renault->getcolor() . '<br>'; ?>
    <?php echo 'Nombre de sièges : ' . $renault->getNbSeats() . '<br>'; ?>
    <?php echo 'Type d’énergie : ' . $renault->getEnergy() . '<br>'; ?>
    <?php echo 'Niveau d’énergie : ' . $renault->getEnergyLevel() . '<br>'; ?>
</div>

<div style="text-align: center;">
    <?php echo $renault->start(); ?>
    <?php echo '<br> Vitesse de la voiture Renault : ' . $renault->getCurrentSpeed() . ' km/h<br>'; ?>
    <?php echo $renault->forward(); ?>
    <?php echo '<br> Vitesse de la voiture Renault : ' . $renault->getCurrentSpeed() . ' km/h<br>'; ?>
    <?php echo $renault->brake(); ?>
</div>

<br>

<div style="text-align: center;">
    <?php echo "Le VTT est équipée de pneu " . $head->getTireSize() . " pouces."; ?><br>
    <?php echo "Le cadre fait " . $head->getframeSize() . " pouces."; ?><br>
    <?php echo "Le cadre est de couleur " . $head->colorFrame . "."; ?><br>
    <?php echo "Le prix actuel est de  " . $head->price . " euros, grâce à une promotion de -50%. À l'origine, il est au prix de " . $head->priceOriginal . " euros."; ?><br>
</div>

<br>

<div style="text-align: center;">
    <?php echo "Le VTT est équipée de pneu " . $lapierre->getTireSize() . " pouces."; ?><br>
    <?php echo "Le cadre fait " . $lapierre->getframeSize() . " pouces."; ?><br>
    <?php echo "Le cadre est de couleur " . $lapierre->colorFrame . "."; ?><br>
    <?php echo "Le prix actuel est de  " . $lapierre->price . " euros, grâce à une promotion de -20%. À l'origine, il est au prix de " . $lapierre->priceOriginal . " euros."; ?><br>
</div>

<br>

<?php /* J'en revient pas de découvir que l'on pouvait stylisé nos var dump ^^ c'est trop cool lol */ ?>
<div style="text-align: center;">
    <?php var_dump($lapierre->priceOriginal); ?>
    <?php var_dump($lapierre->getTireSize()); ?>
    <?php var_dump($head->getTireSize()); ?>
    <?php var_dump($head->price); ?>
    <?php var_dump($head->getframeSize()); ?>
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
    <?php var_dump($trek); ?>
    <?php $trek->dump(); ?>
</div>