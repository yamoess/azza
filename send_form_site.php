

<head>
<style type="text/css">
.auto-style1 {
	font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
	font-size: large;
}
.w3-top{top:0}
.w3-top,.w3-bottom{position:fixed;width:100%;z-index:1}*,*:before,*:after{box-sizing:inherit}
.w3-black,.w3-hover-black:hover{color:#fff!important;background-color:#000!important}
.w3-bar{width:100%;overflow:hidden}
.w3-bar .w3-button{white-space:normal}
.w3-bar .w3-bar-item{padding:8px 16px;float:left;width:auto;border:none;display:block;outline:0}
.w3-right{float:right!important}
.w3-padding-large{padding:12px 24px!important}
.w3-hide-medium{display:none!important}.w3-hide-large{display:none!important}
.w3-btn,.w3-button{-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}   
.w3-btn,.w3-button{border:none;display:inline-block;padding:8px 16px;vertical-align:middle;overflow:hidden;text-decoration:none;color:inherit;background-color:inherit;text-align:center;cursor:pointer;white-space:nowrap}
a{background-color:transparent;-webkit-text-decoration-skip:objects}
.fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}	
.w3-hide-small{display:none!important}
.w3-bar .w3-dropdown-hover,.w3-bar .w3-dropdown-click{position:static;float:left}
.w3-dropdown-click,.w3-dropdown-hover{position:relative;display:inline-block;cursor:pointer}
button,html [type=button],[type=reset],[type=submit]{-webkit-appearance:button}
button,select{text-transform:none}
button,input{overflow:visible}
button,input,select,textarea{font:inherit;margin:0}
.w3-dropdown-content{cursor:auto;color:#000;background-color:#fff;display:none;position:absolute;min-width:160px;margin:0;padding:0;z-index:1}
.w3-bar-block .w3-bar-item{width:100%;display:block;padding:8px 16px;text-align:left;border:none;white-space:normal;float:none;outline:0}
.w3-hide{display:none!important}.w3-content{max-width:980px}
.w3-content,.w3-auto{margin-left:auto;margin-right:auto}
.w3-left{float:left!important}
.w3-padding-64{padding-top:64px!important;padding-bottom:64px!important}
.w3-container,.w3-panel{padding:0.01em 16px}.w3-wide{letter-spacing:4px}
h1,h2,h3,h4,h5,h6{font-family:"Segoe UI",Arial,sans-serif;font-weight:400;margin:10px 0}h2{font-size:30px}
.auto-style2 {
	font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
	font-size: large;
	color: #FFFFFF;
}
.auto-style3 {
	color: #FFFFFF;
}
.auto-style4 {
	color: #800000;
	font-size: medium;
}
.auto-style5 {
	color: #FFFFFF;
	font-size: 15pt;
	background-color: #FF0000;
}
.auto-style7 {
	margin-left: 10px;
}
.auto-style8 {
	color: #FFFFFF;
	font-size: 18pt;
	background-color: #FF0000;
}
.auto-style9 {
	color: #800000;
}
.auto-style10 {
	font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
	font-size: large;
	color: #800000;
}
</style>
<title>YAMO Engineering Support Services</title>
<meta content="YAMO Engineering Support Services" name="description">
<meta content="YAMO, Engineering Services, Procurement, Contracts, Estimation, Tendering, Outsourcing, RFP, Request for Quotation, Material Requisition, Submittals, Purchase Order, Purchase Requisition, Quality Assurance, Quality Control, ITP, IAP, Scheduling, Planning, Value Engineering" name="keywords">
</head>

<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "azharmoinuddin@gmail.com";
    $email_subject = "Message from Website";
 
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please fix these errors and resubmit.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, It appears that the form is not filled correctly...kindly resubmit.');       
    }
 
     
 
    $first_name = $_POST['first_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $comments = $_POST['comments']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
   }
 

  if(strlen($first_name) < 3) {
    $error_message .=  'The Name you entered does not appear to be valid.<br />';
  }
 
   
  if(strlen($comments) < 3) {
  $error_message .=  'The Message is blank ......<br />';
  }
 
  if(strlen($error_message) > 0) {
   died($error_message );
  }
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);
?>
 
<!-- include your own success html here -->
<body style="background-repeat: no-repeat; background-color: #FFFFFF; background-image: url('images/home1.jpg');">

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index.html" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="about.html" class="w3-bar-item w3-button w3-padding-large w3-hide-small">ABOUT</a>
    <a href="services.html" class="w3-bar-item w3-button w3-padding-large w3-hide-small">SERVICES</a>
    <a href="conta.html" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CONTACT</a>
    <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">MORE <i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="notex.html" class="w3-bar-item w3-button">Brochure</a>
        <a href="notex.html" class="w3-bar-item w3-button">Work Procedures</a>
        <a href="notex.html" class="w3-bar-item w3-button">Media</a>
      </div>
    </div>
    <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
  </div>
</div>

<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="about.html" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">ABOUT</a>
  <a href="services.html" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">SERVICES</a>
  <a href="conta.html" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">CONTACT</a>
  <a href="notex.html" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Brochure</a>
</div>

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

  
  <!-- HOME -->
  <div class="w3-container w3-content w3-left w3-padding-64" style="max-width:800px" id="home">
    <h2 class="w3-wide">
	&nbsp;</h2>
  </div>

  </div>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}

</script>

</body>
<p>&nbsp;</p>
<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</strong><span class="auto-style1"><strong>



<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="auto-style3"> </span> 
<span class="auto-style9">&nbsp; Dear sirs </span> <br class="auto-style9">
<span class="auto-style9">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
Thank you for contacting us. </span> <br class="auto-style9">
<span class="auto-style9">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
We will get in touch with you very soon.
</span>
</strong></span></p>
<p><strong>
<br class="auto-style2"/>
    <span class="auto-style3">&nbsp;&nbsp;&nbsp;&nbsp;
    </span>
    </strong>
    <span class="auto-style9"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</strong>
    </span>
    <span class="auto-style10"><strong>Thanks &amp; Best Regards
</strong></span></p>
<p class="auto-style4"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
for YAMO Engineering Support Services</strong></p>
<p class="auto-style7"><strong><span class="auto-style5">&nbsp;</span><span class="auto-style8"><a href="index.html"><span class="auto-style3">Home</span></a></span></strong>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
 
<?php
 
}
?>
