<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Tambah Sistem</title>

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
      <span class="brand-text font-weight-light">AdminLTE 3</span>
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
           <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Forms
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('user/add/') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Admin</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('sistem/add/') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Sistem</p>
                </a>
              </li>
            </ul>
          </li>

           <!--Table-->
           <li class="nav-item">
            <a href="#" class="nav-link">
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
                <a href="{{ url('penanam/standar') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Standar Penanam</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
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
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Sistem</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
            
              <!-- form start -->
              <form method="post" action="{{ url('/sistem/store') }}">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="namaSistem">Nama Sistem</label>
                    <input type="text" class="form-control" name="namaSistem" id="namaSistem" value="{{ old('namaSistem') }}">
                        @error('namaSistem')
                          <p style="color: red; font-size: small;">{{ $message }}</p>
                        @enderror
                  </div>

                  <div class="form-group">
                    <label for="phAir">Media Tanam</label>
                        <select class="form-control" name="phAir" id="phAir">
                        @foreach($phAir as $i => $ph_air)
                       <option value="{{ $ph_air->id }}" {{ "$ph_air->id" == old('phAir') ? 'selected' : ''}}>{{ $ph_air->ph_air }}</option>
                       @endforeach
                       </select>
                    <p for="exluasLahan" style="color: grey; font-size: small;">*kurang dari 7</p>
                        @error('phAir')
                        <p style="color: red; font-size: small;">{{ $message }}</p>
                        @enderror
                  </div>

                  <div class="form-group">
                    <label for="mediaTanam">Media Tanam</label>
                        <select class="form-control" name="mediaTanam" id="mediaTanam">
                        @foreach($mediaTanam as $i => $media_tanam)
                       <option value="{{ $media_tanam->id }}" {{ "$media_tanam->id" == old('mediaTanam') ? 'selected' : ''}}>{{ $media_tanam->media_tanam }}</option>
                       @endforeach
                       </select>
                  </div>

                  <div class="form-group">
                    <label for="jenisAir">Jenis Air</label>
                    <select class="form-control" name="jenisAir" id="jenisAir">
                      @foreach($jenisAir as $i => $jenis_air)
                      <option value="{{ $jenis_air->id }}" {{ "$jenis_air->id" == old('jenisAir') ? 'selected' : ''}}>{{ $jenis_air->jenis_air }}</option>
                      @endforeach
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="tingkatPerakitan">Tingakat Perakitan</label>
                    <select class="form-control" name="tingkatPerakitan" id="tingkatPerakitan">
                        @foreach($tingkatPerakitan as $i => $tingkat_perakitan)
                       <option value="{{ $tingkat_perakitan->id }}" {{ "$tingkat_perakitan->id" == old('tingkatPerakitan') ? 'selected' : ''}}>{{ $tingkat_perakitan->tingkat_perakitan }}</option>
                       @endforeach
                       </select>
                  </div>

                  <div class="form-group">
                    <label for="lokasiTanam">Lokasi Tanam</label>
                    <select class="form-control" name="lokasiTanam" id="lokasiTanam">
                        @foreach($lokasiTanam as $i => $lokasi_tanam)
                        <option value="{{ $lokasi_tanam->id }}" {{ "$lokasi_tanam->id" == old('lokasiTanam') ? 'selected' : ''}}>{{ $lokasi_tanam->lokasi_tanam }}</option>
                        @endforeach
                        </select>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="penggunaanListrik">Penggunaan Listrik</label>
                    <select class="form-control" name="penggunaanListrik" id="penggunaanListrik">
                        @foreach($penggunaanListrik as $i => $penggunaan_listrik)
                        <option value="{{ $penggunaan_listrik->id }}" {{ "$penggunaan_listrik->id" == old('penggunaanListrik') ? 'selected' : ''}}>{{ $penggunaan_listrik->penggunaan_listrik }}</option>
                         @endforeach
                    </select>
                  </div>
           
                </div>
                <!-- /.card-body -->


                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>



      

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
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
