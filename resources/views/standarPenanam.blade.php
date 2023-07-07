<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Standar Penanam</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ url('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ url('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ url('adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ url('adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('adminlte/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('sistem/dashboard') }}" class="brand-link">
      <img src="{{ url('adminlte/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Penanam</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      
      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

            <li class="nav-item">
              <a href="{{ url('sistem/dashboard') }}" class="nav-link">  
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
              </a>
            </li>
            
            
            <!-- Form CRUD -->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  Forms
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ url('admin/add/') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Admin</p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ url('sistem/add/') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Sistem</p>
                  </a>
                </li>
              </ul>
            </li>

            <!--Table-->
            <li class="nav-item menu-open">
              <a href="#" class="nav-link active">
               <i class="nav-icon fas fa-edit"></i>
                <p>
                  Tabel
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ url('sistem/') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Sistem</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('penanam/') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Penanam</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Standar Penanam</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('spk/kriteria') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Kriteria</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('user/') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data User</p>
                  </a>
                </li>
  

              </ul>
            </li>


          </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Standar Pembudidaya</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">

              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">

                <thead>
                  <tr>
                    <th>No.</th>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Tanggal Penanaman</th>
                    <th>Ph Air</th>
                    <th>Media Tanam</th>
                    <th>Jenis Air</th>
                    <th>Tingkat Perakitan</th>
                    <th>Lokasi Tanam</th>
                    <th>Penggunaan Listrik</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($pnm as $i => $penanam)
                  <tr>
                    <td>{{ $i+1 }}</td>
                    <td>{{ $penanam->id }}</td>
                    <td>{{ $penanam->nama }}</td>
                    <td>{{ $penanam->tanggal_penanaman }}</td>

                      @if($penanam->ph_air_id == '1')
                        <td> &#60 10 </td>
                      @elseif($penanam->ph_air_id == '2')
                        <td> &#60 7 </td>
                      @elseif($penanam->ph_air_id == '3')
                        <td> &#62 7 </td>
                      @endif
                    
                      @if($penanam->media_tanam_id == '1')
                        <td>Arang Sekam</td>
                      @elseif($penanam->media_tanam_id == '2')
                        <td>Kerikil</td>
                      @elseif($penanam->media_tanam_id == '3')
                        <td>Spons</td>
                      @elseif($penanam->media_tanam_id == '4')
                        <td>Serabut Kelapa</td>
                      @elseif($penanam->media_tanam_id == '5')
                        <td>Rockwool</td>
                      @endif
                    
                      @if($penanam->jenis_air_id == '1')
                        <td>Air Mancur</td>
                      @elseif($penanam->jenis_air_id == '2')
                        <td>Air Kolam</td>
                      @elseif($penanam->jenis_air_id == '3')
                        <td>Air Sumur</td>
                      @endif

                      @if($penanam->tingkat_perakitan_id == '1')
                        <td>Sulit</td>
                      @elseif($penanam->tingkat_perakitan_id == '2')
                        <td>Mudah</td>
                      @endif

                      @if($penanam->lokasi_tanam_id == '1')
                        <td>Tertutup</td>
                      @elseif($penanam->lokasi_tanam_id == '2')
                        <td>Terkena Matahari</td>
                      @endif

                      @if($penanam->penggunaan_listrik_id == '1')
                        <td>Menggunakan Listrik</td>
                      @elseif($penanam->penggunaan_listrik_id == '2')
                        <td>Terkadang Menggunakan</td>
                      @elseif($penanam->penggunaan_listrik_id == '3')
                      <td>Tidak Menggunakan</td>
                      @endif
                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ url('adminlte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ url('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- DataTables  & Plugins -->
<script src="{{ url('adminlte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ url('adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ url('adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ url('adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ url('adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ url('adminlte/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ url('adminlte/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ url('adminlte/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ url('adminlte/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ url('adminlte/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ url('adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ url('adminlte/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ url('adminlte/dist/js/demo.js') }}"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
