<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>SI CRM | Dashboard</title>
  <link rel="icon" href="{{ asset('img/Logo.png') }}" />
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="source/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="source/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="source/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="source/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="source/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="source/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="source/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="source/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="source/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="source/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  {{-- Toaster CDN CSS --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">
  <header class="main-header">
        <!-- Logo -->
        <a href="/" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>C</b>RM</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>SI-</b>CRM</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button-->
          <a
            href="#"
            class="sidebar-toggle"
            data-toggle="push-menu"
            role="button"
          >
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img
                    src="img/Logo.png"
                    class="user-image"
                    alt="User Image"
                  />
                  <span class="hidden-xs">Admin Laundry</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img
                      src="img/Logo.png"
                      class="img-circle"
                      alt="User Image"
                    />
                    <p>
                      Admin Laundry
                      <small>Karyawan - K0001</small>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img
                src="img/Logo.png"
                class="img-circle"
                alt="User Image"
              />
            </div>
            <div class="pull-left info">
              <p>SI CRM</p>
              <small>By: Putra Prasetya Utama</small>
            </div>
          </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" data-widget="tree">
            <!-- Main Menu -->
            <li class="header">Menu Utama</li>
            <!-- Menu Dashboard -->
            <li>
              <a href="/">
                <i class="fa fa-home"></i> <span>Dashboard</span>
              </a>
            </li>
            <!-- Menu Pelaku Sistem -->
            <li class="treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Data Pelaku</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li>
                  <a href="/karyawan"
                    ><i class="fa fa-circle-o"></i> Data Karyawan</a
                  >
                </li>
                <li>
                  <a href="/member"
                    ><i class="fa fa-circle-o"></i> Data Member</a
                  >
                </li>
                <li>
                  <a href="/pelanggan"
                    ><i class="fa fa-circle-o"></i> Data Pelanggan</a
                  >
                </li>
                <li>
                  <a href="/pengguna"
                    ><i class="fa fa-circle-o"></i> Data Pengguna</a
                  >
                </li>
              </ul>
            </li>
            <!-- Menu Jasa -->
            <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Jasa</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li>
                  <a href="/Jasa"
                    ><i class="fa fa-circle-o"></i> Jasa Laundry</a
                  >
                </li>
                <li>
                  <a href="/jasaTransaksi"
                    ><i class="fa fa-circle-o"></i> Jenis Transaksi</a
                  >
                </li>
              </ul>
            </li>
            <!-- Menu Data Pemasok -->
            <li class="treeview">
              <a href="#">
                <i class="fa fa-table"></i> <span>Data Pemasok</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li>
                  <a href="/distributor"
                    ><i class="fa fa-circle-o"></i> Data Distributor</a
                  >
                </li>
                <li>
                  <a href="/barang"
                    ><i class="fa fa-circle-o"></i> Data Barang</a
                  >
                </li>
              </ul>
            </li>
            <!-- Menu Saran Kritik -->
            <li>
              <a href="/SaranKritik">
                <i class="fa fa-envelope-o"></i> <span>Saran & Kritik</span>
              </a>
            </li>
            {{-- Menu Data Poin --}}
            <li class="treeview">
              <a href="#">
                <i class="fa fa-file-powerpoint-o"></i> <span>Data Poin</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li>
                  <a href="/Poin"
                    ><i class="fa fa-circle-o"></i> Poin</a
                  >
                </li>
                <li>
                  <a href="/PenukaranPoin"
                    ><i class="fa fa-circle-o"></i> Penukaran Poin</a
                  >
                </li>
              </ul>
            </li>
            <!-- Menu Transaksi -->
            <li class="treeview">
              <a href="#">
                <i class="fa fa-file-powerpoint-o"></i> <span>Transaksi</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li>
                  <a href="/RTransaksiMember"
                    ><i class="fa fa-circle-o"></i> Transaksi Member</a
                  >
                </li>
                <li>
                  <a href="/RTransaksiPelanggan"
                    ><i class="fa fa-circle-o"></i> Transaksi Pelanggan</a
                  >
                </li>
              </ul>
            </li>
            <!-- 2nd Menu -->
            <li class="header">Menu Laporan</li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-edit"></i> <span>Laporan</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li>
                  <a href="/rtMember"
                    ><i class="fa fa-file-pdf-o"></i> Laporan Transaksi Member</a
                  >
                </li>
                <li>
                  <a href="/rtPelanggan"
                    ><i class="fa fa-file-pdf-o"></i> Laporan Transaksi Pelanggan</a
                  >
                </li>
                <li>
                  <a href="lKaryawan"
                    ><i class="fa fa-file-pdf-o"></i> Laporan Karyawan</a
                  >
                </li>
                <li>
                  <a href="lMember"
                    ><i class="fa fa-file-pdf-o"></i> Laporan Member</a
                  >
                </li>
                <li>
                  <a href="lPelanggan"
                    ><i class="fa fa-file-pdf-o"></i> Laporan Pelanggan</a
                  >
                </li>
                <li>
                  <a href="/lJasa"
                    ><i class="fa fa-file-pdf-o"></i> Laporan Jasa</a
                  >
                </li>
              </ul>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- box 1 -->
      <div class="box box-info color-palette-box">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="ion ion-ios-people"></i> Pelaku</h3>
            </div>
            <div class="box-body"> 
              <!-- Baris Pertama -->
                <div class="row">
                    <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                        <h3>{{ $totalkaryawan }}</h3>

                        <p>Total Karyawan</p>
                        </div>
                        <div class="icon">
                        <i class="ion ion-man"></i>
                        <i class="ion ion-woman"></i>
                        </div>
                        <a href="/karyawan" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                        <h3>{{ $totalmember }}</h3>

                        <p>Total Member</p>
                        </div>
                        <div class="icon">
                        <i class="ion ion-person-add"></i>
                        </div>
                        <a href="/member" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                        <h3>{{ $totalpelanggan }}</h3>

                        <p>Total Pelanggan</p>
                        </div>
                        <div class="icon">
                        <i class="ion ion-person"></i>
                        </div>
                        <a href="/pelanggan" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                        <h3>{{ $totalpengguna }}</h3>

                        <p>Total Pengguna</p>
                        </div>
                        <div class="icon">
                        <i class="ion ion-person-stalker"></i>
                        </div>
                        <a href="/pengguna" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                    </div>
                    <!-- ./col -->
                </div>
              <!-- /.row -->
            </div>
            <!-- /.box-body -->
      </div> 
      <!-- End Box 1 -->
      <!-- box 2 -->
      <div class="box box-success color-palette-box">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="ion ion-ios-pricetag"></i> Jasa</h3>
            </div>
            <div class="box-body"> 
              <!-- Baris Kedua -->
                <div class="row">
                    <div class="col-lg-6 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-green">
                            <div class="inner">
                            <h3>{{ $totaljasa }}</h3>

                            <p>Jasa Laundry</p>
                            </div>
                            <div class="icon">
                            <i class="ion ion-tshirt"></i>
                            </div>
                            <a href="/Jasa" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-6 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-green">
                            <div class="inner">
                            <h3>{{ $totaljenistransaksi }}</h3>

                            <p>Jenis Transaksi</p>
                            </div>
                            <div class="icon">
                            <i class="ion ion-card"></i>
                            </div>
                            <a href="/jasaTransaksi" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.box-body -->
      </div> 
      <!-- End Box 2 -->
      <!-- box 3 -->
      <div class="box box-warning color-palette-box">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-industry "></i> Pemasok</h3>
            </div>
            <div class="box-body"> 
              <!-- Baris Ketiga -->
                <div class="row">
                    <div class="col-lg-6 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                        <h3>{{ $totaldistributor }}</h3>

                        <p>Data Distributor</p>
                        </div>
                        <div class="icon">
                        <i class="ion ion-home"></i>
                        </div>
                        <a href="/distributor" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-6 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                        <h3>{{ $totalbarang }}</h3>

                        <p>Data Barang</p>
                        </div>
                        <div class="icon">
                        <i class="ion ion-bag"></i>
                        </div>
                        <a href="/barang" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.box-body -->
      </div> 
      <!-- End Box 3 -->
      <!-- box 4 -->
      <div class="box box-warning color-palette-box">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-fax "></i> Point</h3>
            </div>
            <div class="box-body"> 
              <!-- Baris Ketiga -->
                <div class="row">
                    <div class="col-lg-6 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-purple">
                        <div class="inner">
                        <h3>{{ $totalpoin }}</h3>

                        <p>Data Poin</p>
                        </div>
                        <div class="icon">
                        <i class="ion ion-ribbon-b"></i>
                        </div>
                        <a href="/Poin" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-6 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-purple">
                        <div class="inner">
                        <h3>{{ $totalpenukaranpoin }}</h3>

                        <p>Data Penukaran Poin</p>
                        </div>
                        <div class="icon">
                          <i class="ion ion-ribbon-a"></i>
                        <i class="ion ion-arrow-swap"></i>
                        <i class="ion ion-cash"></i>
                        </div>
                        <a href="/PenukaranPoin" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.box-body -->
      </div> 
      <!-- End Box 4 -->
      <!-- box 5 -->
      <div class="box box-primary color-palette-box">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="ion ion-ios-email"></i> Saran & Kritik</h3>
            </div>
            <div class="box-body"> 
              <!-- Baris Keempat -->
                <div class="row">
                    <div class="col-lg-12 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-blue">
                        <div class="inner">
                        <h3>{{ $totalsarankritik }}</h3>

                        <p>Saran & Kritik</p>
                        </div>
                        <div class="icon">
                        <i class="ion ion-chatboxes"></i>
                        </div>
                        <a href="/SaranKritik" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.box-body -->
      </div> 
      <!-- End Box 5 -->
      <!-- box 6 -->
      <div class="box box-warning color-palette-box">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-calculator "></i> Transaksi</h3>
            </div>
            <div class="box-body"> 
                <!-- row -->
                <div class="row">
                    <div class="col-lg-6 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-orange">
                        <div class="inner">
                        <h3>{{ $totalrtransaksimember }}</h3>

                        <p>Transaksi Member</p>
                        </div>
                        <div class="icon">
                        <i class="ion ion-person-add"></i>
                        </div>
                        <a href="/RTransaksiMember" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-6 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-orange">
                        <div class="inner">
                        <h3>{{ $totalrtransaksipelanggan }}</h3>

                        <p>Transaksi Pelanggan</p>
                        </div>
                        <div class="icon">
                        <i class="ion ion-person"></i>
                        </div>
                        <a href="/RTransaksiPelanggan" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.box-body -->
      </div> 
      <!-- End Box 6 -->
      <!-- box 7 -->
      <div class="box box-danger color-palette-box">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="ion ion-ios-printer"></i> Laporan</h3>
            </div>
            <div class="box-body"> 
                <div class="row">
                    <div class="col-lg-4 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                        <h3>{{ $totalrtransaksimember }}</h3>

                        <p>Laporan Transaksi Member</p>
                        </div>
                        <div class="icon">
                        <i class="ion ion-person-add"></i>
                        <i class="ion ion-document-text"></i>
                        </div>
                        <a href="/rtMember" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-4 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                        <h3>{{ $totalrtransaksipelanggan }}</h3>

                        <p>Laporan Transaksi Pelanggan</p>
                        </div>
                        <div class="icon">
                        <i class="ion ion-person"></i>
                        <i class="ion ion-document-text"></i>
                        </div>
                        <a href="/rtPelanggan" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                    </div>
                    <div class="col-lg-4 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                        <h3>{{ $totaljasa }}</h3>

                        <p>Laporan Jasa</p>
                        </div>
                        <div class="icon">
                        <i class="ion ion-document-text"></i>
                        </div>
                        <a href="/lJasa" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-4 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                        <h3>{{ $totalkaryawan }}</h3>

                        <p>Laporan Karyawan</p>
                        </div>
                        <div class="icon">
                        <i class="ion ion-man"></i>
                        <i class="ion ion-woman"></i>
                        <i class="ion ion-document-text"></i>
                        </div>
                        <a href="/lKaryawan" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-4 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                        <h3>{{ $totalmember }}</h3>

                        <p>Laporan Member</p>
                        </div>
                        <div class="icon">
                        <i class="ion ion-person"></i>
                        <i class="ion ion-document-text"></i>
                        </div>
                        <a href="/lMember" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-4 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                        <h3>{{ $totalpelanggan }}</h3>

                        <p>Laporan Pelanggan</p>
                        </div>
                        <div class="icon">
                        <i class="ion ion-person-stalker"></i>
                        <i class="ion ion-document-text"></i>
                        </div>
                        <a href="/lPelanggan" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.box-body -->
      </div> 
      <!-- End Box 7 -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 0.9.1
    </div>
    <strong>Copyright &copy; 2023 <a href="https://adminlte.io">AdminLTE</a> | Putra Prasetya Utama</strong> All rights
    reserved.
  </footer>
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

  <!-- jQuery 3 -->
  <script src="source/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="source/bower_components/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button);
  </script>
  <!-- Bootstrap 3.3.7 -->
  <script src="source/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- Morris.js charts -->
  <script src="source/bower_components/raphael/raphael.min.js"></script>
  <script src="source/bower_components/morris.js/morris.min.js"></script>
  <!-- Sparkline -->
  <script src="source/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
  <!-- jvectormap -->
  <script src="source/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="source/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="source/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="source/bower_components/moment/min/moment.min.js"></script>
  <script src="source/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
  <!-- datepicker -->
  <script src="source/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <!-- Bootstrap WYSIHTML5 -->
  <script src="source/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
  <!-- Slimscroll -->
  <script src="source/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="source/bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="source/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="source/dist/js/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="source/dist/js/demo.js"></script>
  {{-- Toaster CDN --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
