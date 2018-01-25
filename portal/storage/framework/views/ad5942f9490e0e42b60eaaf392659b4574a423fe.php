<nav class="col-sm-2 navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li>
                <a <?php if($title == 'dashboard'): ?> class="active-menu" <?php endif; ?> href="/portal/dashboard"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a>
            </li>
            <li <?php if(substr($title,0,5) == 'label'): ?> class="active" <?php endif; ?>>
                <a href="#"><i class="fa fa-file" aria-hidden="true"></i>Labels<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a <?php if(substr($title,6) == 'orders'): ?> class="active-menu" <?php endif; ?> href="/portal/label/orders">Orders</a>
                    </li>
                    <!-- <?php if((strtolower($user['roles']) == 'administrator') || ($user['roles'] == 'warehouse')): ?>
                    <li>
                        <a <?php if(substr($title,6) == 'carton'): ?> class="active-menu" <?php endif; ?> href="/portal/label/carton/search">Individual Carton</a>
                    </li>
                    <?php endif; ?> -->
                    <li>
                        <a <?php if(substr($title,6) == 'history'): ?> class="active-menu" <?php endif; ?> href="/portal/label/history">History</a>
                    </li>
                </ul>
            </li>
            <?php if(strtolower($user['roles']) == 'administrator'): ?>
            <li>
                <a <?php if($title == 'users'): ?> class="active-menu" <?php endif; ?> href="/portal/users"><i class="fa fa-user" aria-hidden="true"></i> Users</a>
            </li>
            <li>
                <a <?php if($title == 'suppliers'): ?> class="active-menu" <?php endif; ?> href="/portal/suppliers"><i class="fa fa-truck" aria-hidden="true"></i> Suppliers</a>
            </li>
            <?php endif; ?>
            <li>
                <a <?php if($title == 'print-shop'): ?> class="active-menu" <?php endif; ?> href="/portal/print-shop"><i class="fa fa-print" aria-hidden="true"></i>Print Shop</a>
            </li>
            <li>
                <a <?php if($title == 'setting'): ?> class="active-menu" <?php endif; ?> href="/portal/printer/setting"><i class="fa fa-cog" aria-hidden="true"></i>Setting</a>
            </li>
            <li>
                <a target="_blank" href="https://qz.io/download/"><i class="fa fa-download" aria-hidden="true"></i>Print Client</a>
            </li>
            <li>
                <a <?php if($title == 'faq'): ?> class="active-menu" <?php endif; ?> href="/portal/faq"><i class="fa fa-question-circle" aria-hidden="true"></i>FAQ</a>
            </li>
        </ul>

    </div>
</nav>
<!-- /. NAV SIDE  -->