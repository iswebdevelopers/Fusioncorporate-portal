<nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/portal">Fusion Portal</a>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <?php if(!empty($user)): ?> <?php echo e(ucfirst($user['name'])); ?> <?php endif; ?> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <?php if(!empty($user)): ?>
                        <li><a data-vbtype="ajax" class="venbobox"  href="/portal/user/recovery/<?php echo e($user['id']); ?>"><i class="fa fa-cog fa-fw"></i>User Setting</a></li>
                        <li><a href="/portal/user/logout"><i class="fa fa-sign-out fa-fw"></i>Logout</a></li>
                        <?php else: ?>
                        <li><a href="/portal/login"><i class="fa fa-sign-out fa-fw"></i>Login</a></li>
                        <?php endif; ?>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->