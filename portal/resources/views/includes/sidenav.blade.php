<nav class="col-sm-2 navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li>
                <a @if ($title == 'dashboard') class="active-menu" @endif href="/portal/dashboard"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a>
            </li>
            
            <li>
                <a @if ($title == 'orders') class="active-menu" @endif href="/portal/label/orders"><i class="fa fa-envelope-open-o" aria-hidden="true"></i> Orders</a>
            </li>
            
            <li>
                <a @if ($title == 'items') class="active-menu" @endif href="/portal/label/items"><i class="fa fa-tags" aria-hidden="true"></i> Items</a>
            </li>

            <li>
                <a @if ($title == 'history') class="active-menu" @endif href="/portal/label/history"><i class="fa fa-history" aria-hidden="true"></i> History</a>
            </li>
            @if(strtolower($user['roles']) == 'administrator')
            <li>
                <a @if ($title == 'users') class="active-menu" @endif href="/portal/users"><i class="fa fa-user" aria-hidden="true"></i> Users</a>
            </li>
            <li>
                <a @if ($title == 'suppliers') class="active-menu" @endif href="/portal/suppliers"><i class="fa fa-truck" aria-hidden="true"></i> Suppliers</a>
            </li>
            @endif
            <li>
                <a @if ($title == 'print-shop') class="active-menu" @endif href="/portal/print-shop"><i class="fa fa-print" aria-hidden="true"></i>Print Shop</a>
            </li>
            <li>
                <a @if ($title == 'setting') class="active-menu" @endif href="/portal/printer/setting"><i class="fa fa-cog" aria-hidden="true"></i>Setting</a>
            </li>
            <li>
                <a target="_blank" href="https://qz.io/download/"><i class="fa fa-download" aria-hidden="true"></i>Print Client</a>
            </li>
            <li>
                <a @if ($title == 'faq') class="active-menu" @endif href="/portal/faq"><i class="fa fa-question-circle" aria-hidden="true"></i>FAQ</a>
            </li>
        </ul>

    </div>
</nav>
<!-- /. NAV SIDE  -->