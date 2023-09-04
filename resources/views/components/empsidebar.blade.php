<div class="sidebar">
            <!-- Sidebar Menu -->
            <nav class="mt-2">
               <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  <!-- ... other menu items ... -->
                  <li class="nav-item">
                     <a href="/dashboard" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                           Users
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{route('employee.attendance')}}" class="nav-link">
                     <i class="nav-icon fas fa-calendar-check"></i>
                        <p>
                           Attendance
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                        <a href="{{ route('employee.salary') }}" class="nav-link">
                            <i class="nav-icon fas fa-money-bill"></i> 
                                <p>
                                Salaries
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