<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ asset('asset_admin/dist/img/avatar5.png') }}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{ auth()->user()->nama }}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <li class="{{ request()->is('admin/transaksi*') ? 'active' : '' }}">
        <a href="{{ url('admin/transaksi') }}">
          <i class="fa fa-book"></i> <span>Data Penjualan</span>
        </a>
      </li>
      <li class="{{ request()->is('admin/barang*') ? 'active' : '' }}">
        <a href="{{ url('admin/barang') }}">
          <i class="fa fa-shopping-cart"></i> <span>Data Barang</span>
        </a>
      </li>
      <li class="{{ request()->is('admin/kategori*') ? 'active' : '' }}">
        <a href="{{ url('admin/kategori') }}">
          <i class="fa fa-cubes"></i> <span>Data Kategori</span>
        </a>
      </li>
      <li class="{{ request()->is('admin/user*') ? 'active' : '' }}">
        <a href="{{ url('admin/user') }}">
          <i class="fa fa-users"></i> <span>Data User</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
