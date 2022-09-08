@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
</head>
<body>
    
    <div class="container">
    
  
   <center>
   <h1 class="text-info text-uppercase">admin registration</h1>
                <div style="background-color:rgba(0,0,0,0.5);"  class=" col-lg-4 p-4 shadow-lg ">
<center>
<form action="{{route('adminRegistration')}}" class="form-group" method="post">
{{csrf_field()}}
<br>
    <label class="text-white text-uppercase fw-bold" for="">Name</label>
    <input type="text" class="form-control" name="name" value="{{old('name')}}">
    @error('name')
    <span  class="text-white">{{$message}}</span>
    @enderror
    <br>
    <label class="text-white text-uppercase fw-bold" for="">Email</label>
    <input type="text" class="form-control" name="email" value="{{old('email')}}">
    @error('email')
    <span  class="text-white">{{$message}}</span>
    @enderror
    <br>
    <label class="text-white text-uppercase fw-bold" for="">Password</label>
    <input type="password" class="form-control" name="password" value="{{old('password')}}">
    @error('password')
    <span  class="text-white">{{$message}}</span>
    @enderror
    <br>
    <label class="text-white text-uppercase fw-bold" for="">PhoneNumber</label>
    <input type="text" class="form-control" name="phonenu" value="{{old('phoneno')}}">
    @error('phonenu')
    <span  class="text-white">{{$message}}</span>
    @enderror
    <br>
   

    <label class="text-white text-uppercase fw-bold" for="">Office Address</label>
    <input type="text" class="form-control" name="address" value="{{old('address')}}">
    @error('address')
    <span  class="text-white">{{$message}}</span>
    @enderror
    <br>
    <button class="btn btn-outline-dark text-white text-uppercase fst-italic fw-bold btn-lg" type="submit">Submit</button>
    <!-- <input type="submit" class="btn btn-secondary btn-lg">Submit</input> -->
</div>
</div>

</form>
</center>
</center>
</body>
</html>
@endsection