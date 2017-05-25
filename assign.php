<?php
$sub="";
if(!strcmp($_POST['sub'],"Advanced Algorithms"))
	$sub = "aa";
else if(!strcmp($_POST['sub'],"Project Management"))
	$sub = "pm";
else if(!strcmp($_POST['sub'],"Cloud Computing"))
	$sub = "cc";
else if(!strcmp($_POST['sub'],"Information Retrieval"))
	$sub = "ir";
else if(!strcmp($_POST['sub'],"Web Services"))
	$sub = "ws";
$url="http://54.255.188.77:3000/addSubject?staff=".$_POST['staff']."&sub=".$sub;
$handle = fopen($url, "rb");
$contents = stream_get_contents($handle);
$json = json_decode( preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $contents), true );

if($json['status'])
	header("Location: adminpagetrial2.php?staff=".$_POST['staff']);
else
	echo "Something Problem";

?>