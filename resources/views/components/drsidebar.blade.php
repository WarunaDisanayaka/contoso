<div class="sidebar">
            <!-- Sidebar Menu -->
            <nav class="mt-2">
               <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  <!-- ... other menu items ... -->
                  <li class="nav-item">
                     <a href="{{route('director.sales')}}" class="nav-link">
                     <i class="nav-icon fas fa-shopping-cart"></i>
                        <p>
                           Sales
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{route('sales.allsales')}}" class="nav-link">
                     <i class="nav-icon fas fa-chart-line"></i>
                        <p>
                           All sales
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{ route('dr.users') }}" class="nav-link">
                     <i class="nav-icon fas fa-users"></i> 
                        <p>
                           All Users
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