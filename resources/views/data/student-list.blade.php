<!DOCTYPE html>
<html>
<head>
	<title>Danh sach sinh vien</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Danh sach sinh vien</h2>
			</div>
			<div class="panel-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>STT</th>
							<th>Ho & Ten</th>
							<th>Tuoi</th>
							<th>Dia Chi</th>
						</tr>
					</thead>
					<tbody>
<?php
/**foreach ($studentList as $std) {
echo `<tr>
<td>1</td>
<td>` .$std['fullname'].`</td>
<td>` .$std['age'].`</td>
<td>` .$std['address'].`</td>
</tr>`;
}*/
?>
					@php
						$index = 1;
					@endphp
					@foreach ($studentList as $std)
						<tr>
							<td>{{ $index++ }}</td>
							<td>{{ $std['fullname'] }}</td>
							<td>{{ $std['age'] }}</td>
							<td>{{ $std['address'] }}</td>
						</tr>
					@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>