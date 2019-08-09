@extends('admin.component.base')

@section('container')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{ $title }} User
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
                  <label class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" name="nama" value="{{ @old('nama') ?? @$user->nama }}" class="form-control" placeholder="Masukan nama user">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" name="email" value="{{ @old('email') ?? @$user->email }}" class="form-control" placeholder="Masukan email">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Level</label>
                  <div class="col-sm-10">
                    <select class="select2 form-control" name="level">
                      @foreach(app('user_level')['name'] as $key => $status)
                        @if($key == 0)
                          @continue
                        @endif
                        <option value="{{ $key }}" {{ (@old('level') && old('level') == $key) ? 'selected' : ((@$user->level && $user->level == $key) ? 'selected' : '') }}>{{ $status }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" name="password" value="{{ @old('password') ?? @$user->password }}" class="form-control" placeholder="Masukan Password">
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
