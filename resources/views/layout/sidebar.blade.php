
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="{{asset('assets/img/pdp.png')}}" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Mohamed MOUNIR</a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->

            <li class="nav-item">
                <a href="{{url('dashboard')}}" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Page principale
                  </p>
                </a>
              </li>
            <li class="nav-item">
              <a href="{{url('data')}}" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Les données des clients
                </p>
              </a>
            </li>
            <li class="nav-item">
                <a href="{{url('data2')}}" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Les données des freelancers
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('booking')}}" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Booking
                  </p>
                </a>
              </li>
            <li class="nav-item">
                <a href="{{url('inbox')}}" class="nav-link">
                  <i class="nav-icon far fa-envelope"></i>
                  <p>
                    Inbox
                  </p>
                </a>
              </li>

              </ul>
            </li>

          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
