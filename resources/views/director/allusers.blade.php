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
         <span class="brand-text font-weight-light">Director</span>
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
                              <div class="card-header">
                                 <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                       <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                                       <div class="input-group-append">
                                          <button type="submit" class="btn btn-default">
                                          <i class="fas fa-search"></i>
                                          </button>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <!-- /.card-header -->
                              <div class="card-body table-responsive p-0" style="height: 300px;">
                                 <table class="table table-head-fixed text-nowrap">
                                    <thead>
                                       <tr>
                                          <th>ID</th>
                                          <th>User</th>
                                          <th>Email</th>
                                          <th>Role</th>
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
                                             @foreach ($user->roles as $role)
                                             {{ $role->name }}
                                             @endforeach
                                          </td>
                                          <td>
                                             <a href="edit/{{$user->id}}" class="btn btn-primary">Edit</a>
                                             <a href="delete/{{$user->id}}" class="btn btn-danger">Delete</a>
                                          </td>
                                       </tr>
                                       @endforeach
                                    </tbody>
                                 </table>
                              </div>
                              <!-- /.card-body -->
                           </div>
                           <!-- /.card -->
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