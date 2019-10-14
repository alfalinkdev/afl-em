<header>
    <nav class="gradient-bg">
        <div class="container">
            <div class="nav-wrapper">
                <a href="<?php echo e(route('dashboard')); ?>" class="brand-logo hide-on-small-only"> Alfalink Employee Management System</a>
                <a href="<?php echo e(route('dashboard')); ?>" class="brand-logo show-on-small-only hide-on-med-and-up">EMS</a>
                <ul>
                    <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons white-text">menu</i></a>
                </ul>
                <ul class="right">
                    <li>
                        <a class="dropdown-trigger" href="#!" data-target="dropdown1">
                            <?php echo e(Auth::user()->username); ?>

                            <i class="material-icons right white-text">arrow_drop_down</i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="<?php echo e(route('auth.show')); ?>">Profile</a></li>
  <li class="divider"></li>
  <li><a href="<?php echo e(route('auth.logout')); ?>">Logout</a></li>
</ul>
<?php echo $__env->make('inc.sidenav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>