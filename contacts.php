<?php

require 'connection.php';
$conn    = Connect();
$name    = $conn->real_escape_string($_POST['u_name']);
$email   = $conn->real_escape_string($_POST['u_email']);
$subj    = $conn->real_escape_string($_POST['phone']);
$message = $conn->real_escape_string($_POST['message']);
$query   = "INSERT into contact (u_name,u_email,phone,message) VALUES('" . $name . "','" . $email . "','" . $subj . "','" . $message . "')";
$success = $conn->query($query);

if (!$success) {
    die("Couldn't enter data: ".$conn->error);

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
<title>Contacts</title>
<meta charset="utf-8">
<meta name = "format-detection" content = "telephone=no" />
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico" />
<link rel="stylesheet" href="css/contact-form.css">
<link rel="stylesheet" href="css/style.css">
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/script.js"></script> 
<script src="js/superfish.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.mobilemenu.js"></script>
<script src="js/tmStickUp.js"></script>
<script src="js/jquery.ui.totop.js"></script>
<script src="js/modal.js"></script>

<script>
 $(window).load(function(){
  $().UItoTop({ easingType: 'easeOutQuart' });
  $('#stuck_container').tmStickUp({});  
 }); 
</script>
<!--[if lt IE 8]>
 <div style=' clear: both; text-align:center; position: relative;'>
   <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
     <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
   </a>
</div>
<![endif]-->
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->
</head>

<body class="" id="top">
<!--==============================
              header
=================================-->
<header>
  <div class="container_12">
    <div class="grid_12">
      <h1 class="logo">
        <a href="index.html">
          NEW RELIEF
          <span>Evangelistic Fellowship</span>
        </a>
      </h1>
    </div>
    <div class="clear"></div>
  </div>
  <section id="stuck_container">
  <!--==============================
              Stuck menu
  =================================-->
    <div class="container_12">
        <div class="grid_12">          
          <div class="navigation ">
            <nav>
              <ul class="sf-menu">
               <li><a href="index.html">Home</a></li>
               <li><a href="about.html">About</a></li>
               <li><a href="mission.html">Mission</a></li>
               <li><a href="membership.html">Leaders</a></li>
               <li class="current"><a href="contacts.html">Contacts</a></li>
             </ul>
            </nav>
            <div class="clear"></div>
          </div>       
         <div class="clear"></div>  
     </div> 
     <div class="clear"></div>
    </div> 
  </section>
</header>
<!--=====================
          Content
======================-->
<section id="content"><div class="ic">More Website Templates @ TemplateMonster.com - September22, 2014!</div>
  <div class="container_12">
    <div class="grid_12">
      <h2 class="ta__center">
	 <?php echo "Thank You For Contacting Us <br>";?>
	 <br><br>
        How to Find Us
      </h2>
      <div class="map">
        <figure class="">
	    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3970.861118496033!2d-0.11189273614535405!3d5.587535507394278!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcbc559b0ca8959f!2sStandard+School!5e0!3m2!1sen!2sgh!4v1474387375961" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </figure>
        <p>24/7 support is on for all our <a href="http://www.templatemonster.com/" rel="nofollow" class="color1 fwn">contacts.</a>. </p>
        <p>GFind us on <a href="http://www.templatetuning.com/" rel="nofollow" class="color1 fwn">facebook</a> If you’d like to place an order over the phone or have questions regarding your adidas.com order
8AM ET – 11PM ET, 7 days a week.</p>
        <p>Get us on the following venue and contacts: </p>
        <p>Standard School, Teshie Old Akpanja Road.</p>
        Freephone: +233 54 661 4529 <br>
        Telephone: +233 24 237 0786 <br>
        E-mail: <a href="mailto:newrelieffellowship@gmail.com">newrelieffellowship@gmail.com</a>
      </div>
    </div>
    <div class="clear"></div>
  </div>
  <article class="block-1 contacts ">
    <div class="container_12">
      <div class="grid_12">
        <h3 class="white ta__center">Contact Form</h3>
      </div>
      <div class="clear"></div>
        <form action="contacts.php" method="post" id="contact-form" >
          <div class="contact-form-loader"></div>
          <div class="grid_6">
            <label class="name">
              <input type="text" name="u_name" placeholder="Name:" value="" data-constraints="@Required @JustLetters"  />
              <span class="empty-message">*This field is required.</span>
              <span class="error-message">*This is not a valid name.</span>
            </label>
           
            <label class="email">
              <input type="text" name="u_email" placeholder="E-mail:" value="" data-constraints="@Required @Email" />
              <span class="empty-message">*This field is required.</span>
              <span class="error-message">*This is not a valid email.</span>
            </label>
            <label class="phone">
              <input type="text" name="phone" placeholder="Phone:" value="" data-constraints="@Required @JustNumbers" />
              <span class="empty-message">*This field is required.</span>
              <span class="error-message">*This is not a valid phone.</span>
            </label>
           </div>
           <div class="grid_6">
            <label class="message">
              <textarea name="message" placeholder="Message:" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
              <span class="empty-message">*This field is required.</span>
              <span class="error-message">*The message is too short.</span>
            </label>
            <div>
              <div class="ta__right">
          <a href="#" class="link-1 white" data-type="reset">Clear</a>
          <input type="submit" value="Submit" class="link-1 white"></div>
            </div>
          </div> 
      </form>   
      <div class="clear"></div>
    </div>
  </article>
</section>
<!--==============================
              footer
=================================-->
<footer id="footer">
  <div class="container_12">
    <div class="grid_12"> 
      <h1 class="logo">
        <a href="index.html">
          NEW RELIEF
        </a>
      </h1>
      <div class="socials">
        <a href="https://twitter.com/NewReliefGh" class="fa fa-twitter"></a>
        <a href="https://www.facebook.com/groups/141908082631230/?ref=bookmarks" class="fa fa-facebook"></a>
        <a href="mailto:newrelieffellowship@Gmail.com" class="fa fa-google-plus"></a>
        <a href="https://www.pinterest.com/newreliefgh/" class="fa fa-pinterest"></a>
      </div>
      <div class="sub-copy">&copy; <span id="copyright-year"></span>| <a href="#">Privacy Policy</a> <br> Website designed by <a href="https://www.facebook.com/okangbarbara" rel="nofollow">Okang Alfred</a></div>
    </div>
    <div class="clear"></div>
  </div>  
</footer>
<a href="#" id="toTop" class="fa fa-angle-up"></a>
</body>
</html>
<?php
$conn->close();

?>