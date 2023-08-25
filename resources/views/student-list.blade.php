<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row p-4 mt-5">
            <div class="col-md-10">
                @if ($data)
                    
                        <h4 class="card-title text-center">Student List</h4>
                        <div style="float: right;" class="mb-3">
                            <a href="{{url('add-student')}}" class="mr-auto btn btn-success">Add Student</a>  
                        </div>
                        @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">
                          {{Session::get('success')}}
                        </div>
                        @endif
                       <table class="table table-bordered table-striped table-hover mt-3">
                        <thead>
                          <tr>
                            <th scope="col">S/N</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Address</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1
                            @endphp
                        @foreach ($data as $data)
                        
                          <tr>
                            <th scope="row">{{$i++}}</th>
                            <td>{{$data->name}}</td>
                            <td>{{$data->email}}</td>
                            <td>{{$data->phone}}</td>
                            <td>{{$data->address}}</td>
                            <td><a href="{{url('edit-student/'.$data->id)}}" class="mr-auto btn btn-primary">Edit</a> | <a href="{{url('delete-student/'.$data->id)}}" class="mr-auto btn btn-danger">Delete</a> </td>
                          </tr>
                        </tbody> 
                        @endforeach 
                      </table>
                  
                @endif
            </div>
        </div>
    </div>
</body>
</html>