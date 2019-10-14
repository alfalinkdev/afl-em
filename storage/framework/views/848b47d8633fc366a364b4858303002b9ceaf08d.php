<?php $__env->startSection('content'); ?>
<section>
    <div class="container row">
        <div class="col m6 offset-m3 l6 offset-l3 xl4 offset-xl4 s10 offset-s1 card card-login z-depth-4">
            <div class="card-title card-title-login gradient-bg lighten-2 white-text">
                <h5 class="center flow-text">Login to EMS</h5>
            </div>
            <div class="card-content">
                <form action="<?php echo e(route('auth.authenticate')); ?>" method="POST">
                    <div class="input-field">
                        <i class="material-icons prefix">mail</i>
                        <input type="email" name="email" id="email" class="validate" value="<?php echo e(old('email') ? : ''); ?>">
                        <label for="email">Email</label>
                        <span class="<?php echo e($errors->has('email') ? 'helper-text red-text' : ''); ?>"><?php echo e($errors->has('email') ? $errors->first('email') : ''); ?></span>
                    </div>
                    <div class="input-field">
                        <i class="material-icons prefix">lock</i>
                        <input type="password" name="password" id="password">
                        <label for="password">Password</label>
                        <span class="<?php echo e($errors->has('password') ? 'helper-text red-text' : ''); ?>"><?php echo e($errors->has('password') ? $errors->first('password') : ''); ?></span>
                    </div>
                    <?php echo csrf_field(); ?>
                    <p>
                        <label for="remember">
                            <input type="checkbox" id="remember" name="remember" />
                            <span>Remember Me</span>
                        </label>
                    </p>
                    <a href="<?php echo e(route('password.request')); ?>" class="right">Forgot Password</a>
                    <br>
                    <div class="card-action">
                        <button class="btn col s12 m12 l12 xl12 waves-effect waves-light gradient-bg" type="submit" name="submit">Login</button>
                    </div>
                    <br>
                </form>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.auth', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>