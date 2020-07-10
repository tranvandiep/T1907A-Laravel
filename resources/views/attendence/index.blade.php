<!DOCTYPE html>
<html>
<head>
	<title>Today - Điểm Danh</title>
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
				<h2 class="text-center">Today Điểm Danh</h2>
			</div>
			<div class="panel-body">
				<table class="table table-bordered">
					<thead>
						<th>STT</th>
						<th>Lớp Học</th>
						<th>Giáo Viên</th>
						<th>Môn Học</th>
						<th>Điểm Danh</th>
						<th>Thống Kê</th>
					</thead>
					<tbody>
@foreach ($lichdayToday as $item)
<tr>
	<td>{{ $index++ }}</td>
	<td>{{ $item->class_name }}</td>
	<td>{{ $item->teacher_name }}</td>
	<td>{{ $item->subject_name }}</td>
	<td><button class="btn btn-warning" onclick="window.open('{{ route('attendence_view') }}?id={{ $item->id }}', '_self')">Điểm Danh</button></td>
	<td><button class="btn btn-success">Thống Kê</button></td>
</tr>
@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>