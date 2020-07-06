<!DOCTYPE html>
<html>
<head>
	<title>Add New Author</title>
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
				<h2 class="text-center">Add New Author</h2>
			</div>
			<div class="panel-body">
				<form method="post" action="{{ route('post_add_author') }}">
					<div class="form-group">
						{{ csrf_field() }}
					  <label for="nickname">Nick Name:</label>
					  <input required="true" type="text" class="form-control" id="nickname" name="nickname">
					</div>
					<div class="form-group">
					  <label for="fullname">Fullname:</label>
					  <input required="true" type="text" class="form-control" id="fullname" name="fullname">
					</div>
					<div class="form-group">
					  <label for="email">Email:</label>
					  <input type="email" class="form-control" id="email" name="email">
					</div>
					<div class="form-group">
					  <label for="address">Address:</label>
					  <input required="true" type="text" class="form-control" id="address" name="address">
					</div>
					<div class="form-group">
					  <label for="phone_number">Phone Number:</label>
					  <input required="true" type="tel" class="form-control" id="phone_number" name="phone_number">
					</div>
					<button class="btn btn-success">Register</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>