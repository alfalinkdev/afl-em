<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="card col s12 m8 offset-m2 l8 offset-l2 xl8 offset-xl2 card-mt-15">
                <h4 class="center grey-text text-darken-2 card-title">Add Department</h4>
                <div class="card-content">
                    <div class="row">
                        <!--
                            $errors has all validation errors if you wanna
                            show validation failure message then you can use it
                            like below.
                            $errors->has('input name') will return boolean
                            Request::old('input name') will return the value of the input field
                            that we have submitted.
                            $errors->first('input name') will return the first validation error,
                            so you can show it on the form.
                        -->
                        <form action="<?php echo e(route('departments.store')); ?>" method="POST">
                            <div class="input-field no-margin">
                            <i class="material-icons prefix">account_balance</i>
                                <!--
                                    in value attribute of dept_name input,
                                    we are just using ternary operator and checking 
                                    if it has a value that we have submitted
                                    previously, else set value to ''.
                                -->
                                <input type="text" name="dept_name" id="dept_name" class="validate" value="<?php echo e(Request::old('dept_name') ? : ''); ?>">
                                <label for="dept_name">Department Name</label>
                                <!--
                                    in span tag below,
                                    we are checking for validation errors
                                    and if it has any errors that apply css classes,
                                    else set it to ''.
                                -->
                                <span class="<?php echo e($errors->has('dept_name') ? 'helper-text red-text' : ''); ?>"><?php echo e($errors->first('dept_name')); ?></span>
                            </div>
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="btn waves-effect waves-light mt-15 col s6 offset-s3 m4 offset-m4 l4 offset-l4 xl4-offset-xl4">Add</button>
                        </form>
                    </div>
                </div>
                <div class="card-action">
                    <a href="/departments">Go Back</a>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>