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
  <div id="content">
    <div id="leftPan">
      <div id="welcome">
        <h2>Welcome admin..!!</h2>  
<p><form name="ff" action="addMarks2.php" method="get" enctype="multipart/form-data">
Subject :

<?php	
//echo $_POST['staff'];
$sub="";
if(!strcmp($_GET['subject'],"Advanced Algorithms"))
	$sub = "aa";
else if(!strcmp($_GET['subject'],"Project Management"))
	$sub = "pm";
else if(!strcmp($_GET['subject'],"Cloud Computing"))
	$sub = "cc";
else if(!strcmp($_GET['subject'],"Information Retrieval"))
	$sub = "ir";
else if(!strcmp($_GET['subject'],"Web Services"))
	$sub = "ws";

$url="http://54.255.188.77:3000/fetchMarks?subject=".$sub;
//echo $url;
$handle = fopen($url, "rb");
$contents = stream_get_contents($handle);
//echo $contents;
$json = json_decode( preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $contents), true );
?>	
<br><input type="text" name="subj" readOnly value="<?php  echo strtoupper($sub);?>" style="background:  #aaa; height: 28px;  width:150px;"><br><br>
<input type="text" readOnly name="staff" value="<?php echo $_GET['staff']; ?>" hidden />
<?php	
$i=1;

while($i<=10)
{		
$key = "1RV16SCS".str_pad($i,2,"0",STR_PAD_LEFT);
//echo $json[$key];
?>     		    

USN:
					<input type="text" name = <?php echo "sname_".$i; ?> readOnly value="<?php echo $key; ?>" style="background:  #aaa; height: 28px;  width:150px;">
					 
					
                    <!--Department:
					<br>
					<select name='dept' style="background:  #aaa; height: 28px;  width:250px;">
					<option value='civil'>CIVIL</option>
					<option value='eee'>EEE</option>
					<option value='cse'>CSE</option>
					<option value='it'>IT</option>
					<option value='mech'>MECH</option>
					</select>
					<br><br>-->
					<!--<br><input type="text" name="dept"  style="background:  #aaa; height: 28px;  width:250px;"><br><br>-->
				    <!--Subject:
					<br><input type="text" name="subj"  style="background:  #aaa; height: 28px;  width:250px;"><br><br>-->
					Marks:<input type="text" name=<?php echo "marks_".$i; ?> value="<?php echo $json[$key]; ?>"  style="background:  #aaa; height: 28px;  width:150px;"><br><br>
                    <div style="margin-left: 3px;">  
                        
             
<?php $i++;} ?>
<input type="submit" value="Save" style="background-color: green; width: 80px; height: 30px; border: 4px; font-weight: bold;">&nbsp;&nbsp;&nbsp;
</form>
                    <!--<input type="reset" value="Clear" style="background-color: red; height: 30px; width: 80px; border: 4px; font-weight: bold;"></div></p>-->
					<input type="button" value="Change Subject" onClick="window.location='adminpage2.php'" style="background-color: green; height: 30px; border: 4px; font-weight: bold;"></div></p>
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
