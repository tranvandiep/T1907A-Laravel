<!DOCTYPE html>
<html>
<head>
	<title>Add New Book</title>
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
				<h2 class="text-center">Add New Book</h2>
			</div>
			<div class="panel-body">
				<form method="post" action="{{ route('post_add_book') }}">
					<div class="form-group">
						{{ csrf_field() }}
					  <label for="nickname">Nick Name:</label>
					  <select required="true" class="form-control" name="nickname">
					  	<option value="">-- Choose Author --</option>
					  	@foreach ($authorList as $author)
					  		<option value="{{ $author->nickname }}">{{ $author->fullname }}</option>
					  	@endforeach
					  </select>
					</div>
					<div class="form-group">
					  <label for="title">Title:</label>
					  <input required="true" type="text" class="form-control" id="title" name="title">
					</div>
					<div class="form-group">
					  <label for="price">Price:</label>
					  <input type="number" class="form-control" id="price" name="price">
					</div>
					<div class="form-group">
					  <label for="nxb">NXB:</label>
					  <input required="true" type="text" class="form-control" id="nxb" name="nxb">
					</div>
					<div class="form-group">
					  <label for="content">Content:</label>
					  <textarea class="form-control" name="content" rows="3"></textarea>
					</div>
					<button class="btn btn-success">Save</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>