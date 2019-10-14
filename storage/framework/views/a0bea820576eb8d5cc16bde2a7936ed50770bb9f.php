<?php $__env->startSection('content'); ?>
<div class="container">
    <h4 class="grey-text text-darken-2 center">State Management</h4>
    
    
    <?php $__env->startComponent('sys_mg.inc.search',['title' => 'State' , 'route' => 'states.search']); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <!-- Show All States List as a Card -->
        <div class="card col s12 m12 l12 xl12">
            <div class="card-content">
                <div class="row">
                    <h5 class="pl-15 grey-text text-darken-2">States List</h5>
                    <!-- Table that shows States List -->
                    <table class="responsive-table col s12 m12 l12 xl12">
                        <thead class="grey-text text-darken-2">
                            <tr>
                                <th>ID</th>
                                <th>State Name</th>
                                <th>Created at</th>
                                <th>Updated at</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Check if there are any states to render in view -->
                            <?php if($states->count()): ?>
                                <?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($state->id); ?></td>
                                        <td><?php echo e($state->state_name); ?></td>
                                        <td><?php echo e($state->created_at); ?></td>
                                        <td><?php echo e($state->updated_at); ?></td>
                                        <td>
                                            <div class="row mb-0">
                                              <div class="col">
                                                    <a href="<?php echo e(route('states.edit',$state->id)); ?>" class="btn btn-floating btn-small waves=effect waves-light orange"><i class="material-icons">mode_edit</i></a>
                                                </div>
                                                <div class="col">
                                                    <form action="<?php echo e(route('states.destroy',$state->id)); ?>" method="POST">
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
                                <!-- if there are no states then show this message -->
                                <tr>
                                    <td colspan="5"><h6 class="grey-text text-darken-2 center">No States have been found yet!</h6></td>
                                </tr>
                            <?php endif; ?>
                            <?php if(isset($search)): ?>
                                <tr>
                                    <td colspan="3">
                                        <a href="/states" class="right">Show All</a>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                    <!-- States Table END -->
                </div>
                <!-- Show Pagination Links -->
                <div class="center">
                  <?php echo e($states->links('vendor.pagination.default',['paginator' => $states])); ?>

                </div>
            </div>
        </div>
        <!-- Card END -->
    </div>
</div>


<!-- This is the button that is located at the right bottom, that navigates us to states.create view -->
<div class="fixed-action-btn">
    <a class="btn-floating btn-large waves=effect waves-light red" href="<?php echo e(route('states.create')); ?>">
        <i class="large material-icons">add</i>
    </a>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>