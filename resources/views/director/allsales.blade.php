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
               <div class="row">
                  <div class="col-md-6">
                     @if(session('error'))
                     <div class="alert alert-danger">
                        {{ session('error') }}
                     </div>
                     @endif
                  </div>
               </div>

               <!-- Display Sales Records -->
<div class="row">
   <div class="col-md-12">
    
      <div class="card">
         <div class="card-header">
            Sales Records List
            <div><!-- Add a link to generate the monthly sales report PDF -->
<a href="{{ route('sales.generate-monthly-pdf') }}" class="btn btn-primary">Generate Monthly Sales Report (PDF)</a>
</div>
         </div>
         <div class="card-body">
            <table class="table">
               <thead>
                  <tr>
                     <th>Date</th>
                     <th>Amount</th>
                     <th>Action</th> <!-- Add a new column for the edit action -->
                  </tr>
               </thead>
               <tbody>
                  @foreach ($salesRecords as $record)
                  <tr>
                     <td>{{ $record->date }}</td>
                     <td>{{ $record->sales_amount }}</td>
                     <td>
                        <a href="{{ route('sales.edit', $record->id) }}" class="btn btn-primary">Edit</a>
                        <!-- This links to the edit route with the sales record's ID -->
                     </td>
                  </tr>
                  @endforeach
               </tbody>
            </table>
         </div>
      </div>
   </div>
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
