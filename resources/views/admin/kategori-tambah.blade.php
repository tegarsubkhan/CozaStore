@extends('admin.component.base')

@section('container')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{ $title }} Kategori
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
              <form class="form-horizontal" action="{{ $url }}" method="post" enctype="multipart/form-data">
                @csrf
                @if($title != 'Tambah')
                  @method('put')
                @endif
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Kategori</label>
                  <div class="col-sm-10">
                    <input type="text" name="nama_kategori" value="{{ @old('nama_kategori') ?? @$kategori->nama_kategori }}" class="form-control" placeholder="Masukan nama kategori">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-12 text-right">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
                </div>
              </form>
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
@endsection
