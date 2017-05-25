<?php
$url="http://54.255.188.77:3000/login?userID=".$_POST['userID']."&password=".$_POST['password'];
//$url = "http://localhost:3000/fetchSubjects";
//echo $url;
$handle = fopen($url, "rb");
$contents = stream_get_contents($handle);
//echo $contents;
$json = json_decode( preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $contents), true );
//echo $json;
$pro = $json['profile'];
//echo $pro;
//echo $json['status'];

if($json['status'])
{
		if(!strcmp($pro,"a"))
			header("Location: adminpage4.php");
		else if(!strcmp($pro,"st"))
			header("Location: adminpage2.php?staff=".$_POST['userID']);
		else
			header("Location: adminpage3.php?userID=".$_POST['userID']);
}
else
	echo "ERROR ";

fclose($handle);

?>