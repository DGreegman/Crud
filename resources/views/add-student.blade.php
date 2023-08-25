<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Add Student</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>
		<div class="container">
				<div class="row p-4 mt-5">
						<div class="col-md-7 offset-2">
							<div class="card p-4">
								@if (Session::has('success'))
									<div class="alert alert-success" role="alert">
										{{Session::get('success')}}
									</div>
								@endif
									<h4 class="card-title text-center">Add Student</h4>
									<form method="post" action="{{url('save-student')}}">
										@csrf
										<div class="row mb-3">
											<label for="name" class="col-sm-2 col-form-label">Name</label>
											<div class="col-sm-10">
												<input type="text" name="name" placeholder="Enter Name" value="{{old('name')}}" class="form-control" id="name">
												<span style="color: red;">@error('name'){{$message}}@enderror</span>
											</div>
											
										</div>
										<div class="row mb-3">
											<label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
											<div class="col-sm-10">
												<input type="email" class="form-control" value="{{old('email')}}" name="email" placeholder="Enter Email" id="inputEmail3">
												<span style="color: red;">@error('email'){{$message}}@enderror</span>
											</div>
										</div>
										<div class="row mb-3">
											<label for="phone" class="col-sm-2 col-form-label">Phone</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" value="{{old('phone')}}" name="phone" id="phone" placeholder="Enter Phone Number">
												<span style="color: red;">@error('phone'){{$message}}@enderror</span>
											</div>
										</div>
										<div class="row mb-3">
											<label for="address" class="col-sm-2 col-form-label">Address</label>
											<div class="col-sm-10">
												<textarea  name="address" id="address" cols="30" rows="2" class="form-control" placeholder="Enter Phone Address" >{{old('address')}}</textarea>
												<span style="color: red;">@error('address'){{$message}}@enderror</span>
											</div>
										</div>
										<a href="{{url('student-list')}}" class="btn btn-secondary">Back</a>
										<div class="row mb-3" style="float:right;">
												<input type="submit" class="btn btn-primary" value="Add Student">
												
										</div>
									</form>
							</div>
			
						</div>
				</div>
		</div>
</body>
</html>