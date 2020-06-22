<!DOCTYPE html>
<html>
<head>
	<title>Student List</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		function deleteStudent(id) {
			$.post("{{ route('student_delete') }}",
			  {
			    _token: $('[name=_token]').val(),
			    id: id
			  },
			  function(data, status){
			  	console.log(data)
			  	location.reload()
			  });
		}
	</script>
</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				Student Management
				{{ csrf_field() }}
			</div>
			<div class="panel-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Full Name</th>
							<th>Age</th>
							<th>Address</th>
							<th width="50px"></th>
							<th width="50px"></th>
						</tr>
					</thead>
					<tbody>
						@foreach ($students as $item)
							<tr>
								{{-- <td>{{ $key + 1 }}</td>
								<td>{{ $item['fullname'] }}</td>
								<td>{{ $item['age'] }}</td>
								<td>{{ $item['address'] }}</td> --}}
								<td>{{ $index++ }}</td>
								<td>{{ $item->fullname }}</td>
								<td>{{ $item->age }}</td>
								<td>{{ $item->address }}</td>
								<td><a href="{{ route('student_edit') }}?id={{ $item->id }}"><button class="btn btn-warning">Edit</button></a></td>
								<td><button onclick="deleteStudent({{ $item->id }})" class="btn btn-danger">Delete</button></td>
							</tr>
						@endforeach
					</tbody>
				</table>
				{{ $students->links() }}
			</div>
		</div>
	</div>
</body>
</html>