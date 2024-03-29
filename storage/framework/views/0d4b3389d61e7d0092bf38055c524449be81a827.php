<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="card-panel grey-text text-darken-2 mt-20">
            <h4 class="grey-text text-darken-1 center">My Details</h4>
            <div class="row">
                <div class="row collection mt-20">
                    <!-- Show this image on small devices -->
                    <div class="hide-on-med-only hide-on-large-only row">
                        <div class="col s8 offset-s2 mt-20">
                            <img class="p5 card-panel emp-img-big" src="<?php echo e(asset('storage/admins/'.Auth::user()->picture)); ?>">
                        </div>
                    </div>
                    <div class="col m8 l8 xl8">
                        <h5 class="pl-15 mt-20"><?php echo e(Auth::user()->first_name); ?> <?php echo e(Auth::user()->last_name); ?></h5>
                        <p class="pl-15 mt-20"><i class="material-icons left">person</i><?php echo e(Auth::user()->username); ?></p>
                        <p class="pl-15 mt-20"><i class="material-icons left">email</i><?php echo e(Auth::user()->email); ?></p>
                    </div>
                    <!-- Hide this image on small devices -->
                    <div class="hide-on-small-only col m4 l4 xl3">
                        <img class="p5 card-panel emp-img-big" src="<?php echo e(asset('storage/admins/'.Auth::user()->picture)); ?>">
                    </div>
                </div>
                <a class="btn orange col s8 offset-s2 m6 offset-m3 l4 offset-l4 xl4 offset-xl4" href="<?php echo e(route('admins.edit',Auth::user()->id)); ?>">Update</a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>