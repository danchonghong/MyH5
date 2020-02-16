<?php
	
	header('content-type:text/html;charset="utf-8"');
	$conn=mysqli_connect('localhost','root','abcdef');
	$username=$_POST['username'];
	$age=$_POST['age'];
	
	echo "你的名字：{$username}年零{$age}";
 
$sql = "INSERT INTO pl ".
        "(id,comment) ".
        "VALUES ".
        "('$username','$age')";
mysqli_select_db( $conn,"mydb"  );
$retval = mysqli_query( $conn, $sql );
if(! $retval )
{
  die('无法插入数据: ' . mysqli_error($conn));
}
echo "数据插入成功\n";
mysqli_close($conn);

	
?>