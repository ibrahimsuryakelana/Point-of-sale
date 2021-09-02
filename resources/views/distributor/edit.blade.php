<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
       
      <div class="container">
      <h1>Edit Data</h1>
        @if(session('sukses'))
            <div class="alert alert-success" role="alert">
              {{session('sukses')}}
            </div>
            @endif
        <div class="row">
          <div class="col-lg-12">
          <form action="/distributor/{{$distributor->id}}/update" method="POST">
            {{csrf_field()}}
            
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Distributor</label>
              <input name="nama_distributor" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="nama_distributor"  placeholder="Nama Distributor" value="{{$distributor->nama_distributor}}" >
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">alamat</label>
              <input name="alamat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="alamat"  placeholder="alamat" value="{{$distributor->alamat}}" >
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Nomor Telphone</label>
              <input name="no_telp" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="no_telp"  placeholder="no_telp" value="{{$distributor->no_telp}}" >
            </div>

          <button type="submit" class="btn btn-warning  ">Submit</button>
           
          </form>
        </div>  
    </div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
 