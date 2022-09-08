
@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>See All Admin</title>
</head>

<body class="mb-5">

<br>

  
<h1 class="text-center text-dark">All Admin Details</h1>

<br>
<br>
    <table class="table table-hover">
 
    <tr class="table-dark  " >

<th class="text-white text-uppercase fw-bold">User id</th>
<th class="text-white text-uppercase fw-bold">Name</th>
<th class="text-white text-uppercase fw-bold">Email</th>

<th class="text-white text-uppercase fw-bold">Phone</th>


<th class="text-white text-uppercase fw-bold">Address</th>
<th class="text-white text-uppercase fw-bold">Action</th>
</tr>
@foreach($keys as $key)

<tr class=" table-success ">
            <td>{{$key->id}}</td>
      
            <td>{{$key->name}}</td>
      
            <td>{{$key->email}}</td>
       
          
     
            <td>{{$key->phone}}</td>

            
    
            <td>{{$key->address}}</td>
            <td><a class="btn btn-danger px-3"  href="/adminDelete/{{$key->id}}">Delete</a></td>
        </tr>
        @endforeach
   

        </table>


</body>
</html>
@endsection