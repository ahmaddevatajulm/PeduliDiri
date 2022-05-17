@extends('layouts.master')
<title>Peduli Diri &mdash; Tabel</title>
@section('title')
    <h1 >Data Perjalanan</h1>
@endsection

@section('content')

 @if (count($data)>0)
        <div class="card-body">
          <table class="table table-hover" style="background-color: #fffff2">
           <thead style="background-color: #e6e6db">
             @php
                 $no=1;
             @endphp
             <tr>
               <th scope="col">No</th>  
               <th scope="col">Tanggal <div class="btn-group" role="grup">
                <div class="btn-group" role="group">
                  <button type="button" class="btn btn-outline-primary dropdown-toggle float-right text-sm"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  </button>
                  <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                      <form action="/sort" method="GET">
                          @csrf
                          <input type="hidden" name="sort_item" value="tanggal">
                          <input type="hidden" name="sort_type" value="desc">

                          <button class="dropdown-item" type="submit">Terbaru</button>
                      </form>
                      
                      <form action="/sort" method="GET">
                          @csrf
                          <input type="hidden" name="sort_item" value="tanggal">
                          <input type="hidden" name="sort_type" value="asc">

                          <button class="dropdown-item" type="submit">Terlama</button>
                      </form>
                  </div>
              </div>
               </th>
               <th scope="col">Jam<div class="btn-group" role="grup">
                <div class="btn-group" role="group">
                  <button type="button" class="btn btn-outline-primary dropdown-toggle float-right text-sm"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  </button>
                  <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                      <form action="/sort" method="GET">
                          @csrf
                          <input type="hidden" name="sort_item" value="jam">
                          <input type="hidden" name="sort_type" value="desc">

                          <button class="dropdown-item" type="submit">Terbaru</button>
                      </form>
                      
                      <form action="/sort" method="GET">
                          @csrf
                          <input type="hidden" name="sort_item" value="jam">
                          <input type="hidden" name="sort_type" value="asc">

                          <button class="dropdown-item" type="submit">Terlama</button>
                      </form>
                  </div>
              </div>
               </th>
               <th scope="col">Lokasi <div class="btn-group" role="grup">
                <div class="btn-group" role="group">
                  <button type="button" class="btn btn-outline-primary dropdown-toggle float-right text-sm"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  </button>
                  <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                    <form action="/sort" method="GET">
                      @csrf
                      <input type="hidden" name="sort_item" value="lokasi">
                      <input type="hidden" name="sort_type" value="asc">

                      <button class="dropdown-item" type="submit">Teratas</button>
                  </form>
                      <form action="/sort" method="GET">
                          @csrf
                          <input type="hidden" name="sort_item" value="lokasi">
                          <input type="hidden" name="sort_type" value="desc">

                          <button class="dropdown-item" type="submit">Terbawah</button>
                      </form>
                  </div>
              </div>
               </th>
               <th scope="col">Suhu <div class="btn-group" role="grup">
                <div class="btn-group" role="group">
                  <button type="button" class="btn btn-outline-primary dropdown-toggle float-right text-sm"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  </button>
                  <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                  </form>
                  <form action="/sort" method="GET">
                      @csrf
                      <input type="hidden" name="sort_item" value="suhu">
                      <input type="hidden" name="sort_type" value="desc">

                      <button class="dropdown-item" type="submit">Tertinggi</button>
                  </form>
                    <form action="/sort" method="GET">
                      @csrf
                      <input type="hidden" name="sort_item" value="suhu">
                      <input type="hidden" name="sort_type" value="asc">

                      <button class="dropdown-item" type="submit">Terendah</button>
                  
                  </div>
              </div>
               </th>
               <th scope="col">Ubah Data</th>
               
             </tr>
           </thead>
           <tbody>
             @foreach ($data as $ga_peduli)
             <tr>
               <td scope="row">{{ $no++ }}</th>
               <td>{{ $ga_peduli->tanggal }}</td>
               <td>{{ $ga_peduli->jam }}</td>
               <td>{{ $ga_peduli->lokasi}}</td>
               <td>{{ $ga_peduli->suhu }}</td>
               <td>
                <form method="POST" action="/hapusPerjalanan" class="needs-validation"
                novalidate="">
                @csrf

                <input id="id" type="hidden" class="form-control" name="id"
                    value="{{ $ga_peduli->id }}" required>

                <button type="submit" class="btn btn-danger btn-lg btn-icon icon-right"
                    tabindex="4">
                    Delete
                </button>

            </form>
               </td>
             </tr>  
             @endforeach
           </tbody>
         
          </table>
          @if (session('dataDeleted'))
        <div class="modal fade" id="dataDeletedModal" tabindex="-1" role="dialog"
            aria-labelledby="dataDeletedModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="dataDeletedModalLongTitle">Data Terhapus</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Data telah sukses terhapus!
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $(document).ready(function() {
                $("#dataDeletedModal").modal();
            });
        </script>
    @endif
          <div class="d-flex justify-content-center">
          {{ $data->links('pagination::bootstrap-4') }}
        </div>
        @else 
        <div class="alert alert-warning alert-has-icon">
          <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
          <div class="alert-body">
              <div class="alert-title">Tidak ada data perjalanan</div>
              Tidak ada data perjalanan yang ditemukan, silahkan masukkan data pada halaman input data perjalanan.
          </div>
      </div>
  @endif
        </div>
        
@endsection

