<?php 
$link = mysqli_connect("127.0.0.1", "root", "","CarShopEscapi");
if ($link == false){
	 // print "ошибка: невозможно подключится к MySQL" ;
	 die("ошибка: невозможно подключится к MySQL" );
}
else {
	print "соединение установлено успешно";
	echo ("соединение установлено успешно");
}
?>