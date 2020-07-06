<!DOCTYPE html>
<html>
<head>
	<title>Author Management</title>
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
				<h2 class="text-center">Author Management</h2>
			</div>
			<div class="panel-body">
				<button class="btn btn-success" onclick="window.open('{{ route('view_add') }}', '_self')">Add Author</button>
				<table class="table table-bordered" style="margin-top: 10px">
					<thead>
						<tr>
							<th>STT</th>
							<th>Nick Name</th>
							<th>Full Name</th>
							<th>Email</th>
							<th>Address</th>
							<th>Phone Number</th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					<tbody>
@foreach ($authorList as $author)
	<tr>
		<td>{{ $index++ }}</td>
		<td>{{ $author->nickname }}</td>
		<td>{{ $author->fullname }}</td>
		<td>{{ $author->email }}</td>
		<td>{{ $author->address }}</td>
		<td>{{ $author->phone_number }}</td>
		<td><button class="btn btn-warning">Edit</button></td>
		<td><button class="btn btn-danger">Delete</button></td>
	</tr>
@endforeach
					</tbody>
				</table>
				{!! $authorList->links() !!}
			</div>
		</div>
	</div>
</body>
</html>