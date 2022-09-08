

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cars</title>
    <link rel="stylesheet" href="{{asset('styles.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container ">
            <div>
          <p>Workspace <br> Infotech </p>
          </div>
          <div>
          <a class="btn btn-outline-success text-dark text-uppercase fw-bold fst-italic" href="{{route('carRegistration')}}">Add Car</a>
          <a class="btn btn-outline-success text-dark text-uppercase fw-bold fst-italic" href="{{route('admininfo')}}">Back</a>
          </div>
        </div>
    </nav>
   
   
    <section class="container">
        
    <h3 class="text-center mt-3">Inventory</h3>
   
            <div>
           
                <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach($keys as $key)
                    <div class="col ">
                   
                        <div class=" card h-100 bg-white p-3 rounded-3 ">
                      
                            <div class="">
                            
                                <div class="bg-warning">
                                    <img src="{{$key->image}}" class="card-img-top " style="height:250px " alt="...">
                                </div>
                            </div>

                            <div class="card-body  ">
                                <div class="d-flex justify-content-between align-items-center ">
                                   <div> <h4 >{{$key->make}} ({{$key->model}})</h4></div>
                                    <div><h6>{{$key->price}}$</h6></div>

                                </div>
                                <p>{{$key->vin}}</p>
                            </div>
                            <div class="d-flex  justify-content-center">
                            <a class=" btn btn-dark" type="button" href="/singleCardetails/{{$key->id}}">Details</a>
                           <a class=" btn btn-warning" type="button" href="/carUpdate/{{$key->id}}">Update</a>
                            <a class=" btn btn-danger" type="button" href="/carDelete/{{$key->id}}">Delete</a>
                          
                            </div>
                         
                        </div>
                    </div>
                    @endforeach
                    <!-- <div class="col">
                        <div class="card h-100 bg-white p-3 rounded-3 ">
                            <div class="">
                                <div class="bg-warning">
                                    <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8Y2Fyc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                                </div>
                            </div>

                            <div class="card-body ">
                                <div class="d-flex justify-content-between align-items-center ">
                                   <div> <h4 >{{$key->make}} ({{$key->model}})</h4></div>
                                    <div><h6>{{$key->price}}$</h6></div>

                                </div>
                                <p>{{$key->vin}}</p>
                            </div>
                            <div class="d-flex  justify-content-center">
                                <button type="button" class="btn btn-dark">Details</button>
                            </div>
                            
                        </div>
                    </div>
                   
                    <div class="col">
                        <div class="card h-100 bg-white p-3 rounded-3 ">
                            <div class="">
                                <div class="bg-warning">
                                    <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8Y2Fyc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                                </div>
                            </div>

                            <div class="card-body ">
                                <div class="d-flex justify-content-between align-items-center ">
                                   <div> <h4 >{{$key->make}} ({{$key->model}})</h4></div>
                                    <div><h6>{{$key->price}}$</h6></div>

                                </div>
                                <p>{{$key->vin}}</p>
                            </div>
                            <div class="d-flex  justify-content-center">
                                <button type="button" class="btn btn-dark">Details</button>
                            </div>
                            
                        </div>
                    </div>
                   
                    <div class="col">
                        <div class="card h-100 bg-white p-3 rounded-3 ">
                            <div class="">
                                <div class="bg-warning">
                                    <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8Y2Fyc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                                </div>
                            </div>

                            <div class="card-body ">
                                <div class="d-flex justify-content-between align-items-center ">
                                   <div> <h4 >{{$key->make}} ({{$key->model}})</h4></div>
                                    <div><h6>{{$key->price}}$</h6></div>

                                </div>
                                <p>{{$key->vin}}</p>
                            </div>
                            <div class="d-flex  justify-content-center">
                                <button type="button" class="btn btn-dark">Details</button>
                            </div>
                            
                        </div>
                    </div>
                   
                    <div class="col">
                        <div class="card h-100 bg-white p-3 rounded-3 ">
                            <div class="">
                                <div class="bg-warning">
                                    <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8Y2Fyc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                                </div>
                            </div>

                            <div class="card-body ">
                                <div class="d-flex justify-content-between align-items-center ">
                                   <div> <h4 >{{$key->make}} ({{$key->model}})</h4></div>
                                    <div><h6>{{$key->price}}$</h6></div>

                                </div>
                                <p>{{$key->vin}}</p>
                            </div>
                            <div class="d-flex  justify-content-center">
                                <button type="button" class="btn btn-dark">Details</button>
                            </div>
                            
                        </div>
                    </div>
                   
                    <div class="col">
                        <div class="card h-100 bg-white p-3 rounded-3 ">
                            <div class="">
                                <div class="bg-warning">
                                    <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8Y2Fyc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                                </div>
                            </div>

                            <div class="card-body ">
                                <div class="d-flex justify-content-between align-items-center ">
                                   <div> <h4 >{{$key->make}} ({{$key->model}})</h4></div>
                                    <div><h6>{{$key->price}}$</h6></div>

                                </div>
                                <p>{{$key->vin}}</p>
                            </div>
                            <div class="d-flex  justify-content-center">
                                <button type="button" class="btn btn-dark">Details</button>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 bg-white p-3 rounded-3 ">
                            <div class="">
                                <div class="bg-warning">
                                    <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8Y2Fyc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                                </div>
                            </div>

                            <div class="card-body ">
                                <div class="d-flex justify-content-between align-items-center ">
                                   <div> <h4 >{{$key->make}} ({{$key->model}})</h4></div>
                                    <div><h6>{{$key->price}}$</h6></div>

                                </div>
                                <p>{{$key->vin}}</p>
                            </div>
                            <div class="d-flex  justify-content-center">
                                <button type="button" class="btn btn-dark">Details</button>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 bg-white p-3 rounded-3 ">
                            <div class="">
                                <div class="bg-warning">
                                    <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8Y2Fyc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                                </div>
                            </div>

                            <div class="card-body ">
                                <div class="d-flex justify-content-between align-items-center ">
                                   <div> <h4 >{{$key->make}} ({{$key->model}})</h4></div>
                                    <div><h6>{{$key->price}}$</h6></div>

                                </div>
                                <p>{{$key->vin}}</p>
                            </div>
                            <div class="d-flex  justify-content-center">
                                <button type="button" class="btn btn-dark">Details</button>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 bg-white p-3 rounded-3 ">
                            <div class="">
                                <div class="bg-warning">
                                    <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8Y2Fyc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                                </div>
                            </div>

                            <div class="card-body ">
                                <div class="d-flex justify-content-between align-items-center ">
                                   <div> <h4 >{{$key->make}} ({{$key->model}})</h4></div>
                                    <div><h6>{{$key->price}}$</h6></div>

                                </div>
                                <p>{{$key->vin}}</p>
                            </div>
                            <div class="d-flex  justify-content-center">
                                <button type="button" class="btn btn-dark">Details</button>
                            </div>
                            
                        </div>
                    </div>  -->
                   
                  

                </div>

            </div>

        
    </section>

    <footer class="mt-5">
        <p class="text-center">Copyright © Workspaceit. All rights reserved. </p>
    </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
