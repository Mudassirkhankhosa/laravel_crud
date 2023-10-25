<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Page Title</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	</head>
	<body>
			<div class="container">
				<h2 class="bg-primary p-3 text-center text-white">Laravel Crud</h2>
<button class="btn btn-success float-right">
					<a href="/create" class="text-decoration-none text-white p-2">Insert</a></button>
					<table class="table table-hover table-inverse">
						<thead>
							<tr>
								<th>Id</th>

								<th>Product-name</th>
								<th>Description</th>
								<th>Images</th>
								<th>Action</th>


							</tr>
						</thead>
						<tbody>

							<tr>
								@foreach ($products as $element)
									{{-- expr --}}
								
								<td>{{$element->id}}</td>
								<td>{{$element->name}}</td>
								<td>{{$element->description}}</td>
								<td><img src="{{asset('uploads/'.$element->image)}}" width="50px"></td>
								<td>
									<button class="btn btn-success">
										<a href="/edit/{{$element->id}}" class="text-decoration-none text-white">Update</a>
									</button>
									<button class="btn btn-danger">
										<a href="/delete/{{$element->id}}" class="text-decoration-none text-white">Delete</a>
									</button>
								</td>

							</tr>
						</tbody>
					@endforeach

					</table>
					 <td class="bg-primary text-white text-center">{{ session ('message') }}</td>

			</div>
		</body>
</html>