<?php
// echo 'toto';
  require './helpers/init.php';
  include "./helpers/autoload.php";
// echo 'titi';
$DestinationsManager = new DestinationsManager($db);
$destinationCards = $DestinationsManager->getDestinationsCardContent();
// echo 'tata';
?>

<!DOCTYPE html>
<html lang="en">

  <?php include "./partials/head.php"?>

<body class="grey lighten-5">

  <?php include "./partials/carousel.php"?>
  <?php include "./partials/navbar.php"?>

    <div class="container center-align">
      <h3>Laissez parler le voyageur qui est en vous !</h3>
      <p>Rechercher un voyage prend souvent du temps. Trouver le site qui propose des voyages qui vous correspondent n’est déjà pas une étape facile mais ensuite il vous faut comparer circuits et prix avec d’autres voyagistes pour être sûr de faire le bon choix. Pour vous éviter de perdre du temps à consulter chacun de ces sites, nous avons sélectionné pour vous les meilleurs voyagistes et leurs plus beaux circuits que vous trouverez dans notre comparateur de voyages. Rapide et facile d’utilisation, il vous propose en 1 clic tous les voyages proposés par les meilleures agences sur la destination choisie. Fini le temps passé à comparer les circuits et prix d’un site à l’autre. Vous allez enfin pouvoir organiser votre voyage sereinement !</p>
    </div>

  <?php include "./partials/destinationCard.php"?>

  <?php include "./partials/footer.php"?>

  


<!-- END of body content ------------------------------------------------------------------------------------------>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>

<!-- Materialize Compiled and minified JavaScript -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<!-- Link to JavaScript file-->

<script src="../assets/js/script.js"></script>

</body>


</html>