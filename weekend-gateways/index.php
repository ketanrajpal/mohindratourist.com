<?php
ob_start();
$page="weekend-gateways";
?>
<!DOCTYPE HTML>
<html>
  <head>
  <?php require_once("../inc/head.php"); ?>
  <?php require_once("../inc/meta.php"); ?>
  <script src="../js/jquery-ui.min.js"></script>
  </head>
  <body>
  <?php require_once("../inc/header.php"); ?>
  <section id="center">
    <h1>Weekend Gateways</h1>
    <ul class="clear" id="tab">
      <li>
        <p>A great retreat from the monotonous life offering a heavenly peaceful abode to those looking for tranquility. Situated at a distance of 8 kms from Mukteshwar this is the perfect slice of heaven.</p>
        <img src="../img/weekend-gateways-tab-1.jpg"><span>Sonapani, Mukteshwar</span></li>
      <li>
        <p>A small border district of Himachal Pradesh situated 250kms ahead of Shimla, rich in flora-fauna with a spectacular terrain of lush green valley, orchards, vineyards, snow clad peaks and cold desert mountains. It is said to be a land of fairytales and fancies as it still remains unexplored to the masses.</p>
        <img src="../img/weekend-gateways-tab-2.jpg"><span>Kinnaur, Himachal Pradesh</span></li>
      <li>
        <p>A beauty in itself, situated at an easy 6 hour drive from the capital city. A quaint little town with attractions such as the Bhulla Taal, Tip-in-Top, St Mary's and St John's Church and the Garhwal Rifles Regimental War Memorial, offers a serene yet joyful experience.</p>
        <img src="../img/weekend-gateways-tab-3.jpg"><span>Lansdowne, Uttrakhand</span></li>
      <li>
        <p>Neemrana is the heritage place of the Alwar district of Rajasthan situated on the Delhi-Jaipur highway providing panoramic view of greenery, historic culture and a picturesque location. It is a great weekend escape, especially if you are short on time and still want the blissful blend.</p>
        <img src="../img/weekend-gateways-tab-4.jpg"><span>Neemrana Palace</span></li>
    </ul>
    
    <center><h1>For any further enquiries please contact us!</h1></center>
    
  </section>
  <?php require_once("../inc/footer.php"); ?>
</body>
</html>
<?php
ob_flush();
?>