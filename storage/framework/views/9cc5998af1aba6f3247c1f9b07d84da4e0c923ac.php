<?php $__env->startSection('content'); ?>
<div class="container">
    <h4 class="grey-text text-darken-2 center">City Management</h4>

    
    <?php $__env->startComponent('sys_mg.inc.search',['title' => 'City' , 'route' => 'cities.search']); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <!-- Show All Cities List as a Card -->
        <div class="card col s12 m12 l12 xl12">
            <div class="card-content">
                <div class="row">
                    <h5 class="pl-15 grey-text text-darken-2">Cities List</h5>
                    <!-- Table that shows Cities List -->
                    <table class="responsive-table col s12 m12 l12 xl12">
                        <thead class="grey-text text-darken-1">
                            <tr>
                                <th>ID</th>
                                <th>City Name</th>
                                <th>Zip Code</th>
                                <th>Created at</th>
                                <th>Updated at</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody id="item-table">
                            <!-- Check if there are any cities to render in view -->
                            <?php if($cities->count()): ?>
                                <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($city->id); ?></td>
                                        <td><?php echo e($city->city_name); ?></td>
                                        <td><?php echo e($city->zip_code); ?></td>
                                        <td><?php echo e($city->created_at); ?></td>
                                        <td><?php echo e($city->updated_at); ?></td>
                                        <td>
                                            <div class="row mb-0">
                                              <div class="col">
                                                    <a href="<?php echo e(route('cities.edit',$city->id)); ?>" class="btn btn-floating btn-small waves=effect waves-light orange"><i class="material-icons">mode_edit</i></a>
                                                </div>
                                                <div class="col">
                                                    <form onsubmit="return confirm('Do you really want to delete?');" action="<?php echo e(route('cities.destroy',$city->id)); ?>" method="POST">
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
                                <!-- if there are no cities then show this message -->
                                <tr>
                                    <td colspan="5"><h6 class="grey-text text-darken-2 center">No Cities  found!</h6></td>
                                </tr>
                            <?php endif; ?>
                            <?php if(isset($search)): ?>
                                <tr>
                                    <td colspan="4">
                                        <a href="/cities" class="right">Show All</a>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                    <!-- Cities Table END -->
                </div>
                <!-- Show Pagination Links -->
                <div class="center">
                  <?php echo e($cities->links('vendor.pagination.default',['paginator' => $cities])); ?>

                </div>
            </div>
        </div>
        <!-- Card END -->
    </div>
</div>


<!-- This is the button that is located at the right bottom, that navigates us to city.create view -->
<div class="fixed-action-btn">
    <a class="btn-floating btn-large waves=effect waves-light red" href="<?php echo e(route('cities.create')); ?>">
        <i class="large material-icons">add</i>
    </a>
</div> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>