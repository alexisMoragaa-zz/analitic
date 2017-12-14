<!doctype html>
<html lang="en">
  <head>
    <title>Virtual Catalog</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>

  <style media="screen">
    .header-container{
    background-color:rgb(40, 116, 166);
      color: white;
    }
    .login{
      color: white;
      font-size: 1.3em;
    }
    #footer-container {
        background-color: rgb(26, 82, 118 ) ;
      color: white;
      padding: 3em 0;

    }
    #footer-container h4 {
      font-size: 16px;
    }
    .cw{
      color: white;
      }
    @media (max-width: 768px) {
      #footer-container [class*="col-"] {
        margin-bottom: 2em;
      }
    }
    .list-group{
      margin-top: 1em;
    }
    .s1{
      margin-top:0.4em;
    }
    .card{
      margin-top: 1em;
    }
    .list-group-item-action.active {
      background-color: #219FD9;
      border-color: #219FD9;
    }

    #loadContainer{
      margin-top:1em;
      margin-bottom: 1em;
    }
    .imgViewProduct{
      width: 100%;

    }
    .center-tittle{
      text-align: center;
    }

  </style>
  <body>
    <!--header-->
      <header class="header-container">
        <div class="container">
          <div class="d-flex justify-content-end">
            <div class="mr-auto p-2">
              <h1>Virtual-Catalog</h1>
            </div>

              @if (Auth::guest())
              @else
                <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{auth::user()->name}}
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="{{url('auth/logout')}}">Logout</a>

                  </div>
                </div>
                @endif

        </div>
      </header>
    <!--header-->

    <!--Menu-->
    <div class=" bg-light">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{url('home')}}">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>



            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                @if (Auth::guest())
                <li class="nav-item active">
                  <a class="nav-link" href="{{url('catalogo')}}">Product</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">About As</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('contact')}}">Contact</a>
                </li>
              @else
                <li class="nav-item active">
                  <a class="nav-link" href="{{url('catalogo')}}">Product</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">About As</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('contact')}}">Contact</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="{{url('load/create')}}">Load Product</a>
                </li>

              @endif

              </ul>

              <form class="form-inline my-2 my-lg-0">
                <div class="input-group ">
                  <input type="text" class="form-control " placeholder="search..." aria-label="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-outline-success" type="button">Search</button>
                    </span>
                </div>
              </form>
            </div>
          </nav>
      </div>
    </div>
    <!--/Menu-->


    @yield('content')



    <!--Ventana login-->
    {{-- <div class="modal fade bd-example-modal-sm" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="login">User Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="">
          <div class="modal-body ">
          <div class="row mb-2">
            <div class="container">
              <div class="col-md-12">
                <label for="" class="control-label">User</label>
                <input type="text" class="form-control">

                <label for="" class="control-label">Password</label>
                <input type="password" class="form-control">
              </div>
            </div>
          </div>
          <div class="modal-footer">

            <button type="submit" class="btn btn-primary float-right">Enter</button>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div> --}}

    <!--/Ventana login-->

<!--Footer-->
<div id="footer-container">
  <div class="container">
    <div class="row text-xs-center text-sm-left">
      <div class="col-md-4">
        <form id="suscribeForm" action="#" method="POST">
          <h4 class="text-uppercase">¿Quiés recibir todas las novedades?</h4>
          <div class="form-group">
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="tu@correo.com" name="email">
            <small id="emailHelp" class="form-text text-muted">No compartiremos tu información con nadie más</small>
          </div>
          <button type="submit" class="btn btn-primary form-text">Suscribe</button>
        </form>
      </div>
      <div class="col-md-3 offset-md-5">
        <h4 class="navigation">Navigation</h4>
        <ul class="navbar-nav mr-auto">
          <li class="nav-item"><a class="nav-link cw" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link cw" href="#">Catalogo</a></li>
          <li class="nav-item"><a class="nav-link cw" href="#">Contacto</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!--/Footer-->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</html>
