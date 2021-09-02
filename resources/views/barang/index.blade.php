@extends('layouts.admin')

@section('title')
    Dashboard
@endsection

@section('content') 

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <!-- Buat DataTabel -->
  <link href="cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" />
  <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
       
      <div class="container">
        @if(session('sukses'))
            <div class="alert alert-success" role="alert">
              {{session('sukses')}}
            </div>
            @endif
        <div class="row">
          <div class="col-6">
            <h1>Data Barang</h1>
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
            <TH>Nama Barang</TH>
            <TH>Merek</TH>
            <TH>Distributor</TH>
            <TH>Tanggal Masuk</TH>
            <TH>Harga Beli Barang</TH>
            <TH>Harga Jual Barang</TH>
            <TH>Stok Barang</TH>
            <TH>Keterangan</TH>
            <th>AKSI</th>
        </tr>
        </thead>
         
        <tbody>
        @foreach($data_barang as $barang)
        <tr>
            <td>{{ $barang->id}}</td>
            <td>{{ $barang->nama_barang}}</td>
            <td>{{ $barang->merk->merk}}</td>
            <td>{{ $barang->distributor->nama_distributor}}</td>
            <td>{{ $barang->tanggal_masuk}}</td>
            <td>{{ $barang->harga_beli}}</td>
            <td>{{ $barang->harga_barang}}</td>
            <td>{{ $barang->stok_barang}}</td>
            <td>{{ $barang->keterangan}}</td>
            <td>
            <a href="/barang/{{$barang->id}}/delete" class="btn btn-danger btn-sm" onclick ="return confirm('Apakah anda yakin?')">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
              <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
            </svg>
            </a>
            <a href="/barang/{{$barang->id}}/edit" class="btn btn-warning btn-sm"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
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
           <form action="/barang/create" method="POST">
            {{csrf_field()}}

            <div class="form-group">
              <label for="exampleInputEmail1">Nama Barang</label>
              <input name="nama_barang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="nama_barang" placeholder="Nama barang" >
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Merk</label>
              <select name="id_merek" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="id_merek" placeholder="ID Merek">
                @foreach($data_merk as $barang)
                <option value="{{$barang->id}}">{{$barang->merk}}</option>
                @endforeach
              </select> 
              </div>

              <div class="form-group">
              <label for="exampleInputEmail1">Nama Distributor</label>
              <select name="id_distributor" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="nama_distributor" placeholder="Nama Distributor">
                @foreach($data_distributor as $barang)
                <option value="{{$barang->id}}">{{$barang->nama_distributor}}</option>
                @endforeach
              </select> 
              </div>

              <div class="form-group">
              <label for="exampleInputEmail1">tanggal_masuk</label>
              <input name="tanggal_masuk" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="tanggal_masuk"  placeholder="tanggal_masuk">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Harga Beli Barang</label>
              <input name="harga_beli" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="harga_beli" placeholder="Harga Beli Barang" >
              </div>

              <div class="form-group">
              <label for="exampleInputEmail1">Harga Jual Barang</label>
              <input name="harga_barang" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="harga_barang" placeholder="Harga Jual Barang" >
              </div>

              <div class="form-group">
              <label for="exampleInputEmail1">Stok Barang</label>
              <input name="stok_barang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="stok_barang" placeholder="Stok Barang" >
              </div>

              <div class="form-group">
              <label for="exampleInputEmail1">Keterangan</label>
              <input name="keterangan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="keterangan" placeholder="Keterangan" >
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

    <!-- Buat Datatable -->
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
</footer>

</html>
@endsection