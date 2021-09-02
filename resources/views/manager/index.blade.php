@extends('layouts.manager')

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
<div class="row">
       
      <div class="container">
        @if(session('sukses'))
            <div class="alert alert-success" role="alert">
              {{session('sukses')}}
            </div>
            @endif
        <div class="row">
          <div class="col-6">
            <h1>Laporan Transaksi</h1>
          </div>

          <TABLE class="table table-hover table-bordered dataTable" id="example" style="width:100%">
        <thead>
        <tr>
          <th>
          <div class="btn btn-success" onclick="print()" id="print">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-download" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                  <path fill-rule="evenodd" d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
            </svg> PDF
          </div>
          </th>
          <th>
              <a class="btn btn-warning" href="{{ route('export2') }}"> 
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-download" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                  <path fill-rule="evenodd" d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                </svg> Exel
              </a>
          </th>
        </tr>
        <tr>
            <th>Id</th>
            <TH>Id Barang</TH>
            <TH>Nama Barang</TH>
            <TH>Jumlah Beli</TH>
            <TH>Total Harga</TH>
            <TH>Tanggal Beli</TH>
        </tr>
        </thead>
         
         <tbody>
         @foreach($data_manager_view as $manager)
        <tr>
            <td>{{ $manager->id}}</td>
            <td>{{ $manager->id_barang}}</td>
            <td>{{ $manager->nama_barang}}</td>
            <td>{{ $manager->jumlah_beli}}</td>
            <td>{{ $manager->total_harga}}</td>
            <td>{{ $manager->tanggal_beli}}</td>
        </tr>
        @endforeach
        </tbody>
      </table>
        </div>
      </div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
@endsection