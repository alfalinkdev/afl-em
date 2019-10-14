<?php $__env->startSection('content'); ?>

<div class="container">
    <h4 class="grey-text text-darken-1">Generate Report</h4>
    <div class="card-panel">
        <div class="row mb-0">
            <form action="<?php echo e(route('reports.make')); ?>" method="POST">
            <?php echo csrf_field(); ?>
                <div class="input-field col s10 offset-s1 m4 l4 xl3 offset-xl1">
                    <i class="material-icons prefix">date_range</i>
                    <input type="text" name="date_from" id="date_from" class="datepicker" value="<?php echo e(old('date_from') ? : ''); ?>">
                    <label for="date_from">Date From</label>
                    <span class="<?php echo e($errors->has('date_from') ? 'helper-text red-text' : ''); ?>"><?php echo e($errors->has('date_from') ? $errors->first('date_from') : ''); ?></span>
                </div>
                <div class="input-field col s10 offset-s1 m4 l4 xl3">
                    <i class="material-icons prefix">date_range</i>
                    <input type="text" name="date_to" id="date_to" class="datepicker" value="<?php echo e(old('date_to') ? : ''); ?>">
                    <label for="date_to">Date To</label>
                    <span class="<?php echo e($errors->has('date_to') ? 'helper-text red-text' : ''); ?>"><?php echo e($errors->has('date_to') ? $errors->first('date_to') : ''); ?></span>
                </div>
                <br>
                <button type="submit" class="btn col s6 offset-s3 m3 l3 xl3 offset-xl1">create PDF</button>
            </form>
        </div>
    </div>

    <!-- Show All Employee List as a Card -->
    <div class="card">
    <div class="card-content">
        <div class="row">
            <h5 class="pl-15 grey-text text-darken-2">Employee List</h5>
            <!-- Table that shows Employee List -->
            <table class="responsive-table col s12 m12 l12 xl12">
                <thead class="grey-text text-darken-1">
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Department</th>
                        <th>Division</th>
                        <th>Join Date</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody id="emp-table">
                    <!-- Check if there are any employee to render in view -->
                    <?php if($employees->count()): ?>
                        <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($employee->id); ?></td>
                                <td>
                                <img class="emp-img" src="<?php echo e(asset('storage/employee_images/'.$employee->picture)); ?>">
                                </td>
                                <td><?php echo e($employee->first_name); ?> <?php echo e($employee->last_name); ?></td>
                                <td><?php echo e($employee->empDepartment->dept_name); ?></td>
                                <td><?php echo e($employee->empDivision->division_name); ?></td>
                                <td><?php echo e($employee->join_date); ?></td>
                                <td>
                                <a href="<?php echo e(route('employees.show',$employee->id)); ?>" class="btn btn-small btn-floating waves=effect waves-light teal lighten-2"><i class="material-icons">list</i></a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        
                        <tr>
                            <td colspan="5"><h6 class="grey-text text-darken-2 center">No Employees Found!</h6></td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
            <!-- employees Table END -->
        </div>
        <!-- Show Pagination Links -->
        <div class="center">
            <?php echo e($employees->links('vendor.pagination.default',['paginator' => $employees])); ?>

        </div>
    </div>
</div>
<!-- Card END -->
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>