@extends('admin.component.base')

@section('container')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <a href="{{ url('admin/barang/create') }}" class="btn btn-success btn-sm pull-right" style="margin-bottom: 20px;">Tambah Barang</a>
    <h1>
      Data Barang
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="row">
      <div class="col-xs-12">

        <!-- /.box -->

        <div class="box">
          <!-- /.box-header -->
          <div class="box-body">
            @include('component.alert')
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Nama Barang</th>
                <th>Deskripsi</th>
                <th>Kategori</th>
                <th>Stok</th>
                <th class="text-center" style="width: 150px;">Actions</th>
              </tr>
              </thead>
              <tbody>
              @foreach($barangs as $barang)
                <tr>
                  <td>
                    <img src="{{ $barang->gambar ? asset('uploads/'.$barang->gambar) : '' }}" alt="gambar barang" style="width: 80px; margin-right: 10px;">
                    <strong>{{ $barang->nama_barang }}</strong>
                  </td>
                  <td>{{ $barang->deskripsi ?? '-' }}</td>
                  <td>
                    @php
                      $id = explode(',', $barang->kategori_id);
                      $produkKategori = \App\Kategori::whereIn('id', $id)->get();
                    @endphp
                    @foreach($produkKategori as $key => $pk)
                      {{ $pk->nama_kategori.($key+1 == sizeof($produkKategori) ? '' : ',') }}
                    @endforeach
                  </td>
                  <td>{{ $barang->stok }}</td>
                  <td class="text-center">
                    <a href="{{ url('admin/barang/'.$barang->id.'/edit') }}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                    <a href="#" class="btn btn-danger btnDelete" data-url="{{ url('/admin/barang/'.$barang->id) }}"><i class="fa fa-trash"></i></a>
                  </td>
                </tr>
              @endforeach
              </tbody>
              <tfoot>
              <tr>
                <th>Nama Barang</th>
                <th>Deskripsi</th>
                <th>Kategori</th>
                <th>Stok</th>
                <th class="text-center" style="width: 150px;">Actions</th>
              </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<form action="#" method="post" id="formDelete" class="d-none">
  @csrf
  @method('delete')
</form>
@endsection
