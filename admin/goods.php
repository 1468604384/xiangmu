<?php
require '../lib/connect.php';
$type=$_GET['type'];
switch ($type){
    case 'querys'://查询渲染所有数据
//        var_dump($_GET);
        $limit=$_GET['limit'];
        $page=$_GET['page'];
        $offset=($page-1)*$limit;
//        //查询所有数据
        $select="select * from goods";
        $dataTol=$mysqli->query($select)->fetch_all(MYSQLI_ASSOC);
//        //查询当前页的数据
//        $selectIndex="select * from goods limit $offset,$limit";需要多表联合查询
          $selectIndex="select goods.*,category.cname from goods,category where goods.cid=category.cid limit $offset,$limit";

        $result=$mysqli->query($selectIndex);
        $data=$result->fetch_all(MYSQLI_ASSOC);
        if($result){
            echo json_encode([
                'code'=>0,
                'msg'=>'查询成功',
                'count'=>count($dataTol),
                'data'=>$data
            ]);
        }else{
            echo json_encode([
                'code'=>400,
                'msg'=>'查询失败'.$mysqli->error
            ]);
        }
        break;
        //删除数据
    case 'delete':
        $gid=$_GET['gid'];
        $delete="delete from goods where gid=$gid";
        $result=$mysqli->query($delete);
        if($result){
            echo json_encode([
                'code'=>200,
                'msg'=>"删除成功"
            ]);
        }else{
            echo json_encode([
                'code'=>400,
                'msg'=>"删除失败".$mysqli->error
            ]);
        }
        break;
        //点击弹出层渲染数据
    case 'query':
        $gid=$_GET['gid'];
        $queryone="select * from goods where gid='$gid'";
        $result=$mysqli->query($queryone);
        $data=$result->fetch_assoc();
//        var_dump($data);
        if($result){
            echo json_encode([
               'code'=>200,
               'msg'=>"查询成功",
                'data'=>$data
            ]);
        }else{
            echo json_encode([
                'code'=>400,
                'msg'=>"查询失败",
            ]);
        }
        break;
    case'edit':
//        var_dump($_POST);
        $gid=$_POST['gid'];
        $cid=$_POST['cid'];
        $gname=$_POST['gname'];
        $market_price=$_POST['market_price'];
        $gthumb=$_POST['gthumb'];
        $gbanner=$_POST['gbanner'];
        $shop_price=$_POST['shop_price'];
        $stock=$_POST['stock'];
        $content=$_POST['content'];
        $edit="update goods set cid='$cid',gname='$gname',market_price='$market_price',gthumb='$gthumb',gbanner='$gbanner',shop_price='$shop_price',stock='$stock',content='$content' where gid='$gid'";
        $result=$mysqli->query($edit);
        if($result){
            echo json_encode([
                "code"=>"200",
                "msg"=>"修改成功"
            ]);
        }else{
            echo json_encode([
                "code"=>"400",
                "msg"=>"修改失败".$mysqli->error
            ]);
        }
        break;
}