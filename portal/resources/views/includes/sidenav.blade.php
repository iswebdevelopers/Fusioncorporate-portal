<nav class="col-sm-2 navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li>
                <a @if ($title == 'dashboard') class="active-menu" @endif href="dashboard"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a>
            </li>
            <li @if (substr($title,0,5) == 'label') class="active" @endif>
                <a href="#"><i class="fa fa-file" aria-hidden="true"></i>Labels<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a @if (substr($title,6) == 'orders') class="active-menu" @endif href="label/orders">Orders</a>
                    </li>
                    @if(($user['roles'] == 'administrator') || ($user['roles'] == 'warehouse'))
                    <li>
                        <a @if (substr($title,6) == 'carton') class="active-menu" @endif href="label/carton/search">Individual Carton</a>
                    </li>
                    @endif
                    <li>
                        <a @if (substr($title,6) == 'history') class="active-menu" @endif href="label/history">History</a>
                    </li>
                </ul>
            </li>
            @if($user['roles'] == 'administrator')
            <li>
                <a @if ($title == 'users') class="active-menu" @endif href="users"><i class="fa fa-user" aria-hidden="true"></i> Users</a>
            </li>
            <li>
                <a @if ($title == 'suppliers') class="active-menu" @endif href="suppliers"><i class="fa fa-truck" aria-hidden="true"></i> Suppliers</a>
            </li>
            @endif
            <li>
                <a @if ($title == 'print-shop') class="active-menu" @endif href="print-shop"><i class="fa fa-print" aria-hidden="true"></i>Print Shop</a>
            </li>
            <li>
                <a @if ($title == 'setting') class="active-menu" @endif data-vbtype="ajax" class="venbobox"  href="user/recovery/{{$user['id']}}"><i class="fa fa-cog" aria-hidden="true"></i>Setting</a>
            </li>
        </ul>

    </div>
</nav>
<!-- /. NAV SIDE  -->