<?php
header('Content-Type: application/json');

$id 	= @$_GET['id'];
$name 	= @$_GET['name'];

echo json_encode(array('flag'=>true, 'msg'=>"Delete success for {$name}"));

die;