<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
       --><span class="brand-text font-weight-light">Admin Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('backend/assets/images/admin_logo.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name}}</a>
        </div>
      </div>



      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{url('/dashboard')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          @canany(['users-add','users-edit','users-view', 'users-delete'])
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Admin
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              @can('users-view')
              <li class="nav-item">
                <a href="{{route('admin.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Show Admins</p>
                </a>
              </li>
              @endcan
              @can('users-add')
              <li class="nav-item">
                <a href="{{route('admin.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Admin</p>
                </a>
              </li>
              @endcan
         
            </ul>
          </li>
          @endcan
          @canany(['roles-add','roles-view','roles-edit', 'roles-delete'])
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Roles
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              @can('roles-view')
              <li class="nav-item">
                <a href="{{route('roles.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Show Roles</p>
                </a>
              </li>
              @endcan
              @can('roles-add')
              <li class="nav-item">
                <a href="{{route('roles.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Role</p>
                </a>
              </li>
              @endcan
         
            </ul>
          </li>
          @endcan
          @canany(['tikas-view','tikas-add','tikas-edit', 'tikas-delete'])
            <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Tika
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              @can('tikas-view')
              <li class="nav-item">
                <a href="{{route('tika.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Show Tika</p>
                </a>
              </li>
              @endcan
              @can('tikas-add')
              <li class="nav-item">
                <a href="{{route('tika.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Tika</p>
                </a>
              </li>
              @endcan
         
            </ul>
          </li>
          @endcan
          @canany(['ward_stock-view','ward_stock-add','ward_stock-edit', 'ward_stock-delete', 'wards-view', 'wards-add', 'wards-edit', 'wards-delete'])
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Ward Stock
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              @can('ward_stock-add')
              <li class="nav-item">
                <a href="{{route('wardStockShow')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ward Stock Add</p>
                </a>
              </li>
              @endcan
              @can('ward_stock-view')
              <li class="nav-item">
                <a href="{{route('wardStockView')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ward Stock View</p>
                </a>
              </li>
              @endcan
              @can('ward_stock-uses')
               <li class="nav-item">
                <a href="{{route('viewWardUses')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ward Uses</p>
                </a>
              </li>
              @endcan
              @can('wards-view')
              <li class="nav-item">
                <a href="{{route('wardShow')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Ward</p>
                </a>
              </li>
              @endcan
            </ul>
          </li>
          @endcan
          @canany(['union_stocks-view','union_stocks-add','union_stocks-edit', 'ward_stock-delete', 'unions-view', 'unions-add', 'unions-edit', 'unions-delete'])
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Union Stock
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              @can('union_stocks-add')
              <li class="nav-item">
                <a href="{{route('unionStockShow')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Union Stock</p>
                </a>
              </li>
              @endcan
              @can('union_stocks-view')
              <li class="nav-item">
                <a href="{{route('unionStockView')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Union Stock View</p>
                </a>
              </li>
              @endcan
              @can('union_stock-uses')
               <li class="nav-item">
                <a href="{{route('viewUnionUses')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Union Uses</p>
                </a>
              </li>
              @endcan
              @can('unions-view')
              <li class="nav-item">
                <a href="{{route('unionShow')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Unions</p>
                </a>
              </li>
              @endcan
            </ul>
          </li>
          @endcan
          @canany(['upozilla_stock_models-view','upozilla_stock_models-add','upozilla_stock_models-edit', 'upozilla_stock_models-delete', 'upozillas-view', 'upozillas-add', 'upozillas-edit', 'upozillas-delete'])
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Upozilla Stock
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              @can('upozilla_stock_models-add')
              <li class="nav-item">
                <a href="{{route('upozillaStockShow')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Upozilla Stock</p>
                </a>
              </li>
              @endcan
              @can('upozilla_stock_models-view')
              <li class="nav-item">
                <a href="{{route('upozillaStockView')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Upozilla Stock View</p>
                </a>
              </li>
              @endcan
              @can('upozilla_stock-uses')
               <li class="nav-item">
                <a href="{{route('viewUpozillaUses')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Upozilla Uses</p>
                </a>
              </li>
              @endcan
              @can('upozillas-view')
              <li class="nav-item">
                <a href="{{route('upozillaShow')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Upozillas</p>
                </a>
              </li>
              @endcan
         
            </ul>
          </li>
          @endcan
          @canany(['give-tika','tika_uses-view','tika_uses-add', 'tika_uses-edit', 'tika_uses-delete'])
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                User Tika
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              @can('give-tika')
              <li class="nav-item">
                <a href="{{route('tika_given')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Give Tika</p>
                </a>
              </li>
              @endcan
              @can('tika_uses-add')
              <li class="nav-item">
                <a href="{{route('wardTikaUsesView')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tika Uses</p>
                </a>
              </li>
              @endcan
         
            </ul>
          </li>
          @endcan

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>