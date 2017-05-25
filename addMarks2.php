<?php

$input = array();
$uname="";
$input['subj']=$_GET['subj'];
for($i=1;$i<=10;$i++)
{
	$uname = "1RV16SCS".str_pad($i,2,"0",STR_PAD_LEFT);
	$value = "marks_".$i;
	$input[$uname] = $_GET[$value];	
}
$json_object = json_encode($input);
//echo $json_object;

$url="http://54.255.188.77:3000/updateMarks?obj=".$json_object;
//$ch=curl_init();
//curl_setopt($ch,CURLOPT_URL,$url.$json_object);
//curl_setopt($ch,CURLOPT_RETURNTRANSFER);
//curl_setopt($ch,CURLOPT_HTTPHEADER,['Content-Type: application/json']);
//curl_exec($ch);


$handle = fopen($url, "rb");
$contents = stream_get_contents($handle);
$json = json_decode( preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $contents), true );
if($json['status'])
	header("Location: adminpage2.php?staff=".$_GET['staff']);
else
	echo "AYYAYYOOOOOO";
?>