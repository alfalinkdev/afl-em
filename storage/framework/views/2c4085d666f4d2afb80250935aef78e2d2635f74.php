<?php $__env->startSection('content'); ?>
<div class="container">
    <h4 class="grey-text text-darken-1 center">Manage Employees</h4>
    
    <div class="row mb-0">
        <ul class="collapsible">
            <li>
                <div class="collapsible-header">
                    <i class="material-icons">search</i>
                    Search Employees
                </div>
                <div class="collapsible-body">
                    <div class="row mb-0">
                        <form action="<?php echo e(route('employees.search')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="input-field col s12 m6 l5 xl6">
                                <input id="search" type="text" name="search" >
                                <label for="search">Search Employee</label>
                                <span class="<?php echo e($errors->has('search') ? 'helper-text red-text' : ''); ?>"><?php echo e($errors->has('search') ? $errors->first('search') : ''); ?></span>
                            </div>
                            <div class="input-field col s12 m6 l4 xl4">
                                <select name="options" id="options">
                                    <option value="first_name">First Name</option>
                                    <option value="last_name">Last Name</option>
                                    <option value="email">Email</option>
                                    <option value="address">Address</option>
                                </select>
                                <label for="options">Search by:</label>
                            </div>
                            <br>
                            <div class="col l2">
                                <button type="submit" class="btn waves-effect waves-light">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </li>
        </ul>
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
                            <th>Status</th>
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
                            <?php if(isset($search)): ?>
                                <tr>
                                    <td colspan="4">
                                        <a href="/employees" class="right">Show All</a>
                                    </td>
                                </tr>
                            <?php endif; ?>
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
<!-- This is the button that is located at the right bottom, that navigates us to employees.create view -->
<div class="fixed-action-btn">
    <a class="btn-floating btn-large waves=effect waves-light red" href="<?php echo e(route('employees.create')); ?>">
        <i class="large material-icons">add</i>
    </a>
</div> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>