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
         <span class="brand-text font-weight-light">Employee</span>
         </a>
         <!-- Sidebar -->
         <div class="sidebar">
            <!-- Sidebar Menu -->
            <x-empsidebar/>
            <!-- /.sidebar-menu -->
         </div>
         <!-- /.sidebar -->
      </aside>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
         <!-- Content Header (Page header) -->
         <div class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
                  <div class="col-sm-6">
                     <h1 class="m-0">Your Salary</h1>
                  </div>
               </div>
            </div>
         </div>
         <section class="content">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-12">
                     <div class="card">
                        <div class="card-body">
                           <h5 class="card-title">Salary Information</h5>
                           @if ($salary)
                           <table class="table">
                              <thead>
                                 <tr>
                                    <th>Name</th>
                                    <th>Month</th>
                                    <th>Amount</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td>{{ $user->name  }}</td>
                                    <td>{{ $salary->month }}</td>
                                    <td>{{ $salary->amount }}</td>
                                    <td>
        <a href="{{ route('generate.slip', ['userId' => Auth::id(), 'month' => $salary->month]) }}" class="btn btn-primary">Download Slip</a>
    </td>
                                 </tr>
                              </tbody>
                           </table>
                           @else
                           <p>No salary information available.</p>
                           @endif
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- /.container-fluid -->
         </section>
      </div>
      <footer class="main-footer">
      </footer>
      <aside class="control-sidebar control-sidebar-dark">
      </aside>
   </div>
   <x-footer/>
</body>
</html>