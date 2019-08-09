@extends('admin.component.base')

@section('css')
  <style>
    .badge{
      background: #f5f5f5;
    }
  </style>
@endsection

@section('container')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <a href="{{ url('admin/user/create') }}" class="btn btn-success btn-sm pull-right" style="margin-bottom: 20px;">Tambah User</a>
    <h1>
      Data User
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
                <th>Nama</th>
                <th>Email</th>
                <th>Level</th>
                <th>Tanggal dibuat</th>
                <th class="text-center">Actions</th>
              </tr>
              </thead>
              <tbody>
              @foreach($users as $user)
                <tr>
                  <td>
                    <strong>{{ $user->nama }}</strong>
                  </td>
                  <td>{{ $user->email }}</td>
                  <td>
                    <div class="badge text-{{ app('user_level')['color'][$user->level] }}">
                      {{ app('user_level')['name'][$user->level] }}
                    </div>
                  </td>
                  <td>@datetime($user->created_at)</td>
                  <td class="text-center">
                    <a href="{{ url('admin/user/'.$user->id.'/edit') }}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                    <a href="#" class="btn btn-danger btnDelete" data-url="{{ url('/admin/user/'.$user->id) }}"><i class="fa fa-trash"></i></a>
                  </td>
                </tr>
              @endforeach
              </tbody>
              <tfoot>
              <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Level</th>
                <th>Tanggal dibuat</th>
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
