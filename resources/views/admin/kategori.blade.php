@extends('admin.component.base')

@section('container')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <a href="{{ url('admin/kategori/create') }}" class="btn btn-success btn-sm pull-right" style="margin-bottom: 20px;">Tambah Kategori</a>
    <h1>
      Data Kategori
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
                <th>Nama Kategori</th>
                <th class="text-center">Actions</th>
              </tr>
              </thead>
              <tbody>
              @foreach($kategoris as $kategori)
                <tr>
                  <td>
                    <strong>{{ $kategori->nama_kategori }}</strong>
                  </td>
                  <td class="text-center">
                    <a href="{{ url('admin/kategori/'.$kategori->id.'/edit') }}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                    <a href="#" class="btn btn-danger btnDelete" data-url="{{ url('/admin/kategori/'.$kategori->id) }}"><i class="fa fa-trash"></i></a>
                  </td>
                </tr>
              @endforeach
              </tbody>
              <tfoot>
              <tr>
                <th>Nama Kategori</th>
                <th class="text-center">Actions</th>
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
