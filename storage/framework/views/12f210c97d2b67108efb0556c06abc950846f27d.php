<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="card col s12 m12 l12 xl12 mt-20">
                <div>
                <h4 class="center grey-text text-darken-2 card-title">Update Admin</h4>
                </div>
                <hr>
                <div class="card-content">
                    <form action="<?php echo e(route('admins.update',$admin->id)); ?>" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="input-field col s12 m8 offset-m2 l8 offset-l2 xl8 offset-xl2">
                                <i class="material-icons prefix">person_outline</i>
                                <input type="text" name="first_name" id="first_name" value="<?php echo e(Request::old('first_name') ? : $admin->first_name); ?>">
                                <label for="first_name">First Name</label>
                                <span class="<?php echo e($errors->has('first_name') ? 'helper-text red-text' : ''); ?>"><?php echo e($errors->first('first_name')); ?></span>
                            </div>
                            <div class="input-field col s12 m8 offset-m2 l8 offset-l2 xl8 offset-xl2">
                                <i class="material-icons prefix">person_outline</i>
                                <input type="text" name="last_name" id="last_name" value="<?php echo e(Request::old('last_name') ? : $admin->last_name); ?>">
                                <label for="last_name">Last Name</label>
                                <span class="<?php echo e($errors->has('first_name') ? 'helper-text red-text' : ''); ?>"><?php echo e($errors->first('first_name')); ?></span>
                            </div>
                            <div class="input-field col s12 m8 offset-m2 l8 offset-l2 xl8 offset-xl2">
                                <i class="material-icons prefix">person</i>
                                <input type="text" name="username" id="username" value="<?php echo e(Request::old('username') ? : $admin->username); ?>">
                                <label for="username">Username</label>
                                <span class="<?php echo e($errors->has('username') ? 'helper-text red-text' : ''); ?>"><?php echo e($errors->first('username')); ?></span>
                            </div>
                            <div class="input-field col s12 m8 offset-m2 l8 offset-l2 offset-l2 xl8 offset-xl2">
                                <i class="material-icons prefix">lock</i>
                                <input type="password" name="password" id="password" value="<?php echo e(Request::old('password') ? : ''); ?>">
                                <label for="password">Password</label>
                                <span class="<?php echo e($errors->has('password') ? 'helper-text red-text' : ''); ?>"><?php echo e($errors->has('password') ? $errors->first('password') : ''); ?></span>
                            </div>
                            <div class="input-field col s12 m8 offset-m2 l8 offset-l2 offset-l2 xl8 offset-xl2">
                                <i class="material-icons prefix">email</i>
                                <input type="email" name="email" id="email" value="<?php echo e(Request::old('email') ? : $admin->email); ?>">
                                <label for="email">Email</label>
                                <span class="<?php echo e($errors->has('email') ? 'helper-text red-text' : ''); ?>"><?php echo e($errors->has('email') ? $errors->first('email') : ''); ?></span>
                            </div>
                            <div class="file-field input-field col s12 m8 offset-m2 l8 offset-l2 xl8 offset-xl2">
                                <div class="btn">
                                    <span>Picture</span>
                                    <input type="file" name="picture">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" value="<?php echo e(old('picture') ? : $admin->picture); ?>">
                                    <span class="<?php echo e($errors->has('picture') ? 'helper-text red-text' : ''); ?>"><?php echo e($errors->has('picture') ? $errors->first('picture') : ''); ?></span>
                                </div>
                            </div>
                        </div>
                        <?php echo method_field('PUT'); ?>
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <button type="submit" class="btn waves-effect waves-light col s8 offset-s2 m4 offset-m4 l4 offset-l4 xl4 offset-xl4">Update</button>
                        </div>
                    </form>
                </div>
                <div class="card-action">
                    <a href="/admins">Go Back</a>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>