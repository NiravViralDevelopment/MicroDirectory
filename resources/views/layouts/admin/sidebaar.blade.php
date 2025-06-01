<!-- ======= Sidebar ======= -->

<aside id="sidebar" class="sidebar">
  <div class="clickSlick">
    <i class="bi bi-chevron-right toggle-sidebar-btn"></i>
  </div>
    <ul class="sidebar-nav" id="sidebar-nav">
        @can('Dashboard')
        <li class="nav-item {{ Route::currentRouteName() == 'dashboard' ? 'active' : '' }}">
            <a class="nav-link" href="{{route('dashboard')}}">
                <img src="{{asset('admin')}}/img/dashboard.png" class="img-fluid iconNav hide" alt="dashboard icon">
                <img src="{{asset('admin')}}/img/dashboard-white.png" class="img-fluid iconNav show" alt="dashboard icon"> <!-- Dashboard icon -->
                <span>Dashboard</span>
            </a>
        </li>
        @endcan
        @can('role-list')
        <li class="nav-item {{ in_array(Route::currentRouteName(), ['roles.index', 'roles.edit', 'roles.show','roles.create']) ? 'active' : '' }}">
            <a class="nav-link" href="{{route('roles.index')}}">
                <img src="{{asset('admin')}}/img/roles.png" class="img-fluid iconNav hide" alt="role icon">
                <img src="{{asset('admin')}}/img/roles-white.png" class="img-fluid iconNav show" alt="role icon"> <!-- Roles icon -->
                <span>Category</span>
            </a>
        </li>
        @endcan
        {{-- @can('user-list')
        <li class="nav-item {{ in_array(Route::currentRouteName(), ['users.index', 'users.edit', 'users.show','users.create']) ? 'active' : '' }}">
            <a class="nav-link" href="{{route('users.index')}}">
                <img src="{{asset('admin')}}/img/users.png" class="img-fluid iconNav hide" alt="users icon">
                <img src="{{asset('admin')}}/img/users-white.png" class="img-fluid iconNav show" alt="users icon"> <!-- Users icon -->
                <span>Users</span>
            </a>
        </li>
        @endcan --}}

        @can('user-list')
            <li class="nav-item dropdown {{ in_array(Route::currentRouteName(), ['countries', 'countries-create','countries-edit','experiences.index', 'experiences.create', 'experiences.edit','languages.index', 'languages.create', 'languages.edit','products.index', 'products.create', 'products.edit']) ? 'active' : '' }}">
                <a class="nav-link collapsed" data-bs-toggle="collapse" href="#usersSubMenu" aria-expanded="{{ in_array(Route::currentRouteName(), ['countries', 'countries-create','countries-edit','experiences.index', 'experiences.create', 'experiences.edit','languages.index', 'languages.create', 'languages.edit','products.index', 'products.create', 'products.edit']) ? 'true' : 'false' }}">
                    <img src="{{ asset('admin') }}/img/users.png" class="img-fluid iconNav hide" alt="users icon">
                    <img src="{{ asset('admin') }}/img/users-white.png" class="img-fluid iconNav show" alt="users icon">
                    <span>Master</span>
                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="usersSubMenu" class="nav-content collapse {{ in_array(Route::currentRouteName(), ['countries', 'countries-create','countries-edit','experiences.index', 'experiences.create', 'experiences.edit','languages.index', 'languages.create', 'languages.edit','products.index', 'products.create', 'products.edit']) ? 'show' : '' }}" data-bs-parent="#sidebar-nav">
                    <li>
                       <a href="{{ route('countries') }}" class="{{ in_array(Route::currentRouteName(), ['countries', 'countries-create', 'countries-edit']) ? 'active' : '' }}">
                            <i class="bi bi-circle"></i><span>Country</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('experiences.index') }}" class="{{ in_array(Route::currentRouteName(), ['experiences.index', 'experiences.create', 'experiences.edit']) ? 'active' : '' }}">
                            <i class="bi bi-circle"></i><span>Expreriance</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('languages.index') }}" class="{{ in_array(Route::currentRouteName(), ['languages.index', 'languages.create', 'languages.edit']) ? 'active' : '' }}">
                            <i class="bi bi-circle"></i><span>Language</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('products.index') }}"class="{{ in_array(Route::currentRouteName(), ['products.index', 'products.create', 'products.edit']) ? 'active' : '' }}">
                            <i class="bi bi-circle"></i><span>Other</span>
                        </a>
                    </li>

                </ul>
            </li>
        @endcan

        @can('Manage Countries')
            <li class="nav-item {{ in_array(Route::currentRouteName(), ['users.index', 'users.create','users.edit','users.show']) ? 'active' : '' }}">
                <a class="nav-link" href="{{route('users.index')}}">
                    <img src="{{asset('admin')}}/img/order-items.png" class="img-fluid iconNav hide" alt="order items icon">
                    <img src="{{asset('admin')}}/img/order-items-white.png" class="img-fluid iconNav show" alt="role icon"> <!-- Order-Items icon -->
                    <span>Directory List</span>
                </a>
            </li>
        @endcan

        <li class="nav-item">
            <a class="nav-link" href="#">
                <img src="{{asset('admin')}}/img/order-items.png" class="img-fluid iconNav hide" alt="order items icon">
                <img src="{{asset('admin')}}/img/order-items-white.png" class="img-fluid iconNav show" alt="role icon"> <!-- Order-Items icon -->
                <span>CMS</span>
            </a>
        </li>

        {{-- @can('Manage Countries')
            <li class="nav-item {{ in_array(Route::currentRouteName(), ['countries', 'countries-create','countries-edit']) ? 'active' : '' }}">
                <a class="nav-link" href="{{route('countries')}}">
                    <img src="{{asset('admin')}}/img/order-items.png" class="img-fluid iconNav hide" alt="order items icon">
                    <img src="{{asset('admin')}}/img/order-items-white.png" class="img-fluid iconNav show" alt="role icon"> <!-- Order-Items icon -->
                    <span>Countries</span>
                </a>
            </li>
        @endcan --}}


    </ul>
  </aside>
