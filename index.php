<?php
ob_start();
$page="index";
?>
<!DOCTYPE HTML>
<html>
  <head>
  <?php require_once("inc/head.php"); ?>
  <?php require_once("inc/meta.php"); ?>
  </head>
  <body>
  <?php require_once("inc/header.php"); ?>
  <section id="tags">
    <div id="inner-tags" class="clear">
      <article>
        <ul class="clear">
          <li><img src="img/icon1.png"></li>
          <li>FAST<br>
            <span>& SAFE</span></li>
        </ul>
        <p>All taxis are registered so you can see your driver&rsquo;s name, license number and phone number! Simply confirm your  booking and and you are all set!</p>
      </article>
      <article>
        <ul class="clear">
          <li><img src="img/icon2.png"></li>
          <li>BEST<br>
            <span>PRICES</span></li>
        </ul>
        <p>We have the best prices across the country for you to choose amongst the most economical, cheaper, budget car rental options without depreciating the quality of our services.</p>
      </article>
      <article>
        <ul class="clear">
          <li><img src="img/icon3.png"></li>
          <li>BEST<br>
            <span>SERVICE</span></li>
        </ul>
        <p>The secret of MTTS success is a sincere and committed approach to tourist's requirements, anticipating their needs and working towards providing fullest satisfaction to them.</p>
      </article>
    </div>
  </section>
  <section id="tabs" class="clear">
    <article>
      <h1>About MTTS</h1>
      <img src="img/tab-1.jpg">
      <p>Welcome to &ldquo;Mohindra Tourist Taxi Service (MTTS)&rdquo;, one of the esteemed travel and tour operators in New Delhi.  Built on by Mr. Mohindra Singh Grewal way back in 1971 and carried forward by Mr. Manjeet Singh, Mr. Atamjeet Singh and Mr. Amandeep Singh , it seeks to  fulfill travelling requirements within India.</p>
      <a href="../about">Read More</a> </article>
    <article>
      <h1>Bookings</h1>
      <img src="img/tab-2.jpg">
      <p>To make your reservation, just provide all your information in the form given below. We'll call you to ensure you have all the details about the car. If you want a quick booking then you can call us on 011 26143188 / 011 26147680 / 9811364428 / 9810621133. You can also send us an email at <strong>info@mohindratourist.com</strong></p>
      <a href="../booking">Read More</a> </article>
    <article>
      <h1>Contact</h1>
      <img src="img/tab-3.jpg">
      <p><strong>Address:</strong> Poorvi & Paschimi Marg, Near Modern School,<br>
        Vasant Vihar, New Delhi-110057<br>
        <br>
        <strong>Phone:</strong> 011 26143188 / 011 26147680<br>
        <strong>Mobile</strong>: 9990080999 / 9811364428 / 9810621133<br><br>
      <a href="../contact">Read More</a> </article>
  </section>
  <?php require_once("inc/footer.php"); ?>
</body>
</html>
<?php
ob_flush();
?>