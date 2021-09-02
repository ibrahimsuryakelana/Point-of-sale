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
              @endif
          <div class="row">
            <div class="col-6">
              <h1>keranjang</h1>
            </div>
            <div class="col-6">
              <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#modal_pembelian">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
              </svg>Pembelanjaan
              </button>
            </div>

        <TABLE class="table table-hover table-bordered dataTable " id="example" style="width:100%">
          <thead>
            <tr>
              <th>Id</th>
              <TH>Nama Barang</TH>
              <TH>Jumlah Beli</TH>
              <TH>Harga</TH>
              <th>AKSI</th>
           </tr>
          </thead>

          <tbody>
            @foreach($data_keranjang as $keranjang)
            <tr>
                <td>{{ $keranjang->id}}</td>
                <td>{{ $keranjang->nama_barang}}</td>
                <td>{{ $keranjang->jumlah_beli}}</td>
                <td>{{ $keranjang->total_harga}}</td>
                <td>
                  <a href="/keranjang/{{$keranjang->id}}/delete" class="btn btn-danger btn-sm" onclick ="return confirm('Apakah anda yakin?')">
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                  </svg>
                  </a>
                </td>
            </tr>
            @endforeach
            <tr>
              <td></td>
              <td></td>
              <td><b>TOTAL HARGA : </b></td>
              <td>{{ $total}}</td>
              <td>
              </td>
            </tr>
          </tbody>
        </table>

          <div class="col-12">
              <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#modal_pembayaran">
              Bayar
              </button>
          </div>
      </div>

      <!-- Modal Pembelian-->
    <div class="modal fade" id="modal_pembelian" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">

          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Silahkan Isi</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">
            <form action="{{url('/keranjang/create')}}" method="POST">
              {{csrf_field()}}
              <div class="form-group">
                <label for="exampleInputEmail1">Nama Barang</label>
                <select name="id_barang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="nama_barang" placeholder="Nama Barang">
                  @foreach($data_barang as $keranjang)
                  <option value="{{$keranjang->id}}">{{$keranjang->nama_barang}}</option>
                  @endforeach
                </select> 
                
                <div class="form-group">
                  <input type="hidden" name="id_keranjang" value="{{$a->id}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Jumlah Beli</label>
                  <input name="jumlah_beli" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="jumlah_beli" placeholder="Jumlah Beli" >
                </div>
                <script>
                  document.querySelector(".your_class").addEventListener("keypress", function (evt) {
                      if (evt.which != 8 && evt.which != 0 && evt.which < 48 || evt.which > 57)
                      {
                          evt.preventDefault();
                      }
                  });
                </script>
                @if(session('error'))
                  <div class="alert alert-danger" role="alert">
                   {{session('error')}}
                   </div>
                   <script>
                   $(function(){
                  $('#modal_pembelian').modal('show');
                    });
                   </script>
              @endif
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
    </div>

    <!-- Modal Pembayaran-->
    <div class="modal fade" id="modal_pembayaran" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" >Pembayaran</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="{{ url('/keranjang/bayar/'. $a->id)}}" method="POST">
              @method('put')
                {{csrf_field()}}

                <div class="form-group">
              <TABLE class="table table-hover table-bordered dataTable " id="example" style="width:100%">
                  <thead>
                  <tr>
                      <TH>Nama Barang</TH>
                      <TH>Jumlah Beli</TH>
                      <TH>Harga :</TH>
                  </tr>
                  </thead>

                  <tbody>
                  @foreach($data_keranjang as $keranjang)
                    <tr>
                        <td>{{ $keranjang->nama_barang}}</td>
                        <td>{{ $keranjang->jumlah_beli}}</td>
                        <td>{{ $keranjang->total_harga}}</td>
                      </tr>
                      @endforeach
                      <tr>
                        <td></td>
                        <td><b>Total</b></td>
                        <td>{{$total}}</td>
                      </tr>
                    </tbody>
              </table>
                <div class="form-group">
                  <label for="exampleInputEmail1">Uang Bayar</label>
                  <input name="uang" type="number" class="form-control" >
                  <input type="hidden" name="totalll" value="{{$total}}">
                </div>
                @if(session('errorr'))
                  <div class="alert alert-danger" role="alert">
                   {{session('errorr')}}
                   </div>
                   <script>
                   $(function(){
                  $('#modal_pembayaran').modal('show');
                    });
                   </script>
                @endif
                <script>
                  document.querySelector(".your_class").addEventListener("keypress", function (evt) {
                      if (evt.which != 8 && evt.which != 0 && evt.which < 48 || evt.which > 57)
                      {
                          evt.preventDefault();
                      }
                  });
                </script>  
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