@extends('admin.component.base')

@section('container')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Data Transaksi
    </h1>
  </section>

  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
        <h2 class="page-header">
          Coza Store, Inc.
          <small class="pull-right">Date: {{ date('d/m/Y') }}</small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        From
        <address>
          <strong>Coza Store, Inc.</strong><br>
          Jl. Jakarta no. 154<br>
          Bandung, 402892<br>
          Phone: +62 81299328812<br>
          Email: info@cozastrore.com
        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        To
        <address>
          <strong>{{ $transaksi->delivery->nama }}</strong><br>
          {{ $transaksi->delivery->alamat }}<br>
          {{ $transaksi->delivery->kode_pos }}<br>
          Phone: {{ $transaksi->delivery->no_telp }}<br>
          Email: {{ $transaksi->delivery->email }}
        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        <b>Invoice #{{ $transaksi->id }}</b><br>
        <br>
        <b>Order ID:</b> {{ $transaksi->id }}<br>
        <b>Payment Due:</b> @datetime($transaksi->created_at)
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
      <div class="col-xs-12 table-responsive">
        <table class="table table-striped">
          <thead>
          <tr>
            <th>Qty</th>
            <th>Product</th>
            <th>Harga</th>
            <th>Description</th>
            <th>Subtotal</th>
          </tr>
          </thead>
          <tbody>
          @foreach($transaksi->detail as $detail)
          <tr>
            <td>{{ $detail->qty }}</td>
            <td>{{ $detail->barang->nama_barang }}</td>
            <td>{{ $detail->barang->harga }}</td>
            <td style="max-width: 150px; word-wrap: break-word">{{ $detail->barang->deskripsi }}</td>
            <td>Rp.{{ ($detail->qty*$detail->barang->harga) }}</td>
          </tr>
          @endforeach
          </tbody>
          <tfooter>
            <tr>
              <th colspan="4">Total</th>
              <th>Rp.{{ $transaksi->total_harga }}</th>
            </tr>
          </tfooter>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
@endsection
