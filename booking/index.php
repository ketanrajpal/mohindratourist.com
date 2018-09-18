<?php
ob_start();
$page="booking";
?>
<!DOCTYPE HTML>
<html>
  <head>
  <?php require_once("../inc/head.php"); ?>
  <?php require_once("../inc/meta.php"); ?>
  <script>
   var country=[ "Afghanistan" , "Albania" , "Algeria" , "Angola" , "Anguilla" , "Antigua and Barbuda" , "Argentina" , "Armenia" , "Aruba" , "Ascension Islands" , "Australia" , "Austria" , "Azerbaijan" , "Bahamas" , "Bahrain" , "Bangladesh" , "Barbados" , "Belarus" , "Belgium" , "Belize" , "Benin" , "Bermuda" , "Bhutan" , "Bolivia" , "Bosnia and Herzegovina" , "Botswana" , "Brazil" , "British Virgin Islands" , "Bulgaria" , "Burkina Faso" , "Burundi" , "Cameroon" , "Canada" , "Cape Verde" , "Cayman Islands" , "Central African Republic" , "Chad" , "Chile" , "China" , "Colombia" , "Comoros" , "Congo - Democratic Republic of" , "Congo - Republic of" , "Costa Rica" , "Croatia" , "Cyprus" , "Czech Republic" , "Denmark" , "Djibouti" , "Dominica" , "Dominican Republic" , "Ecuador" , "Egypt" , "El Salvador" , "Equatorial Guinea" , "Eritrea" , "Estonia" , "Ethiopia" , "Faroe Islands" , "Finland" , "France" , "Gabon" , "Gambia" , "Georgia" , "Germany" , "Ghana" , "Gibraltar" , "Greece" , "Greenland" , "Grenada" , "Guadeloupe" , "Guatemala" , "Guinea" , "Guinea-Bissau" , "Guyana" , "Haiti" , "Honduras" , "Hong Kong" , "Hungary" , "Iceland" , "India" , "Indonesia" , "Iraq" , "Ireland" , "Israel" , "Italy" , "Ivory Coast" , "Jamaica" , "Japan" , "Jordan" , "Kampuchea" , "Kazakhstan" , "Kenya" , "Korea" , "Kosovo" , "Kuwait" , "Kyrgyzstan" , "Laos" , "Latvia" , "Lebanon" , "Lesotho" , "Liberia" , "Libya" , "Liechtenstein" , "Lithuania" , "Luxembourg" , "Macedonia" , "Madagascar" , "Malawi" , "Malaysia" , "Maldives" , "Mali" , "Malta" , "Martinique" , "Mauritania" , "Mauritius" , "Mayotte" , "Mexico" , "Moldova" , "Monaco" , "Mongolia" , "Montenegro" , "Montserrat" , "Morocco" , "Mozambique" , "Myanmar" , "Namibia" , "Nepal" , "Netherlands" , "Netherlands Antilles" , "New Zealand" , "Nicaragua" , "Niger" , "Nigeria" , "Norway" , "Oman" , "Pakistan" , "Palestinian Territory" , "Panama" , "Paraguay" , "Peru" , "Philippines" , "Poland" , "Portugal" , "Qatar" , "Romania" , "Russia" , "Rwanda" , "Saint Kitts and Nevis" , "Saint Lucia" , "Saint Martin" , "Saint Vincent and The Grenadines" , "Sao Tome and Principe" , "Saudi Arabia" , "Senegal" , "Serbia" , "Seychelles" , "Sierra Leone" , "Singapore" , "Slovakia" , "Slovenia" , "Somalia" , "South Africa" , "Spain" , "Sri Lanka" , "Suriname" , "Swaziland" , "Sweden" , "Switzerland" , "Taiwan" , "Tajikistan" , "Tanzania" , "Thailand" , "Togo" , "Trinidad and Tobago" , "Tunisia" , "Turkey" , "Turkmenistan" , "Turks and Caicos" , "United Kingdom" , "Uganda" , "Ukraine" , "United Arab Emirates" , "United States" , "Uruguay" , "Uzbekistan" , "Venezuela" , "Vietnam" , "Western Sahara" , "Yemen" , "Zambia" , "Zimbabwe" , "Other" ];
   
   $(document).ready(function(){

   for(i=0;i<country.length;i++)
	{
		$("#country").append("<option value='"+country[i]+"'>"+country[i]+"</option>");
	}
   });
   </script>
  </head>
  <body>
  <?php require_once("../inc/header.php"); ?>
  <img src="../img/line.jpg">
  <section id="center" class="clear">
    <article>
     
    
      <h1>Bookings</h1>
      <p>To make your reservation, just provide all your information in the form given below. We'll call you to ensure you have all the details about the car. If you want a quick booking then you can call us on 011 26143188 / 011 26147680 / 9811364428 / 9810621133. You can also send us an email at <strong>info@mohindratourist.com</strong> or <strong>mohindratourist@gmail.com</strong></p>
      <form id="contact-page" method="post" action="https://www.krpl.in/mailer/">
        <fieldset>
          <label for="name">Name</label>
          <input type="text" name="name" id="name" required>
        </fieldset>
        <fieldset>
          <label for="email">Email</label>
          <input type="email" name="email" id="email" required>
        </fieldset>
        <fieldset>
          <label for="phone">Phone</label>
          <input type="text" name="phone" id="phone" required>
        </fieldset>
        <fieldset>
        <label for="country">Country</label>
        <select id="country" name="country">
         <option value="-1" selected disabled>Select a Country</option>
        </select>
        </fieldset>
        <fieldset style="width:100%;">
          <label for="message">Any additional request</label>
          <textarea id="message" name="message"></textarea>
        </fieldset>
        <div class="clear"></div>
        <input type="hidden" id="send_url" name="send_url" value="mohindratourist.com">
        <input type="hidden" id="redirect_url" name="redirect_url" value="http://www.mohindratourist.com">
        <input type="hidden" id="send_email" name="send_email" value="info@mohindratourist.com">
        <input type="hidden" id="send_name" name="send_name" value="Mohindra Tourist">
        <input type="submit" value="Submit">
      </form>
    </article>
    <article>
      <h1>Reach us at</h1>
      <p> <strong>Registered Office</strong> <br>
        Mohindra Tourist Taxi Service<br>
        D-Block Market, Near Modern School<br>
        Poorvi & Paschimi Marg, Block D, Vasant Vihar<br>
        New Delhi, DL 110057 <br>
        <br>
        <u>Phone no</u>: 26143188/ 26147680<br>
        <u>Mobile</u>: 9990080999 / 9811364428 / 9810621133<br>
        <u>Email id</u>: <a href="mailto:info@mohindratourist.com">info@mohindratourist.com</a> / <a href="mailto:mohindratourist@gmail.com">mohindratourist@gmail.com</a> 
    </article>
  </section>
  <?php require_once("../inc/footer.php"); ?>
</body>
</html>
<?php
ob_flush();
?>