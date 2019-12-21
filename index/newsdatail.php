<?php
require "../lib/connect.php";
$nid=$_GET['nid'];
$data=$mysqli->query("select * from news where nid='$nid' ")->fetch_assoc();
//var_dump($data);
//当前
$know=$mysqli->query("select * from  news where nid=$nid")->fetch_assoc();
//上一页
$pre=$mysqli->query("select * from news where nid<$nid order by nid desc")->fetch_all(MYSQLI_ASSOC);
if($pre){
    $preId=$pre[0]['nid'];
    $preTitle=$pre[0]['ntitle'];
}
//下一篇
$next=$mysqli->query("select * from news where nid>$nid order by nid asc")->fetch_all(MYSQLI_ASSOC);
if($next){
    $nextId=$next[0]['nid'];
    $nextTitle=$next[0]['ntitle'];
}
require 'header.php';
require '../view/index/xinwenxiangqing.html';
require 'foot.php';