@extends('admin.component.base')

@section('container')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Data Penjualan
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
                <th>No. Struk</th>
                <th>User</th>
                <th>Nama Pelanggan</th>
                <th>Tanggal Dibuat</th>
                <th>Status</th>
                <th class="text-center">Actions</th>
              </tr>
              </thead>
              <tbody>
              @foreach($transaksis as $transaksi)
                <tr>
                  <td>#{{ $transaksi->id }}</td>
                  <td>
                    <a href="{{ url('admin/user/'.$transaksi->user_id.'/edit') }}">{{ $transaksi->user->nama }}</a>
                  </td>
                  <td>{{ $transaksi->delivery->nama }}</td>
                  <td>{{ $transaksi->created_at }}</td>
                  <td>
                    <form action="{{ url('admin/transaksi/'.$transaksi->id) }}" method="post">
                      @csrf
                      @method('put')
                      <select name="status" class="form-control select2 selectStatus">
                        <option value="1" {{ $transaksi->status == 1 ? 'selected' : '' }}>Belum dibayar</option>
                        <option value="2" {{ $transaksi->status == 2 ? 'selected' : '' }}>Sudah Bayar</option>
                        <option value="3" {{ $transaksi->status == 3 ? 'selected' : '' }}>Dalam Pengiriman</option>
                        <option value="4" {{ $transaksi->status == 4 ? 'selected' : '' }}>Selesai</option>
                      </select>
                    </form>
                  </td>
                  <td class="text-center">
                    <a href="{{ url('/admin/transaksi/'.$transaksi->id) }}" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                    <a href="#" class="btn btn-danger btnDelete" data-url="{{ url('/admin/transaksi/'.$transaksi->id) }}"><i class="fa fa-trash"></i></a>
                  </td>
                </tr>
              @endforeach
              </tbody>
              <tfoot>
              <tr>
                <th>No. Struk</th>
                <th>User</th>
                <th>Nama Pelanggan</th>
                <th>Tanggal Dibuat</th>
                <th>Status</th>
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
