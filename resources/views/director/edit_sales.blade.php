<x-header/>
<body class="hold-transition sidebar-mini layout-fixed">
   <div class="wrapper">
      <!-- Preloader -->
      <div class="preloader flex-column justify-content-center align-items-center">
         <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
      </div>
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
         <!-- Left navbar links -->
         <ul class="navbar-nav">
            <li class="nav-item">
               <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
         </ul>
      </nav>
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
         <!-- Brand Logo -->
         <a href="/dashboard" class="brand-link">
         <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
         <span class="brand-text font-weight-light">HR</span>
         </a>
         <!-- Sidebar -->
         <x-drsidebar/>
         <!-- /.sidebar -->
      </aside>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
         <!-- Content Header (Page header) -->
         <div class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
                  <div class="col-sm-6">
                     <h1 class="m-0">Sales Records</h1>
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-6">
                  </div>
                  <!-- /.col -->
               </div>
            </div>
         </div>
         <section class="content">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-6">
                  </div>
                  <!-- /.col -->
                  <div class="col-md-6">
                  </div>
                  <!-- /.col -->
               </div>
               <div class="container">
    <h1>Edit Sales Record</h1>
    <form action="{{ route('sales.update', $salesRecord->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Use PUT request for updating -->

        <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" name="date" class="form-control" value="{{ $salesRecord->date }}">
        </div>
        <div class="form-group">
            <label for="amount">Amount:</label>
            <input type="number" name="amount" class="form-control" value="{{ $salesRecord->sales_amount }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Sales Record</button>
    </form>
</div>
            </div>
            <!-- /.container-fluid -->
         </section>
         <!-- /.row -->
      </div>
      <footer class="main-footer">
      </footer>
      <aside class="control-sidebar control-sidebar-dark">
      </aside>
   </div>
   <x-footer/>
</body>
</html>
