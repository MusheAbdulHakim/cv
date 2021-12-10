<div id="sidebar-menu">
    <!-- Left Menu Start -->
    <ul class="metismenu list-unstyled" id="side-menu">
        <li class="menu-title">Menu</li>

        <li>
            <a href="{{route('dashboard')}}" class=" waves-effect">
                <i class="mdi mdi-airplay"></i>
                <span>Dashboard</span>
            </a>
        </li>

        @can('view-contacts')
        <li>
            <a href="{{route('contacts.index')}}" class=" waves-effect">
                <i class="mdi mdi-email"></i>
                <span>Contacts</span>
            </a>
        </li>
        @endcan
                

        <li class="menu-title">Authentication</li>
        @can('view-authentication')
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="mdi mdi-lock"></i>
                <span>Authentication</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
               @can('view-permissions')
               <li><a href="{{route('permissions')}}">Permissions</a></li>
               @endcan
               @can('view-roles')
               <li><a href="{{route('roles.index')}}">Roles</a></li>
               @endcan
               @can('view-users')
               <li>
                    <a href="{{route('users.index')}}" class=" waves-effect">
                        <span>Users</span>
                    </a>
                </li>
                @endcan
            </ul>
        </li>
        @endcan
        @can('view-backups')
        <li>
            <a href="{{route('backup.index')}}" class=" waves-effect">
                <i class="fas fa-download"></i>
                <span>Backup</span>
            </a>
        </li>
        @endcan
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="mdi mdi-settings-outline"></i>
                <span>Settings</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
               @can('view-settings')
                <li><a href="{{route('settings')}}">General Setting</a></li>
               @endcan
            </ul>
        
    </ul>
</div>