<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="card col s12 m8 offset-m2 l8 offset-l2 xl8 offset-xl2 card-mt-15">
                <h4 class="center grey-text text-darken-2 card-title">Add State</h4>
                <div class="card-content">
                    <div class="row">
                        <form action="<?php echo e(route('states.store')); ?>" method="POST">
                            <div class="input-field no-margin">
                                <i class="material-icons prefix">grid_on</i>
                                <input type="text" name="state_name" id="state_name" class="validate" value="<?php echo e(Request::old('state_name') ? : ''); ?>">
                                <label for="state_name">State Name</label>
                                <span class="<?php echo e($errors->has('state_name') ? 'helper-text red-text' : ''); ?>"><?php echo e($errors->first('state_name')); ?></span>
                            </div>
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="btn waves-effect waves-light mt-15 col s6 offset-s3 m4 offset-m4 l4 offset-l4 xl4-offset-xl4">Add</button>
                        </form>
                    </div>
                </div>
                <div class="card-action">
                    <a href="/states">Go Back</a>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>