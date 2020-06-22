<!DOCTYPE html>
<html>
<head>
	<title>Edit Student</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-body">
				<form method="post" action="{{ route('student_update') }}">
					{{ csrf_field() }}
					<div class="form-group">
						<label>Full Name</label>
						<input type="text" name="fullname" class="form-control" value="{{ ($student != null)?$student->fullname:'' }}">
						<input type="text" name="id" style="display: none;" value="{{ $id }}">
					</div>
					<div class="form-group">
						<label>Age</label>
						<input type="number" name="age" class="form-control" value="{{ ($student != null)?$student->age:'' }}">
					</div>
					<div class="form-group">
						<label>Address</label>
						<input type="text" name="address" class="form-control" value="{{ ($student != null)?$student->address:'' }}">
					</div>
					<button class="btn btn-success">Save</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>