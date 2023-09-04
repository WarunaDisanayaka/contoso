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
      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
         <!-- Brand Logo -->
         <a href="/dashboard" class="brand-link">
         <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
         <span class="brand-text font-weight-light">HR</span>
         </a>
         <!-- Sidebar -->
         <x-hrsidebar/>

      </aside>
      <div class="content-wrapper">
         <div class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
                  <div class="col-sm-6">
                     <h1 class="m-0">Adding Users</h1>
                  </div>
                  <div class="col-sm-6">
                  </div>
               </div>
            </div>
            @if ($errors->any())
            <div class="alert alert-danger">
               <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
               </ul>
            </div>
            @endif
            <form action="{{ route('user.update', $user) }}" method="POST">
               @csrf
               @method('PUT') 
               <div class="card-body">
                  <div class="form-group">
                     <label for="name">Name</label>
                     <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="{{ $user->name }}">
                  </div>
                  <div class="form-group">
                     <label for="email">Email address</label>
                     <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="{{ $user->email }}">
                  </div>
                  <div class="form-group">
                     <label for="password">Password</label>
                     <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                  </div>
                  <div class="form-group">
                     <label for="role">User Role</label>
                     <select class="form-control" id="role" name="role">
                        <option value="employee">Employee</option>
                        <option value="hr">HR</option>
                        <option value="director">Director</option>
                     </select>
                  </div>
                  <button type="submit" class="btn btn-primary">Update</button>
               </div>
            </form>
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