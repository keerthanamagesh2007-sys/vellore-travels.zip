<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<?php include'includes/meta.txt'; ?>
<?php include'includes/css.txt'; ?>
 <script src="https://www.google.com/recaptcha/api.js"></script>

<title>vellore travels - Contact Us, Yelagiri, Amrithi Forest, hotels in vellore, vellore hotel, atm in vellore, vellore atm centre, banks in vellore, vellore banks, colleges, college in vellore  </title>
</head>

<body id="contact">
<div class="wrap"> 
<?php include'includes/header.php'; ?>
<?php include'includes/menu.php'; ?>

<div class="grid4">
<?php include'includes/left.php'; ?>
<div class="grid6">
<div class="contents">
<h1>Contact <span>Us</span></h1>

<form name="cntctus" method="post" action="mail.php" onsubmit="return ValidateForm12();">
         <!-- <input name="subject" type="hidden" value="[Contact Us] Vellore Travels">
          <input name="_redirect" type="hidden" value="www.velloretravels.com">
          <input name="To" type="hidden" value="admin@vellorecity.com">-->
          <table border="0" cellpadding="0px" cellspacing="5" class="contact-us">
            <tr>
              <td height="26" colspan="2" class="mandatory"><span style="color:#cc0000">* Mandatory Fields</span></td>
            </tr>
            <tr>
              <td width="236" height="26" align="right"><span class="red">*</span> Name :</td>
              <td width="355" height="26"><input type="text" id="FullName" name="FullName" size="28" class="textfield" required></td>
            </tr>
            <tr>
              <td width="236" height="51" align="right" valign="top"> Address :</td>
              <td width="355" height="51"><textarea rows="3" name="Address" cols="24" class="list-selectfield" required></textarea></td>
            </tr>
            <tr>
              <td width="236" height="22" align="right">City :</td>
              <td width="355" height="22"><input type="text" name="City" size="20" class="textfield" required></td>
            </tr>
            <tr>
              <td width="236" height="25" align="right">Pin Code / 
                Zip Code :</td>
              <td width="355" height="25"><input type="text" name="Zip_Code" size="8" class="textfield" required></td>
            </tr>
            <tr>
              <td width="236" height="22" align="right"><span class="red">*</span> Phone No :</td>
              <td width="355" height="22"><input type="text" id="PhoneNo" name="PhoneNo" size="14" class="textfield" required></td>
            </tr>
            <tr>
              <td width="236" height="22" align="right"><span class="red">*</span> Email :</td>
              <td width="355" height="22"><input type="text" name="Email" size="29" class="textfield" required></td>
            </tr>
            <tr>
              <td width="236" height="51" align="right" valign="top"><span class="red">*</span>Comments :</td>
              <td width="355" height="51"><textarea rows="6" name="Comments" cols="31" class="list-selectfield " required></textarea></td>
            </tr>
            <tr>
            <td>&nbsp;</td>
                        <td colspan="2">
            <div class="g-recaptcha" data-sitekey="6LdZyZwUAAAAAJ5mYjNVs5ONEJIAylQxEmkmeL79"></div>
            </td>
            </tr>
            <tr>
              <td width="236" height="24" align="right"></td>
              <td width="355" height="24"><input type="Submit" value=" Send " class="button bg-color1 ui-corner-all">
                &nbsp;&nbsp;
                <input type="reset" value="Clear" class="button bg-color1 ui-corner-all">
              </td>
            </tr>
          </table>
        </form>
        <script type="text/javascript">
  function ValidateForm12()
  {
    if (typeof ContactCheck === "function") {
      if (!ContactCheck()) {
        return false;
      }
    }
    var captcha_response = grecaptcha.getResponse();
    if(captcha_response.length == 0)
    {
      alert("Please solve the Captcha.");
      return false;
    }
    return true;
  }
  </script>

<br />

</div>
 </div>
<?php include'includes/right.php'; ?>
<div class="clr"></div>
</div>
<?php include'includes/footer.php'; ?>
<div class="clr"></div>
</div>
</body>
</html>
<script src="js/js.js" type="text/javascript"></script>
