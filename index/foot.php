<?php
require "../lib/connect.php";
$query="select * from address";
$addr=$mysqli->query($query)->fetch_all(MYSQLI_ASSOC);
require '../view/index/foot.html';
