@extends('layouts.kasir')

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

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>


<body>
       
      <div class="container">
        @if(session('sukses'))
            <div class="alert alert-success" role="alert">
              {{session('sukses')}}
            </div>
        @elseif(session('error'))
        <div class="alert alert-danger" role="alert">
              {{session('error')}}
            </div>
            @endif
        <div class="row">
          <div class="col-6">
            <h1>Data transaksi</h1>
          </div>
          <div class="col-6">
            <button type="button" class="btn btn-primary float-right" >
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
              <path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z"/>
            </svg>
            <a href="/keranjang">+</a>
            </button>
          </div>
      <TABLE class="table table-hover table-bordered dataTable " id="example" style="width:100%">
        <thead>
        <tr>
            <th>Id</th>
            <TH>Nama Barang</TH>
            <TH>Jumlah Beli</TH>
            <TH>Total Harga</TH>
            <TH>Tanggal Beli</TH>
            <th>AKSI</th>
        </tr>
        </thead>

        <tbody>
         @foreach($data_transaksi_view as $transaksi)
        <tr>
            <td>{{ $transaksi->id}}</td>
            <td>{{ $transaksi->nama_barang}}</td>
            <td>{{ $transaksi->jumlah_beli}}</td>
            <td>{{ $transaksi->total_harga}}</td>
            <td>{{ $transaksi->tanggal_beli}}</td>
            <td>
            <a href="/transaksi/{{$transaksi->id}}/delete" class="btn btn-danger btn-sm" onclick ="return confirm('Apakah anda yakin?')">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
              <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
            </svg>
            </a>

             </td>
          </tr>
         @endforeach
        </tbody>
      </table>

    
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>
@endsection