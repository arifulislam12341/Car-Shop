<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cars</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="container bg-white">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <p class="fw-bold fs-5">Workspace <br> Infotech </p>
          
        </div>
        <div class="pe-3">
            <a class="btn btn-outline-success text-dark text-uppercase fw-bold fst-italic " href="{{route('carinfo')}}">Back</a>
        </div>
    </nav>
    
   
    <section class="container mt-5">
   

    <div class=" d-flex justify-content-evenly">   
    
        <div class="col-lg-6" style="background-color: #eee;"><img src="{{$keys->image}}" class="card-img-top" alt="..."></div>
        <div class="col-lg-6 px-5">
            <div><h3>{{$keys->make}} {{$keys->model}}</h3>
                <h6>${{$keys->price}}</h6>
      </div>
           
            <div class="mt-3 ">
            <table class="table  table-hover ">
                
  <tr class="table-light "><th> Make</th><td>{{$keys->make}}</td></tr>
  <tr class=""><th> Model</th><td>{{$keys->model}}</td></tr>
  <tr class="table-light"><th> Vin</th><td>{{$keys->vin}}</td></tr>

  </table>
            </div>
        </div>
    </div>
          </section>
     
          
                    <footer class=" container bg-light mt-5 " style="background-color: #eee;">
        <p class="text-center">Copyright © Workspaceit. All rights reserved. </p>
    </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
