<nav class="navbar navbar-expand-lg navbar-light bg-light mt-5">
  <a class="navbar-brand" href="#">Workspace <br> Infotech</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse ms-5" id="navbarNav">
    <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link btn btn-outline-success" href="{{route('carinfo')}}">Cars</a>
      </li>
   
      <li class="nav-item">
        <a class="nav-link btn btn-outline-success" href="{{route('adminRegistration')}}">Add Admin</a>
      </li>
     
      @if (Session::get("id"))
      <li class="nav-item">
        <a class="nav-link btn btn-outline-success" href="{{route('admininfo')}}">AdminInformation</a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link btn btn-outline-success" href="{{route('allAdmin')}}">All Admin</a>
      </li>
      <li class="nav-item">
        <a class="nav-link btn btn-outline-success" href="{{route('adminUpdate')}}">Admin Update</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link btn btn-outline-success" href="{{route('carRegistration')}}">Add Car</a>
      </li>
      <li class="nav-item">
        <a class="nav-link btn btn-outline-success" href="{{route('Logout')}}">LogOut</a>
      </li>
    </ul>
    @endif
  </div>
</nav>