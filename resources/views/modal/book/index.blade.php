<!DOCTYPE html>
<html>
<head>
	<title>Book Management</title>
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
				<h2 class="text-center">Book Management</h2>
			</div>
			<div class="panel-body">
				<button class="btn btn-success" onclick="window.open('{{ route('view_add_book') }}', '_self')">Add Book</button>
				<table class="table table-bordered" style="margin-top: 10px">
					<thead>
						<tr>
							<th>STT</th>
							<th>Title</th>
							<th>NickName</th>
							<th>Fullname</th>
							<th>Price</th>
							<th>NXB</th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					<tbody>
@foreach ($bookList as $book)
	<tr>
		<td>{{ $index++ }}</td>
		<td>{{ $book->title }}</td>
		<td>{{ $book->nickname }}</td>
		<td>{{ $book->fullname }}</td>
		<td>{{ number_format($book->price) }}</td>
		<td>{{ $book->nxb }}</td>
		<td><button class="btn btn-warning">Edit</button></td>
		<td><button class="btn btn-danger">Delete</button></td>
	</tr>
@endforeach
					</tbody>
				</table>
				{!! $bookList->links() !!}
			</div>
		</div>
	</div>
</body>
</html>