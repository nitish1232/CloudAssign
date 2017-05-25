<?php

$arr['data'] = array();
$arr['data'][] = array('id'=>1, 'name'=> 'nits');
$arr['data'][] = array('id'=>123, 'name'=> 'nitshh');


$arr2=json_encode($arr);
$arr3 = json_decode($arr2);
echo $arr['data'][0]['id'];


?>