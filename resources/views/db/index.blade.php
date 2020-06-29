<!DOCTYPE html>
<html>
<head>
	<title>User List</title>
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
				<h2 class="text-center">User Manager</h2>
			</div>
			<div class="panel-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>STT</th>
							<th>Name</th>
							<th>Email</th>
							<th>Birthday</th>
							<th>Password</th>
							<th>Address</th>
							<th width="50px"></th>
							<th width="50px"></th>
						</tr>
					</thead>
					<tbody>
@foreach ($userList as $item)
	<tr>
		<td>{{ $item->id }}</td>
		<td>{{ $item->name }}</td>
		<td>{{ $item->email }}</td>
		<td>{{ $item->birthday }}</td>
		<td>{{ $item->password }}</td>
		<td>{{ $item->address }}</td>
		<td><button class="btn btn-warning">Edit</button></td>
		<td><button class="btn btn-danger">Delete</button></td>
	</tr>
@endforeach
					</tbody>
				</table>
				{!! $userList->links() !!}
			</div>
		</div>
	</div>
</body>
</html>