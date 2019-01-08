<?php
header("Access-Control-Allow-Origin:http://10.30.29.73:63341");
header("Access-Control-Allow-Credentials:true");
header('Access-Control-Allow-Headers:Content-Type');


$array=array("userName"=>"111111111");
echo json_encode($array);
?>
