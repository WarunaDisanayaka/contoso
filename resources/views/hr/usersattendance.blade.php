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
                        <div class="col-12">
                           <div class="card">
                              <!-- ... your previous code ... -->
                              <div class="card-body table-responsive p-0" style="height: 300px;">
                                 <table class="table table-head-fixed text-nowrap">
                                    <thead>
                                       <tr>
                                          <th>ID</th>
                                          <th>User</th>
                                          <th>Email</th>
                                          <th>Check-in</th>
                                          <th>Check-out</th>
                                          <th>Action</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       @foreach ($users as $user)
                                       <tr>
                                          <td>{{ $user->id }}</td>
                                          <td>{{ $user->name }}</td>
                                          <td>{{ $user->email }}</td>
                                          <td>
                                             @if ($user->attendances->isEmpty())
                                             No attendance recorded
                                             @else
                                             @foreach ($user->attendances as $attendance)
                                             {{ $attendance->check_in_date_time }}
                                             <br>
                                             @endforeach
                                             @endif
                                          </td>
                                          <td>
                                             @if ($user->attendances->isEmpty())
                                             No attendance recorded
                                             @else
                                             @foreach ($user->attendances as $attendance)
                                             {{ $attendance->check_out_date_time ?: 'Not checked out yet' }}
                                             <br>
                                             @endforeach
                                             @endif
                                          </td>
                                          <td>
                                             <a href="edit/{{$user->id}}" class="btn btn-primary">Edit</a>
                                             <a href="" class="btn btn-danger">Delete</a>
                                          </td>
                                       </tr>
                                       @endforeach
                                    </tbody>
                                 </table>
                              </div>
                              <!-- ... your previous code ... -->
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