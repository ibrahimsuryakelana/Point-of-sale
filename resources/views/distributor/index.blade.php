@extends('layouts.admin')

@section('title')
    Dashboard
@endsection

@section('content') 
<!DOCTYPE html>
<html>
<head>
  <title></title>
   <!-- Buat DataTabel
   <link href="cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" />
   <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" /> -->

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head><!-- Buat background -->
<body>
       
      <div class="container">
        @if(session('sukses'))
            <div class="alert alert-success" role="alert">
              {{session('sukses')}}
            </div>
            @endif
        <div class="row">
          <div class="col-6">
            <h1>Data Distributor</h1>
            <p> Show <button class="btn btn-light"> 1
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-exclamation-octagon-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M11.46.146A.5.5 0 0 0 11.107 0H4.893a.5.5 0 0 0-.353.146L.146 4.54A.5.5 0 0 0 0 4.893v6.214a.5.5 0 0 0 .146.353l4.394 4.394a.5.5 0 0 0 .353.146h6.214a.5.5 0 0 0 .353-.146l4.394-4.394a.5.5 0 0 0 .146-.353V4.893a.5.5 0 0 0-.146-.353L11.46.146zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
              </svg>
              </button> entries 
            <p>
          </div>
          <div class="col-6">
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
            </svg>
            Tambah Data
            </button>
          </div>
      <TABLE class="table table-hover table-bordered dataTable" id="example" style="width:100%">
        <thead>

        <tr>
            <th>Id</th>
            <TH>Nama Distributor</TH>
            <TH>Alamat</TH>
            <TH>Nomor Telephone</TH>
            <th>AKSI</th>
        </tr>
        </thead>
         
         <tbody>
         @foreach($data_distributor as $distributor)
        <tr>
            <td>{{ $distributor->id}}</td>
            <td>{{ $distributor->nama_distributor}}</td>
            <td>{{ $distributor->alamat}}</td>
            <td>{{ $distributor->no_telp}}</td>
            <td>
            <a href="/distributor/{{$distributor->id}}/delete" class="btn btn-danger btn-sm" onclick ="return confirm('Apakah anda yakin?')">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
              <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
            </svg>
            </a>
            <a href="/distributor/{{$distributor->id}}/edit" class="btn btn-warning btn-sm"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                </svg>
            </a>
            </td>
        </tr>
        @endforeach
        </tbody>
      </table>

        </div>
      </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Silahkan Isi</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
           <form action="/distributor/create" method="POST">
            {{csrf_field()}}

            <div class="form-group">
              <label for="exampleInputEmail1">Nama Distributor</label>
              <input name="nama_distributor" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Nama Distributor" placeholder="Nama distributor" >
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Alamat</label>
              <input name="alamat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="alamat" placeholder="Alamat" >
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Nomor Telephone</label>
              <input name="no_telp" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="no_telp" placeholder="Nomor Telephone" >
            </div>
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
          </div>
        </div>
      </div>
    </div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
@endsection