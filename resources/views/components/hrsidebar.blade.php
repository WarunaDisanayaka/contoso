<div class="sidebar">
            <!-- Sidebar Menu -->
            <nav class="mt-2">
               <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  <!-- ... other menu items ... -->
                  <li class="nav-item">
                     <a href="{{ route('hr.addingusers') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i> <!-- Users Icon -->
                        <p>
                           Adding Users
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="" class="nav-link">
                        <i class="nav-icon fas fa-users"></i> <!-- Users Icon -->
                        <p>
                           All Users
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{ route('hr.usersattendance') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                           All Users Attendance
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{ route('hr.addsalaries') }}" class="nav-link">
                        <i class="nav-icon fas fa-dollar-sign"></i> 
                        <p>
                           Add salaries
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{ route('hr.allsalaries') }}" class="nav-link">
                     <i class="nav-icon fas fa-money-bill-wave"></i>
                        <p>
                           All salaries
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i>
                        <p>
                           {{ __('Logout') }}
                        </p>
                     </a>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                     </form>
                  </li>
               </ul>
            </nav>
            <!-- /.sidebar-menu -->
         </div>