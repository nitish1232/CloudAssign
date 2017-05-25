<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>College Server</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/styles.css" rel="stylesheet" type="text/css" />
<script>
    function check(){
        var a = document.ff.user.value;
        var b = document.ff.pass.value;
        var c = "admin";
   
         if(a==0){
            alert('Please Enter UserId..!');
            return false;
            document.getElementById("name").focus();            
        } if(b==0){
            alert('Please Enter Password..!');
            return false;
            document.getElementById("pass").focus();            
        } 
  
 }
</script>    
<style type="text/css">
<!--
body {
	background-color: #0066FF;
	background-image: url(images/back.jpg);
}
-->
</style>
</head>
<body>
<div id="container">
  <div id="header">
    <ul class="menu">
      <li class="btn_1"><a href="index.html">home</a></li>
      <li class="line"></li>
      <li class="btn_2"><a href="about.php">about</a></li>
      <li class="line"></li>
      
    </ul>
    </div>
  <div id="content">
  <h2 style="margin-top:50px">Member Login..!!<h2/>
    <div id="leftPan">
      <form action="login.php" name="ff"  method="post" onsubmit="return check()">
                   <h2><span> User Id</span></h2><br><input type="text" name="userID" id="user" style="background:  #aaa; height: 28px;  width:250px;"><br><br><br>
                   <h2><span>Password</span></h2><br><input type="password" name="password" id="pass" style="background:  #aaa; height: 28px;  width:250px;"><br><br>
                   
                   
                    <div style="margin-left: 30px;">  
                        <input type="submit" value="Login" style="background-color: #7FFF00; width: 80px; height: 30px; border: 4px; font-weight: bold;">&nbsp;&nbsp;&nbsp;
                    </form>
                    <input type="reset" value="Clear" style="background-color: blue; height: 30px; width: 80px; border: 4px; font-weight: bold;"></div>
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
    <p><a href="#">HOME PAGE</a> | <a href="#">ABOUT</a> | <a href="#">OUR TEAM</a> | <a href="#">CONTACTS</a><br/>
      Copyright &copy; RANDROID </p>
  </div>
</div>
</html>
