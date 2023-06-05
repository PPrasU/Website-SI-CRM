<!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img
                src="{{ asset('img/Logo.png') }}"
                class="img-circle"
                alt="User Image"
              />
            </div>
            <div class="pull-left info">
              <p>Admin Laundry</p>
              <small>Control panel</small>
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
                    ><i class="fa fa-circle-o"></i> Jasa Transaksi</a
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
            <!-- Menu Data Poin -->
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
                  <a href="/lKaryawan"
                    ><i class="fa fa-file-pdf-o"></i> Laporan Karyawan</a
                  >
                </li>
                <li>
                  <a href="/lMember"
                    ><i class="fa fa-file-pdf-o"></i> Laporan Member</a
                  >
                </li>
                <li>
                  <a href="/lPelanggan"
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