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
         <x-hrsidebar/>
         <!-- /.sidebar -->
      </aside>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
         <!-- Content Header (Page header) -->
         <div class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
                  <div class="col-sm-6">
                     <h1 class="m-0">All Users</h1>
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-6">
                  </div>
                  <!-- /.col -->
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
                           <div class="card">
                              <div class="card-header">
                                 Add Salary
                              </div>
                              <div class="card-body">
                                 <form action="{{ route('hr.addsalary') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                       <label for="user_id">User</label>
                                       <select name="userid" class="form-control">
                                          @foreach ($users as $user)
                                          <option value="{{ $user->id }}">{{ $user->name }}</option>
                                          @endforeach
                                       </select>
                                    </div>
                                    <div class="form-group">
                                       <label for="month">Month</label>
                                       <input type="month" name="month" class="form-control">
                                    </div>
                                    <div class="form-group">
                                       <label for="amount">Amount</label>
                                       <input type="number" name="amount" class="form-control">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Add Salary</button>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- /.container-fluid -->
               </section>
               <!-- /.row -->
            </div>
         </div>
      </div>
      <footer class="main-footer">
      </footer>
      <aside class="control-sidebar control-sidebar-dark">
      </aside>
   </div>
   <x-footer/>
</body>
</html>