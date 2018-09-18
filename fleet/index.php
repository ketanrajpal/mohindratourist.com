<?php
ob_start();
$page="fleet";
?>
<!DOCTYPE HTML>
<html>
  <head>
  <?php require_once("../inc/head.php"); ?>
  <?php require_once("../inc/meta.php"); ?>
  <script src="../js/modernizr.custom.63321.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/slider.css">
  <script src="../js/jquery.catslider.js"></script>
  </head>
  <body>
  <?php require_once("../inc/header.php"); ?>
  <div class="container">
    <div class="main">
      <div id="mi-slider" class="mi-slider">
        <ul>
          <li><a href="#"><img src="../img/fleet/mercedes.jpg" alt="img01">
            <h4>Mercedes Benz</h4>
            </a></li>
          <li><a href="#"><img src="../img/fleet/Camry.jpg" alt="img02">
            <h4>Toyota Camry</h4>
            </a></li>
          <li><a href="#"><img src="../img/fleet/corolla.jpg" alt="img03">
            <h4>Toyota Corolla</h4>
            </a></li>
          <li><a href="#"><img src="../img/fleet/accent.jpg" alt="img04">
            <h4>Hyundai Accent</h4>
            </a></li>
        </ul>
        <ul>
          <li><a href="#"><img src="../img/fleet/indigo.jpg" alt="img12">
            <h4>Tata Indigo</h4>
            </a></li>
          <li><a href="#"><img src="../img/fleet/am.jpg" alt="img13">
            <h4>Ambassador</h4>
            </a></li>
          <li><a href="#"><img src="../img/fleet/indica.jpg" alt="img14">
            <h4>Tata Indica</h4>
            </a></li>
          <li><a href="#"><img src="../img/fleet/lancer.jpg" alt="img15">
            <h4>Mitsubishi Lancer</h4>
            </a></li>
        </ul>
        <ul>
          <li><a href="#"><img src="../img/fleet/endeavour.jpg" alt="img06">
            <h4>Ford Endeavour</h4>
            </a></li>
            <li><a href="#"><img src="../img/fleet/tfortuner.jpg" alt="img06">
            <h4>Toyota Fortuner</h4>
            </a></li>
            <li><a href="#"><img src="../img/fleet/tinnova.jpg" alt="img06">
            <h4>Toyota Innova</h4>
            </a></li>
        </ul>
        <nav> <a href="#">Sedan</a> <a href="#">Sedan</a> <a href="#">SUV</a> </nav>
      </div>
    </div>
  </div>
  <script>
			$(function() {
				$( '#mi-slider' ).catslider();
			});
		</script>
  <?php require_once("../inc/footer.php"); ?>
</body>
</html>
<?php
ob_flush();
?>