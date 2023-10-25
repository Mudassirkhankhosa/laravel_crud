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
				<h2 class="bg-primary p-3  text-center text-white">
				Insert data</h2>
				<button class="btn btn-success float-right">
					<form method="post" enctype="multipart/form-data"  action="/update/{{$record->id}}">
						@csrf
						@method('put')
						
					<a href="/" class="text-decoration-none text-white ">Details</a></button>
					<label class="mt-3">Product-Name</label>
					<input type="text" name="pname" class="form-control" value="{{$record->name}}">
					Description<textarea name="description" class="form-control" value="">
						{{$record->description}}
					</textarea>
					<label>Image</label>
					<img src="{{ asset('uploads/'.$record->image) }}" width="80px">
					<input type="file" name="image" class="form-control"
		value="{{$record->image}}">

			
					<button type="submit" class="btn btn-success mt-4 col-6">Update</button>
</form>

			</div>
	</body>
</html>