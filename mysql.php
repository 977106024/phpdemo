<?php
$host = 'localhost';
$user = 'root';
$pwd = '';
$dbname = 'php10';

$db = new mysqli($host,$user,$pwd,$dbname);

if($db->connect_errno <> 0){
    echo '链接失败';
    echo $db -> connect_error;
}

$sql = "select * from msg where id > 34";
$mysql_result = $db->query($sql);

// var_dump($mysql_result->fetch_array(MYSQLI_ASSOC));

$arr = [];
while($row = $mysql_result->fetch_array(MYSQLI_ASSOC)){
    $arr[$row['id']] = $row;    
}
var_dump($arr)

// $sql = "insert into msg (content,user,intime) value ('这是php中插入数据','吴',21312321321)";
// $is = $db -> query($sql);
// if($is){
//     echo '插入成功';
// }else{
//     echo '插入失败';
// }

?>