<?php
   require_once('config.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Weaves4mitsubishi</title>
<script src="<?php echo ROOT_DIR ?>js/jquery-3.1.0.min.js"></script>
<script src="<?php echo ROOT_DIR ?>js/bootstrap.min.js"></script>
<link href="<?php echo ROOT_DIR ?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo ROOT_DIR ?>css/style.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid sec1">
<div class="container sec1_head">
<div class="row">
<div class="col-md-5">
<img class="img-responsive" src="image/1.png" />

</div>
<div class="col-md-7">

<ul class="topnav" id="myTopnav">

  <li class="active"><a href="#">Home</a></li>
        <li><a href="#">about us</a></li>
        <li><a href="#">services </a></li>
        <li><a href="#">product</a></li>
        <li><a href="#">rental services</a></li>
          <li><a href="#">contact us</a></li>
 
  <li class="icon">
    <a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()">☰</a>
  </li>
</ul>
</div>
</div>
</div>
</div>
<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}

</script>
