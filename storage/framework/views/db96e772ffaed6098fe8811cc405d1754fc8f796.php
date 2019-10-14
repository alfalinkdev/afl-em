<?php $__env->startSection('content'); ?>
<div class="container">
    <h4 class="grey-text text-darken-2 center">Department Management</h4>
    
    
    <?php $__env->startComponent('sys_mg.inc.search',['title' => 'Department' , 'route' => 'departments.search']); ?>
    <?php echo $__env->renderComponent(); ?>
    
    <div class="row">
        
        <div class="card col s12 m12 l12 xl12">
            <div class="card-content">
                <div class="row">
                    <h5 class="pl-15 grey-text text-darken-2">Department List</h5>
                    
                    <table class="responsive-table col s12 m12 l12 xl12">
                        <thead class="grey-text text-darken-2">
                            <tr>
                                <th>ID</th>
                                <th>Department Name</th>
                                <th>Created at</th>
                                <th>Updated at</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody id="dept-table">
                            
                            <?php if($departments->count()): ?>
                                <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($department->id); ?></td>
                                        <td><?php echo e($department->dept_name); ?></td>
                                        <td><?php echo e($department->created_at); ?></td>
                                        <td><?php echo e($department->updated_at); ?></td>
                                        <td>
                                            <div class="row mb-0">
                                              <div class="col">
                                                    
                                                    <a href="<?php echo e(route('departments.edit',$department->id)); ?>" class="btn btn-floating btn-small waves=effect waves-light orange"><i class="material-icons">mode_edit</i></a>
                                                </div>
                                                <div class="col">
                                                    
                                                    <form action="<?php echo e(route('departments.destroy',$department->id)); ?>" method="POST">
                                                        
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
                                    <td colspan="5"><h6 class="grey-text text-darken-2 center">No Departments found!</h6></td>
                                </tr>
                            <?php endif; ?>
                            <?php if(isset($search)): ?>
                                <tr>
                                    <td colspan="3">
                                        <a href="/departments" class="right">Show All</a>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                    
                </div>
                
                <div class="center" id="pagination">
                  <?php echo e($departments->links('vendor.pagination.default',['paginator' => $departments])); ?>

                </div>
            </div>
        </div>
        <!-- Card END -->
    </div>
</div>



<div class="fixed-action-btn">
    <a class="btn-floating btn-large waves=effect waves-light red" href="<?php echo e(route('departments.create')); ?>">
        <i class="large material-icons">add</i>
    </a>
</div> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>