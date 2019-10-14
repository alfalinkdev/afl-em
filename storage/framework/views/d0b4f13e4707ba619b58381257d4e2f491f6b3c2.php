<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="card-panel grey-text text-darken-2 mt-20">
            <h4 class="grey-text text-darken-1 center">Employee Details</h4>
            <div class="row">
                <div class="row collection mt-20">
                    <!-- Show this image on small devices -->
                    <div class="hide-on-med-only hide-on-large-only row">
                        <div class="col s8 offset-s2 mt-20">
                            <img class="p5 card-panel emp-img-big" src="<?php echo e(asset('storage/employee_images/'.$employee->picture)); ?>">
                        </div>
                    </div>
                    <div class="col m8 l8 xl8">
                        <h5 class="pl-15 mt-20"><?php echo e($employee->first_name); ?> <?php echo e($employee->last_name); ?></h5>
                        <p class="pl-15 mt-20"><i class="material-icons left">location_city</i><?php echo e($employee->address); ?></p>
                        <p class="pl-15"><i class="material-icons left">location_on</i><?php echo e($employee->empCity->city_name); ?>, <?php echo e($employee->empState->state_name); ?>, <?php echo e($employee->empCountry->country_name); ?></p>
                        <p class="pl-15"><i class="material-icons left">person_outline</i><?php echo e($employee->empGender->gender_name); ?></p>
                    </div>
                    <!-- Hide this image on small devices -->
                    <div class="hide-on-small-only col m4 l4 xl3">
                        <img class="p5 card-panel emp-img-big" src="<?php echo e(asset('storage/employee_images/'.$employee->picture)); ?>">
                    </div>
                </div>
                <div class="collection">
                    <div class=" row">
                        <p class="pl-15"><span class="bold col s5 m4 l4 xl3">Age :</span><span class="col m8 l8 xl9"><?php echo e($employee->age); ?></span></p>
                    </div>
                    <div class="row">
                        <p class="pl-15"><span class="bold col s5 m4 l4 xl3">Phone :</span><span class="col m8 l8 xl9"><?php echo e($employee->phone); ?></span></p>
                    </div>
                    <div class="row">
                        <p class="pl-15"><span class="bold col s5 m4 l4 xl3">Zip Code :</span><span class="col m8 l8 xl9"><?php echo e($employee->empCity->zip_code); ?></span></p>
                    </div>
                    <div class="row">
                        <p class="pl-15"><span class="bold col s5 m4 l4 xl3">Department :</span><span class="col m8 l8 xl9"><?php echo e($employee->empDepartment->dept_name); ?></span></p>
                    </div>
                    <div class="row">
                        <p class="pl-15"><span class="bold col s5 m4 l4 xl3">Division :</span><span class="col m8 l8 xl9"><?php echo e($employee->empDivision->division_name); ?></span></p>
                    </div>
                    <div class="row">
                        <p class="pl-15"><span class="bold col s5 m4 l4 xl3">Email :</span><span class="col m8 l8 xl9"><?php echo e($employee->email); ?></span></p>
                    </div>
                    <div class="row">
                        <p class="pl-15"><span class="bold col s5 m4 l4 xl3">Salary :</span><span class="col m8 l8 xl9">$<?php echo e($employee->empSalary->s_amount); ?>/-</span></p>
                    </div>
                    <div class="row">
                        <p class="pl-15"><span class="bold col s5 m4 l4 xl3">Joined Date :</span><span class="col m8 l8 xl9"><?php echo e($employee->join_date); ?></span></p>
                    </div>
                    <div class="row">
                        <p class="pl-15"><span class="bold col s5 m4 l4 xl3">Date of Birth :</span><span class="col m8 l8 xl9"><?php echo e($employee->birth_date); ?></span></p>
                    </div>
                    <div class="row">
                        <p class="pl-15"><span class="bold col s5 m4 l4 xl3">Comments or Remarks:</span><span class="col m8 l8 xl9"><?php echo e($employee->comment); ?></span></p>
                    </div>
                </div>
                <form action="<?php echo e(route('employees.destroy',$employee->id)); ?>" method="POST">
                    <?php echo method_field('DELETE'); ?>
                    <?php echo csrf_field(); ?>
                    <button class="btn red col s3 offset-s2 m3 offset-m2 l3 offset-l2 xl3 offset-xl2" type="submit">Delete</button>
                </form>
                <a class="btn orange col s3 offset-s2 m3 offset-m2 l3 offset-l2 xl3 offset-xl2" href="<?php echo e(route('employees.edit',$employee->id)); ?>">Update</a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>