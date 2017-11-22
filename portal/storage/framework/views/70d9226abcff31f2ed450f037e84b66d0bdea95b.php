<nav class="col-sm-2 navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li>
                <a <?php if($title == 'dashboard'): ?> class="active-menu" <?php endif; ?> href="/dashboard"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a>
            </li>
            <li <?php if(substr($title,0,5) == 'label'): ?> class="active" <?php endif; ?>>
                <a href="#"><i class="fa fa-file" aria-hidden="true"></i>Labels<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a <?php if(substr($title,6) == 'orders'): ?> class="active-menu" <?php endif; ?> href="/label/orders">Orders</a>
                    </li>
                    <?php if(($user['roles'] == 'administrator') || ($user['roles'] == 'warehouse')): ?>
                    <li>
                        <a <?php if(substr($title,6) == 'carton'): ?> class="active-menu" <?php endif; ?> href="/label/carton/search">Individual Carton</a>
                    </li>
                    <?php endif; ?>
                    <li>
                        <a <?php if(substr($title,6) == 'history'): ?> class="active-menu" <?php endif; ?> href="/label/history">History</a>
                    </li>
                </ul>
            </li>
            <?php if($user['roles'] == 'administrator'): ?>
            <li>
                <a <?php if($title == 'users'): ?> class="active-menu" <?php endif; ?> href="/users"><i class="fa fa-user" aria-hidden="true"></i> Users</a>
            </li>
            <li>
                <a <?php if($title == 'suppliers'): ?> class="active-menu" <?php endif; ?> href="/suppliers"><i class="fa fa-truck" aria-hidden="true"></i> Suppliers</a>
            </li>
            <?php endif; ?>
            <li>
                <a <?php if($title == 'print-shop'): ?> class="active-menu" <?php endif; ?> href="/print-shop"><i class="fa fa-print" aria-hidden="true"></i>Print Shop</a>
            </li>
            <li>
                <a <?php if($title == 'setting'): ?> class="active-menu" <?php endif; ?> data-vbtype="ajax" class="venbobox"  href="/user/recovery/<?php echo e($user['id']); ?>"><i class="fa fa-cog" aria-hidden="true"></i>Setting</a>
            </li>
        </ul>

    </div>
</nav>
<!-- /. NAV SIDE  -->