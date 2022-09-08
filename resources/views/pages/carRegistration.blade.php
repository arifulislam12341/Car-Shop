
@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Car</title>
</head>
<body>
<h1 class="text-center text-dark">Add Car</h1>
    <div class="container">
    <!-- <div class="row  justify-content-center align-items-center">
                <div class="col-lg-6 col-sm-6 ">
                    <img class="img-fluid" src="{{URL('images/registration.jpg')}}" alt="">
                </div> -->
   <center>
                <div style="background-color:rgba(0,0,0,0.5);"  class=" col-lg-4 p-4 shadow-lg ">
                
<center>
<form action="{{route('carRegistration')}}" class="form-group" method="post">
{{csrf_field()}}
<br>


    <label class="text-white text-uppercase fw-bold" for="">Make</label>
    <input type="text" class="form-control" name="make" value="{{old('make')}}">
    @error('make')
    <span  class="text-white">{{$message}}</span>
    @enderror
    <br>
    <label class="text-white text-uppercase fw-bold" for="">Model</label>
    <input type="text" class="form-control" name="model" value="{{old('model')}}">
    @error('model')
    <span  class="text-white">{{$message}}</span>
    @enderror
    <br>
    <label class="text-white text-uppercase fw-bold" for="">Vin</label>
    <input type="text" class="form-control" name="vin" value="{{old('vin')}}">
    @error('vin')
    <span  class="text-white">{{$message}}</span>
    @enderror
    <br>
    <label class="text-white text-uppercase fw-bold" for="">Price</label>
    <input type="text" class="form-control" name="price" value="{{old('price')}}">
    @error('price')
    <span  class="text-white">{{$message}}</span>
    @enderror
    <br>
    <label class="text-white text-uppercase fw-bold" for="">Image</label>
    <input type="text" class="form-control" name="image" value="">
    <!-- @error('image')
    <span class="text-white">{{$message}}</span>
    @enderror<br> -->
    
    

   
    <br>
    <button class="btn btn-outline-dark text-uppercase fst-italic fw-bold btn-lg" type="submit">Submit</button>
    <!-- <input type="submit" class="btn btn-secondary btn-lg">Submit</input> -->
</div>
</div>

</form>
</center>
</center>
</body>
</html>
@endsection