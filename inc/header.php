<?php

	function mymenu($page, $item)
	{
		if($page==$item)
		{
			echo "class='current'";
		}
	}

?>

<header id="header-one">
   
   <ul class="clear">
    <li class="left">Mohindra Tourist Taxi Service</li>
    <li class="right">Call: <a href="#">011 26143188</a> &frasl; <a href="#">011 26147680</a> &frasl; <a href="#">+91 9990080999</a> &frasl; +91 9811364428</li>
   </ul>
   
  </header>
  
  
  <header id="header-two" class="clear">
   <img src="../img/logo.png" width="300" class="left">
   
   <nav class="right">
    <ul>
     <li><a href="../" <?php mymenu($page, "index"); ?> >Home</a></li>
     <li><a href="../about" <?php mymenu($page, "about"); ?> >About</a></li>
     <li><a href="../fleet" <?php mymenu($page, "fleet"); ?> >Fleet</a></li>
     <li><a href="../booking" <?php mymenu($page, "booking"); ?> >Booking</a></li>
     <li class="trigger">
      <a href="../travel-offers" <?php mymenu($page, "travel-offers"); ?> <?php mymenu($page, "weekend-gateways"); ?> <?php mymenu($page, "holiday-specials"); ?>>Travel offers</a>
      <div  class="submenu">
      <ul>
       <li><a href="../weekend-gateways">Weekend Gateways</a></li>
       <li><a href="../holiday-specials">Holiday Specials</a></li>
      </ul>
      </div>
      
     </li>
     <li><a href="../contact" <?php mymenu($page, "contact"); ?>>Contact</a></li>
    </ul>
   </nav>
   
  </header>
  
  <script>$(".trigger").hover(function(){$(this).children(".submenu").stop().slideToggle("slow");});</script>
  
  <section id="slider">
  <div id="inner-slider">
  <?php if($page=="contact"){ ?>
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3504.2421499150623!2d77.1556733227539!3d28.562490461440476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1dae161bb3d7%3A0xefc595cffe342472!2sMohindra+Tourist+Taxi+Service!5e0!3m2!1sen!2sin!4v1406052512957" width="1200" height="500" frameborder="0" style="border:0"></iframe>
  <?php } else if($page!="fleet" && $page!="booking") { ?>
   <ul class="slider">
    <li><img src="../img/<?php echo $page; ?>-1.jpg"></li>
    <li><img src="../img/<?php echo $page; ?>-2.jpg"></li>
    <li><img src="../img/<?php echo $page; ?>-3.jpg"></li>
    <li><img src="../img/<?php echo $page; ?>-4.jpg"></li>
   </ul>
   <?php } ?>
   </div>
  </section>
  <script>$('.slider').bxSlider({auto:true, mode:'fade'});</script>