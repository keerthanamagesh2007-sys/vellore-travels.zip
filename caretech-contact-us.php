<!doctype html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="">
<!--<![endif]-->
<head>
<?php include 'includes/meta.txt'; ?>
<title>Contact Us -  Caretech Systems | Best desktop service in chennai | Laptop Service center in chennai |caretech sytem in anna nagar | CCTV Camera Service center | UPS Service center | Printer Service center |  Annual Maintenance Contract</title>
<?php include 'includes/css.txt'; ?>
<script language="Javascript" type="text/javascript">
 
        function onlyAlphabets(e, t) {
            try {
                if (window.event) {
                    var charCode = window.event.keyCode;
                }
                else if (e) {
                    var charCode = e.which;
                }
                else { return true; }
                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123))
                    return true;
                else
                    return false;
            }
            catch (err) {
                alert(err.Description);
            }
        }
 
    </script>

<script>
function validate(evt) {
  var theEvent = evt || window.event;
  var key = theEvent.keyCode || theEvent.which;
  key = String.fromCharCode( key );
  var regex = /[0-9]|\./;
  if( !regex.test(key) ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}
</script>
</head>
<body  class="s6">
<?php include 'includes/header.php'; ?>
<div class="page-content">
  <!-- Banner Section -->
  <div id="page-banner-section" class="page-banner-section container-fluid p_z"> <img src="images/contactus.jpg" >
    <!-- Banner Inner -->
    <div class="page-title">
      <div class="container ">
        <div class="banner-inner">
          <h2>Contact Us</h2>
        </div>
      </div>
      <div class="pages-breadcrumb">
        <div class="container">
          <!-- Page breadcrumb -->
          <ol class="breadcrumb page-breadcrumb pull-right">
            <li><a href="#">Home</a></li>
            <li class="active">Contact Us</li>
          </ol>
        </div>
      </div>
    </div>
    <!-- Banner Inner /- -->
  </div>
  <!-- Banner Section /- -->
  <div id="contact-detail" class="contact-detail">
    <div class="container">
      <!-- contact-address-section -->
      <div class="col-md-5 col-sm-12 col-xs-12">
        <div class="contact-logo-box"> <img src="images/logo.png" alt="logo" height="30px"> </div>
        <div class="contact-address">
          <p> <i class="fa fa-map-marker"></i> <span> # AH 30/256, Ground Floor, 7th Main road, Shanthi Colony, <br>
Anna Nagar, Chennai - 600040, Tamil Nadu, India.</span> </p>
        
          <p> <i class="fa fa-mobile"></i> <span> +91 95000 69233 / +91 95001 08481</span> </p>
          <p> <i class="fa fa-phone"></i> <span> 044-43589797</span> </p>
          <p> <i class="fa fa-envelope-o"></i> <a title="mailto" href="mailto:caretechsystems4u@gmail.com">caretechsystems4u@gmail.com</a> </p>
        </div>
        
      </div>
      <!---contact-address-section/- -->
      <!-- contact-feedback-form-section -->
      <div class="col-md-7 col-sm-6 col-xs-12">
        <div class="contact-feedback-form">
          <h3>Send us a message</h3>
          <form method="post">
            <div class="col-md-12 col-xs-12">
              <input  placeholder="Your Name" type="text" name="name" id="name"  onKeyPress="return onlyAlphabets(event,this);"  required />
            </div>
            <div class="col-md-12 col-xs-12">
              <input  placeholder="Your Mobile" type='text' name="mobile" id="mobile" onkeypress='validate(event)' pattern="^(?:\(\d{3}\)|\d{3})[- ]?\d{3}[- ]?\d{4,6}$" required />
            </div>
			<div class="col-md-12 col-xs-12">
              <input placeholder="Your Email " type="text" name="email" id="email" pattern="^[^@]+@[^@]+\.[a-zA-Z]{2,3}$"  required />
            </div>
            <div class="col-md-12 col-xs-12">
              <textarea rows="3" placeholder="Message" name="message" id="message" required></textarea>
            </div>
            <div class="col-md-12 col-xs-12">
              <input  id="btn_smt" type="submit" name="submit" onClick="return ValidateForm();"  value="Submit" >
            </div>
            
          </form>
		  <?php if(isset($_POST["submit"]))
              {
              
              $name = $_POST["name"];
              $phone = $_POST["mobile"];
                $email = $_POST["email"];
              $message = $_POST["message"];
              
              
            $subject = " Enquiry from Caretech Systems";
              
                
$mail=mail("deivakanni@jbcs.co.in",
"$subject",
"Name : $name\r\n
Phone : $phone\r\n
Email : $email\r\n
Message : $message","From: $email, \r\nBcc:  support@jbsoft.in\r\n\r\n");
                if($mail)
            {
              echo "<div style='text-align:center; color:#3594D9;width:100%;'>Your Message has been submitted successfully.</div>";
              }}
            ?>
        </div>
      </div>
      <!-- contact-feedback /- -->
      <div class="contact-address row-border">
        <div class="col-md-12 col-sm-12 p_l_z">
          <h3>Route map</h3>
		  <iframe src="https://www.google.com/maps/d/embed?mid=1ya3DIwYtk_z_MdE27nl4jQItrhA" width="100%" height="300"></iframe>
        </div>
      </div>
    </div>
    <!-- container /- -->
  </div>
</div>
<?php include 'includes/footer.php'; ?>
<?php include 'includes/js.txt'; ?>
</body>
</html>
