<?php
$mysqli=new mysqli('localhost','root','990322','games');
if($mysqli->connect_error){
    echo json_encode([
        "code"=>400,
        "msg"=>"链接失败".$mysqli->connect_error
    ]);
}
$mysqli->query('set names utf8')
?>