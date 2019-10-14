<?php $__env->startSection('content'); ?>
<div class="container">
    <h4 class="grey-text text-darken-2 center">Admin Management</h4>
    
    
    <div class="row mb-0">
        <ul class="collapsible">
            <li>
                <div class="collapsible-header">
                    <i class="material-icons">search</i>
                    Search Admin
                </div>
                <div class="collapsible-body">
                    <div class="row mb-0">
                        <form action="<?php echo e(route('admins.search')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="input-field col s12 m6 l5 xl6">
                                <input id="search" type="text" name="search" >
                                <label for="search">Search Admin</label>
                                <span class="<?php echo e($errors->has('search') ? 'helper-text red-text' : ''); ?>"><?php echo e($errors->has('search') ? $errors->first('search') : ''); ?></span>
                            </div>
                            <div class="input-field col s12 m6 l4 xl4">
                                <select name="options" id="options">
                                    <option value="first_name">First Name</option>
                                    <option value="last_name">Last Name</option>
                                    <option value="username">Username</option>
                                    <option value="email">Email</option>
                                </select>
                                <label for="options">Search by:</label>
                            </div>
                            <br>
                            <button type="submit" class="btn waves-effect waves-light col s6 offset-s3 m4 offset-m4 l2 xl2">Search</button>
                        </form>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    
    
    <div class="row">
        <!-- Show All Admins List as a Card -->
        <div class="card col s12 m12 l12 xl12">
            <div class="card-content">
                <div class="row">
                    <h5 class="pl-15 grey-text text-darken-2">Admins List</h5>
                    <!-- Table that shows Admins List -->
                    <table class="responsive-table col s12 m12 l12 xl12">
                        <thead class="grey-text text-darken-2">
                            <tr>
                                <th>ID</th>
                                <th>Picture</th>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if($admins->count()): ?>
                                <?php $__currentLoopData = $admins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $admin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($admin->id); ?></td>
                                        <td>
                                            <img class="emp-img" src="<?php echo e(asset('storage/admins/'.$admin->picture)); ?>">
                                        </td>
                                        <td><?php echo e($admin->first_name); ?> <?php echo e($admin->last_name); ?></td>
                                        <td><?php echo e($admin->username); ?></td>
                                        <td><?php echo e($admin->email); ?></td>
                                        <td>
                                            <div class="row mb-0">
                                                <div class="col">
                                                    <a href="<?php echo e(route('admins.edit',$admin->id)); ?>" class="btn btn-floating btn-small waves=effect waves-light orange"><i class="material-icons">mode_edit</i></a>
                                                </div>
                                                <div class="col">
                                                    <form action="<?php echo e(route('admins.destroy',$admin->id)); ?>" method="POST">
                                                        <?php echo method_field('DELETE'); ?>
                                                        <?php echo csrf_field(); ?>
                                                        <button type="submit" class="btn btn-floating btn-small waves=effect waves-light red"><i class="material-icons">delete</i></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                    
                                    <tr>
                                        <td colspan="5"><h6 class="grey-text text-darken-2 center">No Admins Found!</h6></td>
                                    </tr>
                                <?php endif; ?>
                                
                                <?php if(isset($search)): ?>
                                    <tr>
                                        <td colspan="4">
                                            <a href="/admins" class="right">Show All</a>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                        </tbody>
                    </table>
                    <!-- Admins Table END -->
                </div>
                <!-- Show Pagination Links -->
                <div class="center">
                  <?php echo e($admins->links('vendor.pagination.default',['paginator' => $admins])); ?>

                </div>
            </div>
        </div>
        <!-- Card END -->
    </div>
</div>


<!-- This is the button that is located at the right bottom, that navigates us to admins.create view -->
<div class="fixed-action-btn">
    <a class="btn-floating btn-large waves=effect waves-light red" href="<?php echo e(route('admins.create')); ?>">
        <i class="large material-icons">add</i>
    </a>
</div> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>