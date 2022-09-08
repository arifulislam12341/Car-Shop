
@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Info</title>
</head>

<body class="mb-5">

<br>

  
<h1 class="text-center text-dark">Admin Profile Details</h1>

<br>
<br>
    <table class="table table-hover">
 
    <tr class="table-dark  " >

<th class="text-white text-uppercase fw-bold">Admin id</th>
<th class="text-white text-uppercase fw-bold">Name</th>
<th class="text-white text-uppercase fw-bold">Email</th>
<th class="text-white text-uppercase fw-bold">Password</th>
<th class="text-white text-uppercase fw-bold">Phone</th>


<th class="text-white text-uppercase fw-bold">Address</th>
</tr>
@foreach($keys as $key)

<tr class=" table-success ">
            <td>{{$key->id}}</td>
      
            <td>{{$key->name}}</td>
      
            <td>{{$key->email}}</td>
       
            <td>{{$key->password}}</td>
     
            <td>{{$key->phoneno}}</td>

            
    
            <td>{{$key->address}}</td>
        </tr>
        @endforeach
   

        </table>


</body>
</html>
@endsection