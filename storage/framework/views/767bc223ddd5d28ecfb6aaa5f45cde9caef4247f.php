
<div class="row mb-0">
    <ul class="collapsible">
        <li>
            <div class="collapsible-header">
                <i class="material-icons">search</i>
                Search <?php echo e($title); ?>

            </div>
            <div class="collapsible-body">
                <div class="row mb-0">
                    <form action="<?php echo e(route($route)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="input-field col s12 m8 offset-m1 l8 offset-l1 xl7 offset-xl1 mb-0 mt-0">
                            <?php if(isset($type)): ?>
                                <input id="search" type="number" name="search" >
                            <?php else: ?>
                                <input id="search" type="text" name="search" >
                            <?php endif; ?>
                            <label for="search"><?php echo e($title); ?> Name</label>
                            <span class="<?php echo e($errors->has('search') ? 'helper-text red-text' : ''); ?>">
                                <?php echo e($errors->has('search') ? $errors->first('search') : ''); ?>

                            </span>
                        </div>
                        <button type="submit" class="btn waves-effect waves-light mt-5 col s6 offset-s3 m2 l2">Search</button>
                    </form>
                </div>
            </div>
        </li>
    </ul>
</div>
