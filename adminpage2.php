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
<?php 

$url="http://54.255.188.77:3000/getSubjects?staff=".$_GET['staff'];
//echo $url;
//echo $_GET['staff'];

//$_POST['staff'] = $_GET['staff'];//echo $_POST['staff'];
$handle = fopen($url, "rb");
$contents = stream_get_contents($handle);
$json = json_decode( preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $contents), true );

?>
  <div id="content">
    <div id="leftPan">
      <div id="welcome">
        <h2>Welcome admin..!!</h2>        
        <p><form name="ff" action="adminpagetrial.php" method="get" enctype="multipart/form-data">
                    <input type="text" readOnly name="staff" value="<?php echo $_GET['staff']; ?>" hidden />
                    Select Subject:
					<br>
					<select name='subject' style="background:  #aaa; height: 28px;  width:250px;">
					<?php
					      
					      for($i=1;$i<=$json['count'];$i++)
{
	                      $sub = "sub_".$i;	                
					?>
					<option value="<?php echo $json[$sub]; ?>"> <?php echo $json[$sub];  ?> </option>
					<?php } 
					?>
					</select>
					<br><br>
                    <div style="margin-left: 3px;">  
                        <input type="submit" value="NEXT" style="background-color: green; width: 80px; height: 30px; border: 4px; font-weight: bold;">&nbsp;&nbsp;&nbsp;
                    </form>
                    <!--<input type="reset" value="Clear" style="background-color: red; height: 30px; width: 80px; border: 4px; font-weight: bold;"></div></p>-->
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
