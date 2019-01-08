<?php
header("Access-Control-Allow-Origin:http://10.30.29.73:63341");
header("Access-Control-Allow-Credentials:true");
header('Access-Control-Allow-Headers:Content-Type');

$str=file_get_contents('php://input');

$username=json_decode($str)->userName;
$password=json_decode($str)->passWord;

if($username == '123' && $password == '123'){
    $data = [
        'message' =>'success'
    ];
}else{
    $data = [
        'message' =>'error'
    ];
}
echo json_encode($data);
?>