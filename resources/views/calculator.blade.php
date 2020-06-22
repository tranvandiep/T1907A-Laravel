<?php
$a = $b = $result = '';
if (!empty($_GET)) {
	$a = $_GET['a'];
	$b = $_GET['b'];

	$result = $a+$b;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Calculator Tutorial</title>
</head>
<body>
	<h1 style="text-align: center;">Calculator Online</h1>
	<form method="get" action="">
		<input type="number" name="a" step="0.1" size="100" placeholder="Enter number a">
		<br><br>
		<input type="number" name="b" step="0.1" size="100" placeholder="Enter number b">
		<br><br>
		Result : <?=$result?>
		<br><br><br>
		<button name="cal" value="+">Tính Tổng</button>
		<button name="cal" value="-">Tính Hiệu</button>
		<button name="cal" value="*">Tính Tích</button>
		<button name="cal" value="/">Tính Thương</button>
	</form>
</body>
</html>