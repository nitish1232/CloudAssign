<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>College Server</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/styles.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body {
	background-color: #0066FF;
	background-image: url(images/back.jpg);
}
-->


<?php

$url="http://54.255.188.77:3000/fetchDetails?userID=".$_GET['userID'];
//echo $url;
$handle = fopen($url, "rb");
$contents = stream_get_contents($handle);
//echo $contents;
$json = json_decode( preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $contents), true );

fclose($handle);
?>
</style></head>
<body>
<div id="container">
  <div id="header">
    <ul class="menu">
      <li class="btn_1"><a href="adminpage.php">home</a></li>
      <li class="line"></li>
	          
      <li class="btn_6"><a href="index.html">logout</a></li>        	
    </ul>
    </div>
  <div id="content">
    <div id="leftPan">
      <div id="welcome">
	  <style>
	      td,th{
			  padding : 5px;
		  }
	  </style>
        <h2>Welcome <?php echo $json['name'];?>..!!</h2>        
        <table style="border : 2px solid black; border-collapse:collapse;">
			<tr><td><h1>USN :</h1></td><td><h2><?php echo $json['uid']; ?></h2></td></tr>
			<tr><td><h1>Name :</h1></td><td><h2><?php echo $json['name']; ?></h2></td></tr>
			<tr><td><h1>Phone :</h1></td><td><h2><?php echo $json['phone']; ?></h2></td></tr>	
			<tr><td><h1>Email :</h1></td><td><h2><?php echo $json['email']; ?></h2></td></tr>	
			<tr><td><h1>AA :</h1></td><td><h2><?php echo $json['aa']; ?></h2></td></tr>
			<tr><td><h1>CC :</h1></td><td><h2><?php echo $json['cc']; ?></h2></td></tr>
			<tr><td><h1>IR :</h1></td><td><h2><?php echo $json['ir']; ?></h2></td></tr>
			<tr><td><h1>WS :</h1></td><td><h2><?php echo $json['ws']; ?></h2></td></tr>
			<tr><td><h1>PM :</h1></td><td><h2><?php echo $json['pm']; ?></h2></td></tr>
		</table>
	
		<br>	<button name="PRINT" value="PRINT" onClick="window.print()"> <h3>PRINT</h3> </BUTTON>
	            
        <div class="clear"></div>
      </div>     
	  </div>
     <div id="rightPan">
      <div id="news">
        <h2></h2>
        <p><span class="headline">20/08/09</span> <a href="#">College Culturals</a></p>
        <p><span class="headline">19/08/09</span> <a href="#">Publishing of 2nd semester exam results</a></p>
      </div>      
    </div>
    <div class="clear" id="end"></div>
  </div>
  <div id="footer">
    <p><a href="#">HOME PAGE</a> | <a href="#">ABOUT</a>  | <a href="#">OUR TEAM</a> | <a href="#">CONTACTS</a><br/>
      Copyright &copy; RANDROID 
  </div>
</div>
</html>
