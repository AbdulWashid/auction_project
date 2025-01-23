      <!--begin::Sidebar-->
      <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
        <!--begin::Sidebar Brand-->
        <div class="sidebar-brand">
          <!--begin::Brand Link-->
          <a href="{{route('admin.index')}}" class="brand-link">
            <!--begin::Brand Image-->
            <img
              src="{{asset('Admin/assets/img/AdminLTELogo.png')}}"
              alt="AdminLTE Logo"
              class="brand-image opacity-75 shadow"
            />
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-light">AdminLTE 4</span>
            <!--end::Brand Text-->
          </a>
          <!--end::Brand Link-->
        </div>
        <!--end::Sidebar Brand-->
        <!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper">
          <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul
              class="nav sidebar-menu flex-column"
              data-lte-toggle="treeview"
              role="menu"
              data-accordion="false"
            >
              <li class="nav-item menu-open">
                <a href="{{route('admin.index')}}" class="{{Request::is('admin/index*') ? 'nav-link ' : 'nav-link active'}}">
                  <i class="nav-icon bi bi-speedometer"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>

              <li class="nav-item menu-open">
                <a href="{{route('admin.category.index')}}" class="{{Request::is('admin/category*') ? 'nav-link' : 'nav-link active'}}">
                  <i class="nav-icon bi bi-speedometer"></i>
                  <p>
                    Categories
                  </p>
                </a>
              </li>

              <li class="nav-item menu-open">
                <a href="{{route('admin.product.index')}}" class="{{Request::is('admin/product*') ? 'nav-link ' : 'nav-link active'}}">
                  <i class="nav-icon bi bi-speedometer"></i>
                  <p>
                    Products
                  </p>
                </a>
              </li>
              <li class="nav-item menu-open">
                <a href="{{route('admin.feature.index')}}" class="{{Request::is('admin/feature*') ? 'nav-link' : 'nav-link active'}}">
                  <i class="nav-icon bi bi-speedometer"></i>
                  <p>
                    Features
                  </p>
                </a>
              </li>
              <li class="nav-item menu-open">
                <a href="{{route('admin.user.show')}}" class="{{Request::is('admin/user') ? 'nav-link' : 'nav-link active'}}">
                  <i class="nav-icon bi bi-speedometer"></i>
                  <p>
                    Users
                  </p>
                </a>
              </li>
              <li class="nav-item menu-open">
                <a href="{{route('admin.product.index')}}" class="nav-link active">
                  <i class="nav-icon bi bi-speedometer"></i>
                  <p>
                    Orders
                  </p>
                </a>
              </li>
            </ul>
            <!--end::Sidebar Menu-->
          </nav>
        </div>
        <!--end::Sidebar Wrapper-->
      </aside>
      <!--end::Sidebar-->