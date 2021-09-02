<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>  {{-- tempat untuk menyimpan title --}}

    <!-- Buat Datatable -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/stylesheets/test.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    </head>
    
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-dark text-white">
        <a class="navbar-brand" href="#">Point Of Sale</a>
        <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/barang">Barang <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="/merk">Merek <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="/distributor">Distributor <span class="sr-only">(current)</span></a>
            </li>
            <!-- Ngakalin biar si logoutnya ke kanan -->
            <li class="nav-item">
              <a class="nav-link disabled" href="#"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#"></a>
            </li>
                   
            <li class="nav-item">
              <a class="nav-link disabled" href="#"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#"></a>
            </li>
                   
            <li class="nav-item">
              <a class="nav-link disabled" href="#"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#"></a>
            </li>
                   
            <li class="nav-item">
              <a class="nav-link disabled" href="#"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#"></a>
            </li>
                   
            <li class="nav-item">
              <a class="nav-link disabled" href="#"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#"></a>
            </li>
                   
            <li class="nav-item">
              <a class="nav-link disabled" href="#"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#"></a>
            </li>
                   
            <li class="nav-item">
              <a class="nav-link disabled" href="#"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#"></a>
            </li>
                   
            <li class="nav-item">
              <a class="nav-link disabled" href="#"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#"></a>
            </li>
                   
            <li class="nav-item">
              <a class="nav-link disabled" href="#"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#"></a>
            </li>
                   
            <li class="nav-item">
              <a class="nav-link disabled" href="#"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#"></a>
            </li>
                   
            <li class="nav-item">
              <a class="nav-link disabled" href="#"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#"></a>
            </li>
                   
            <li class="nav-item">
              <a class="nav-link disabled" href="#"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#"></a>
            </li>
                   
            <li class="nav-item">
              <a class="nav-link disabled" href="#"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#"></a>
            </li>
                   
            <li class="nav-item">
              <a class="nav-link disabled" href="#"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#"></a>
            </li>
                   
            <li class="nav-item">
              <a class="nav-link disabled" href="#"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#"></a>
            </li>
                   
            <li class="nav-item">
              <a class="nav-link disabled" href="#"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#"></a>
            </li>
                   
            <li class="nav-item">
              <a class="nav-link disabled" href="#"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#"></a>
            </li>
                   
            <li class="nav-item">
              <a class="nav-link disabled" href="#"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#"></a>
            </li>
                   
            <li class="nav-item">
              <a class="nav-link disabled" href="#"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#"></a>
            </li>
                   
            <li class="nav-item">
              <a class="nav-link disabled" href="#"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#"></a>
            </li>
                   
            <li class="nav-item">
              <a class="nav-link disabled" href="#"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#"></a>
            </li>
                   
            <li class="nav-item">
              <a class="nav-link disabled" href="#"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#"></a>
            </li>
                   
            <li class="nav-item">
              <a class="nav-link disabled" href="#"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#"></a>
            </li>
                   
            <li class="nav-item">
              <a class="nav-link disabled" href="#"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#"></a>
            </li>
                   
            <li class="nav-item">
              <a class="nav-link disabled" href="#"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#"></a>
            </li>
                   
            <li class="nav-item">
              <a class="nav-link disabled" href="#"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#"></a>
            </li>
                   
            <li class="nav-item">
              <a class="nav-link disabled" href="#"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#"></a>
            </li>
                   
            <li class="nav-item">
              <a class="nav-link disabled" href="#"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#"></a>
            </li>
                   
            <li class="nav-item">
              <a class="nav-link disabled" href="#"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#"></a>
            </li>
                   
            <li class="nav-item">
              <a class="nav-link disabled" href="#"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#"></a>
            </li>
                   
            <li class="nav-item">
              <a class="nav-link disabled" href="#"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#"></a>
            </li>
                   
            <li class="nav-item">
              <a class="nav-link disabled" href="#"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#"></a>
            </li>
                   
             <li>      
                    <a class="nav-item active" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();" >Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
            </li>
          </ul>
        </div>
      </nav>
      
    @yield('content') {{-- tempat untuk menyimpan content --}}
</body>

<!-- Buat Datatable
<footer>
<script src="https://code.jquery.com/jquery-3.5.1.js" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>

<script>
   $(document).ready(function() {
  $('#example').dataTable({"sPaginationType": "full_numbers"});
  $('#example').DataTable();
} );
</script>
</footer> -->
</html>