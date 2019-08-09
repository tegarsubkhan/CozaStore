@extends('admin.component.base')

@section('container')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{ $title }} Barang
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
                  <label class="col-sm-2 control-label">Gambar</label>
                  <div class="col-sm-10">
                    <img class="img-preview" style="margin-bottom: 20px; width: 100px;" src="{{ @$barang->gambar ? asset('uploads/'.$barang->gambar) : '' }}" alt="" onerror="this.src='{{ asset('asset_admin/dist/img/default-50x50.gif') }}'">
                    <input type="file" name="gambar" class="gambar" accept="image/jpeg;images/png">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Produk</label>
                  <div class="col-sm-10">
                    <input type="text" name="nama_barang" value="{{ @old('nama_barang') ?? @$barang->nama_barang }}" class="form-control" placeholder="Masukan nama barang">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kategori</label>
                  <div class="col-sm-10">
                    <select class="select2 form-control" name="kategori_id[]" multiple="multiple" data-placeholder="Masukan 1 atau lebih karakter untuk mencari..">
                      @foreach($kategoris as $kategori)
                        <option value="{{ $kategori->id }}" {{ (@old('kategori_id') && in_array($kategori->id, explode(',', old('kategori_id')))) ? 'selected' : ((@$barang->kategori_id && in_array($kategori->id, explode(',', @$barang->kategori_id))) ? 'selected' : '') }}>{{ $kategori->nama_kategori }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Stok</label>
                  <div class="col-sm-10">
                    <input type="number" name="stok" value="{{ @old('stok') ?? @$barang->stok }}" class="form-control" placeholder="Masukan jumlah stok">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Harga satuan</label>
                  <div class="col-sm-10">
                    <input type="number" name="harga" value="{{ @old('harga') ?? @$barang->harga }}" class="form-control" placeholder="Masukan harga barang">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Deskripsi</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="deskripsi" cols="20" rows="5" placeholder="Masukan deskripsi barang">{{ @old('deskripsi') ?? @$barang->deskripsi }}</textarea>
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
