<!DOCTYPE html>
<html>
<head>
	<title>Hello World</title>
</head>
<body>
	<h1>Hello {{ $msg }}!!!</h1>
	{{-- Cung ko nen dung --}}
	<h1>Hello <?=$msg?>!!!</h1>
	<h1>Hello {!! $msgHTML !!}!!!</h1>
<?php
echo $msg;//Tuyet doi ko dung
?>
</body>
</html>