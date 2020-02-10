<?php
	$conn=mysqli_connect('localhost','root','abcdef');
	if($conn) {
    		echo 'link ok';
    	}else {
    		echo 'error';
    	}
		
		$sele=mysqli_select_db( $conn,"mydb" );
		if(!$sele){  
    	die("连接数据库失败: ".mysql_error());//连接数据库失败退出程序  
		}else{
			echo '成功';
		}
		$runf = $_GET["fname"];
		$runa = $_GET["age"];
 
$sql = "INSERT INTO pl ".
        "(id,comment) ".
        "VALUES ".
        "('$runf','$runa')";
 
 
 
mysqli_select_db( $conn,"mydb"  );
$retval = mysqli_query( $conn, $sql );
if(! $retval )
{
  die('无法插入数据: ' . mysqli_error($conn));
}
echo "数据插入成功\n";
mysqli_close($conn);
?>