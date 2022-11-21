<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex">
        <svg class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
            <use xlink:href="{{asset('admin/coreui/assets/brand/coreui.svg#full')}}"></use>
        </svg>
        <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
            <use xlink:href="{{asset('admin/coreui/assets/brand/coreui.svg#signet')}}"></use>
        </svg>
    </div>
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar>
        <li class="nav-item "><a class="nav-link" href="{{route('dashboard')}}">
                <svg class="nav-icon">
                    <use xlink:href="{{asset('admin/coreui/vendors/@coreui/icons/svg/free.svg#cil-speedometer')}}"></use>
                </svg>{{__('Dashboard')}} </a>
        </li>
        <li class="nav-title">Components</li>
        <li class="nav-group "><a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="{{asset('admin/coreui/vendors/@coreui/icons/svg/free.svg#cil-language')}}"></use>
                </svg>{{__('Administration')}} </a>
            <ul class="nav-group-items">
                @can('user-menu')
                <li class="nav-item"><a class="nav-link" href="{{ route('users.index') }}">Manage Users</a></li>
                @endcan

                @can('role-menu')
                <li class="nav-item"><a class="nav-link" href="{{ route('roles.index') }}">Manage Role</a></li>
                @endcan


            </ul>
        </li>

        <li class="nav-group "><a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
                <use xlink:href="{{asset('admin/coreui/vendors/@coreui/icons/svg/free.svg#cil-language')}}"></use>
            </svg>{{__('EMP')}} </a>
        <ul class="nav-group-items">
            <li class="nav-item"><a class="nav-link" href="#">Test1</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Test 2</a></li>
            {{-- <li class="nav-item"><a class="nav-link" href="#">Test Three</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Test One</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Test One</a></li> --}}
        </ul>
    </li>


    </ul>
    <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
</div>
