<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

    <!-- Global stylesheets -->
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="global_assets/css/icons/icomoon/styles.css"
      rel="stylesheet"
      type="text/css"
    />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/layout.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/components.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/colors.min.css" rel="stylesheet" type="text/css" />
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="global_assets/js/main/jquery.min.js"></script>
    <script src="global_assets/js/main/bootstrap.bundle.min.js"></script>
    <script src="global_assets/js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="global_assets/js/plugins/visualization/d3/d3.min.js"></script>
    <script src="global_assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
    <script src="global_assets/js/plugins/forms/styling/switchery.min.js"></script>
    <script src="global_assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
    <script src="global_assets/js/plugins/ui/moment/moment.min.js"></script>
    <script src="global_assets/js/plugins/pickers/daterangepicker.js"></script>

    <script src="assets/js/app.js"></script>
    <script src="global_assets/js/demo_pages/dashboard.js"></script>
    <!-- /theme JS files -->
  </head>

  <body>
    <!-- Main navbar -->
    <div class="navbar navbar-expand-md navbar-dark">
      <div class="navbar-brand">
        <a href="index.html" class="d-inline-block">
          <img src="global_assets/images/logo_light.png" alt="" />
        </a>
      </div>

      <div class="d-md-none">
        <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
          <i class="icon-paragraph-justify3"></i>
        </button>
      </div>

      <div class="collapse navbar-collapse" id="navbar-mobile">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a
              href="#"
              class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block"
            >
              <i class="icon-paragraph-justify3"></i>
            </a>
          </li>

          
        </ul>

        <span class="badge bg-success ml-md-3 mr-md-auto">Online</span>

        <ul class="navbar-nav">
          <li class="nav-item dropdown dropdown-user">
            <a
              href="#"
              class="navbar-nav-link d-flex align-items-center dropdown-toggle"
              data-toggle="dropdown"
            >
              <img
                src="https://media-exp1.licdn.com/dms/image/C5103AQEFtG9ztsfXnQ/profile-displayphoto-shrink_200_200/0?e=1594252800&v=beta&t=Bg0c2uMu2obIxdPZLjeMjZon4-ydqrOT692DB9V6llg"
                class="rounded-circle mr-2"
                height="34"
                alt=""
              />
              <span>Panut Santoso</span>
            </a>

            <div class="dropdown-menu dropdown-menu-right">
              <a href="#" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
              <a href="#" class="dropdown-item"><i class="icon-coins"></i> My balance</a>
              <a href="#" class="dropdown-item"
                ><i class="icon-comment-discussion"></i> Messages
                <span class="badge badge-pill bg-blue ml-auto">58</span></a
              >
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a>
              <a href="#" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <!-- /main navbar -->

    <!-- Page content -->
    <div class="page-content">
      <!-- Main sidebar -->
      <div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">
        <!-- Sidebar mobile toggler -->
        <div class="sidebar-mobile-toggler text-center">
          <a href="#" class="sidebar-mobile-main-toggle">
            <i class="icon-arrow-left8"></i>
          </a>
          Navigation
          <a href="#" class="sidebar-mobile-expand">
            <i class="icon-screen-full"></i>
            <i class="icon-screen-normal"></i>
          </a>
        </div>
        <!-- /sidebar mobile toggler -->

        <!-- Sidebar content -->
        <div class="sidebar-content">
          <!-- User menu -->
          <div class="sidebar-user">
            <div class="card-body">
              <div class="media">
                <div class="mr-3">
                  <a href="#"
                    ><img
                      src="img/qrcode.png"
                      width="50"
                      height="50"
                     
                      alt=""
                  /></a>
                </div>

                <div class="media-body">
                <b>KR-CK-PNUT-12-01</b>
                  <div class="font-size-xs opacity-50">
                    <i class="icon-pin font-size-sm"></i> &nbsp;RT 01 RW 12, Tegalsari, Candisari, Semarang
                  </div>
                </div>

                <div class="ml-3 align-self-center">
                  <a href="#" class="text-white"><i class="icon-cog3"></i></a>
                </div>
              </div>
            </div>
          </div>
          <!-- /user menu -->

          <!-- Main navigation -->
          <div class="card card-sidebar-mobile">
            <ul class="nav nav-sidebar" data-nav-type="accordion">
              <!-- Main -->
              <li class="nav-item-header">
                <div class="text-uppercase font-size-xs line-height-xs">Main</div>
                <i class="icon-menu" title="Main"></i>
              </li>
              <li class="nav-item">
                <a href="index.html" class="nav-link active">
                  <i class="icon-home4"></i>
                  <span>
                    Dashboard
                  </span>
                </a>
              </li>
              <li class="nav-item nav-item-submenu">
                <a href="#" class="nav-link"
                  ><i class="icon-user "></i> <span>Pengelolaan Pelanggan </span></a
                >
                <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                  <li class="nav-item">
                    <a href="index.html" class="nav-link ">Daftar Pelanggan</a>
                  </li>
                  <li class="nav-item">
                    <a href="index.html" class="nav-link ">Cetak Barcode</a>
                  </li>
                 
                </ul>
              </li>
              <li class="nav-item nav-item-submenu">
                <a href="#" class="nav-link"
                  ><i class="icon-user-plus "></i> <span>Tambah Pelanggan Baru</span></a
                >
                <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                  <li class="nav-item">
                    <a href="index.html" class="nav-link ">Tambah Pelanggan</a>
                  </li>
                  <li class="nav-item">
                    <a href="index.html" class="nav-link ">Pengaturan</a>
                  </li>
                 
                </ul>
              </li>
              <li class="nav-item nav-item-submenu">
                <a href="#" class="nav-link"
                  ><i class="icon-coins"></i> <span>Pembayaran Tagihan Air</span></a
                >
                <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                
                  <li class="nav-item">
                    <a href="index.html" class="nav-link active">Pembayaran  Bulanan</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../../../layout_2/LTR/default/full/index.html" class="nav-link"
                      >Pembayaran Online</a
                    >
                  </li>
                  <li class="nav-item">
                    <a href="../../../../layout_4/LTR/default/full/index.html" class="nav-link"
                      >Pengaturan</a
                    >
                  </li>
                  <li class="nav-item">
                    <a href="../../../../layout_4/LTR/default/full/index.html" class="nav-link"
                      >Laporan Pembayaran</a
                    >
                  </li>
                </ul>
              </li>
              <li class="nav-item nav-item-submenu">
                <a href="#" class="nav-link"
                  ><i class="icon-color-sampler"></i> <span>Pengelolaan Data Lama</span></a
                >
                <ul class="nav nav-group-sub" data-submenu-title="Themes">
                  <li class="nav-item">
                    <a href="index.html" class="nav-link active">Import Riwayat Data</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../../LTR/material/full/index.html" class="nav-link"
                      >Input Pemasukan Biaya</a
                    >
                  </li>
                  <li class="nav-item">
                    <a href="../../../LTR/material/full/index.html" class="nav-link"
                      >Laporan Pengelolaan</a
                    >
                  </li>
                </ul>
              </li>
              <li class="nav-item nav-item-submenu">
                <a href="#" class="nav-link"
                  ><i class="icon-cogs"></i> <span>Pengelolaan Biaya Keluar</span></a
                >

                <ul class="nav nav-group-sub" data-submenu-title="Starter kit">
                  <li class="nav-item">
                    <a href="../seed/layout_nav_horizontal.html" class="nav-link"
                      >Tambah Pengeluaran</a
                    >
                  </li>
                  <li class="nav-item">
                    <a href="../seed/sidebar_none.html" class="nav-link">Laporan Pengeluaran</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <!-- /main navigation -->
        </div>
        <!-- /sidebar content -->
      </div>
      <!-- /main sidebar -->

      <!-- Main content -->
      <div class="content-wrapper">
	@yield('content')
      
     

        <!-- Footer -->
        <div class="navbar navbar-expand-lg navbar-light">
          <div class="text-center d-lg-none w-100">
            <button
              type="button"
              class="navbar-toggler dropdown-toggle"
              data-toggle="collapse"
              data-target="#navbar-footer"
            >
              <i class="icon-unfold mr-2"></i>
              Footer
            </button>
          </div>

          <div class="navbar-collapse collapse" id="navbar-footer">
            <span class="navbar-text">
              &copy; 2020. <a href="#">Without Limit Production</a> by
              <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
            </span>

            <ul class="navbar-nav ml-lg-auto">
              <li class="nav-item">
                <a href="https://kopyov.ticksy.com/" class="navbar-nav-link" target="_blank"
                  ><i class="icon-lifebuoy mr-2"></i> Support</a
                >
              </li>
              <li class="nav-item">
                <a
                  href="http://demo.interface.club/limitless/docs/"
                  class="navbar-nav-link"
                  target="_blank"
                  ><i class="icon-file-text2 mr-2"></i> Dokumentasi</a
                >
              </li>
              <li class="nav-item">
                <a
                  href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov"
                  class="navbar-nav-link font-weight-semibold"
                  ><span class="text-pink-400"><i class="icon-cart2 mr-2"></i> Purchase</span></a
                >
              </li>
            </ul>
          </div>
        </div>
        <!-- /footer -->
      </div>
      <!-- /main content -->
    </div>
    <!-- /page content -->
  </body>
</html>
