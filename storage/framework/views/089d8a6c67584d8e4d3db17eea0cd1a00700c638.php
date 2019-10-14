<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="card col s12 m12 l12 xl12 mt-20">
                <div>
                <h4 class="center grey-text text-darken-2 card-title">Update Employee</h4>
                </div>
                <hr>
                <div class="card-content">
                    <form action="<?php echo e(route('employees.update',$employee->id)); ?>" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="input-field col s12 m6 l6 xl4 offset-xl2">
                                <i class="material-icons prefix">person</i>
                                <input type="text" name="first_name" id="first_name" value="<?php echo e(old('first_name') ? : $employee->first_name); ?>">
                                <label for="first_name">First Name</label>
                                <span class="<?php echo e($errors->has('first_name') ? 'helper-text red-text' : ''); ?>"><?php echo e($errors->first('first_name')); ?></span>
                            </div>
                            <div class="input-field col s12 m6 l6 xl4">
                                <i class="material-icons prefix">person</i>
                                <input type="text" name="last_name" id="last_name" value="<?php echo e(old('last_name') ? : $employee->last_name); ?>">
                                <label for="last_name">Last Name</label>
                                <span class="<?php echo e($errors->has('first_name') ? 'helper-text red-text' : ''); ?>"><?php echo e($errors->first('first_name')); ?></span>
                            </div>
                            <div class="input-field col s12 m12 l12 xl8 offset-xl2">
                                <i class="material-icons prefix">email</i>
                                <input type="email" name="email" id="email" value="<?php echo e(old('email') ? : $employee->email); ?>">
                                <label for="email">Email</label>
                                <span class="<?php echo e($errors->has('email') ? 'helper-text red-text' : ''); ?>"><?php echo e($errors->has('email') ? $errors->first('email') : ''); ?></span>
                            </div>
                            <div class="input-field col s12 m6 l6 xl4 offset-xl2">
                            <i class="material-icons prefix">person_outline</i>
                                <input type="number" name="age" id="age" value="<?php echo e(old('age') ? : $employee->age); ?>">
                                <label for="age">age</label>
                                <span class="<?php echo e($errors->has('age') ? 'helper-text red-text' : ''); ?>"><?php echo e($errors->has('age') ? $errors->first('age') : ''); ?></span>
                            </div>
                            <div class="input-field col s12 m6 m6 xl4">
                                <i class="material-icons prefix">contact_phone</i>
                                <input type="number" name="phone" id="phone" value="<?php echo e(old('phone') ? : $employee->phone); ?>">
                                <label for="phone">Phone</label>
                                <span class="<?php echo e($errors->has('phone') ? 'helper-text red-text' : ''); ?>"><?php echo e($errors->has('phone') ? $errors->first('phone') : ''); ?></span>
                            </div>
                            <div class="input-field col s12 m12 l12 xl8 offset-xl2">
                                <i class="material-icons prefix">add_location</i>
                                <textarea name="address" id="address" class="materialize-textarea" ><?php echo e(Request::old('address') ? : $employee->address); ?></textarea>
                                <label for="address">Address</label>
                                <span class="<?php echo e($errors->has('address') ? 'helper-text red-text' : ''); ?>"><?php echo e($errors->has('address') ? $errors->first('address') : ''); ?></span>
                            </div>
                            <div class="input-field col s12 m6 l6 xl4 offset-xl2">
                                <i class="material-icons prefix">person_outline</i>
                                <select name="gender">
                                    <option value="" disabled>Choose a gender</option>
                                    <!--
                                        make the option active which matches the employee gender
                                    -->
                                    <?php $__currentLoopData = $genders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gender): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($gender->id); ?>" <?php echo e(old('gender') ? 'selected' : ''); ?> <?php echo e($employee->empGender==$gender ? 'selected' : ''); ?> ><?php echo e($gender->gender_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <label>Gender</label>
                            </div>
                            <div class="input-field col s12 m6 l6 xl4">
                                <i class="material-icons prefix">attach_money</i>
                                <select name="salary">
                                    <option value="" disabled>Choose a Salary</option>
                                    <?php $__currentLoopData = $salaries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $salary): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($salary->id); ?>" <?php echo e(old('salary') ? 'selected' : ''); ?> <?php echo e($employee->empSalary==$salary ? 'selected' : ''); ?> >$<?php echo e($salary->s_amount); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <label>Salary</label>
                            </div>
                            <div class="input-field col s12 m12 l12 xl8 offset-xl2">
                                <i class="material-icons prefix">business</i>
                                <select name="department">
                                    <option value="" disabled>Choose a department</option>
                                    <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($department->id); ?>" <?php echo e(old('department') ? 'selected' : ''); ?> <?php echo e($employee->empDepartment==$department ? 'selected' : ''); ?> ><?php echo e($department->dept_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <label>Department</label>
                            </div>
                            <div class="input-field col s12 m6 l6 xl4 offset-xl2">
                                <i class="material-icons prefix">grid_on</i>
                                <select name="state">
                                    <option value="" disabled >Choose a State</option>
                                    <?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($state->id); ?>" <?php echo e(old('state') ? 'selected' : ''); ?> <?php echo e($employee->empState==$state ? 'selected' : ''); ?> ><?php echo e($state->state_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <label>State</label>
                            </div>
                            <div class="input-field col s12 m6 l6 xl4">
                                <i class="material-icons prefix">location_city</i>
                                <select name="city">
                                    <option value="" disabled>Choose a City</option>
                                    <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($city->id); ?>" <?php echo e(old('city') ? 'selected' : ''); ?> <?php echo e($employee->empCity==$city ? 'selected' : ''); ?> ><?php echo e($city->city_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <label>City</label>
                            </div>
                            <div class="input-field col s12 m12 l12 xl8 offset-xl2">
                                <i class="material-icons prefix">location_on</i>
                                <select name="country">
                                    <option value="" disabled >Choose a Country</option>
                                    <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($country->id); ?>" <?php echo e($employee->empCountry==$country ? 'selected' : ''); ?>><?php echo e($country->country_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <label>Country</label>
                            </div>
                            
                            <div class="input-field col s12 m6 l6 xl4 offset-xl2">
                                <i class="material-icons prefix">date_range</i>
                                <input type="text" name="join_date" id="join_date" class="datepicker" value="<?php echo e(Request::old('join_date') ? : $employee->join_date); ?>">
                                <label for="join_date">date joined</label>
                                <span class="<?php echo e($errors->has('join_date') ? 'helper-text red-text' : ''); ?>"><?php echo e($errors->has('join_date') ? $errors->first('join_date') : ''); ?></span>
                            </div>
                            <div class="input-field col s12 m6 l6 xl4">
                                <i class="material-icons prefix">date_range</i>
                                <input type="text" name="birth_date" id="birth_date" class="datepicker" value="<?php echo e(Request::old('birth_date') ? : $employee->birth_date); ?>">
                                <label for="birth_date">Date of birth</label>
                                <span class="<?php echo e($errors->has('birth_date') ? 'helper-text red-text' : ''); ?>"><?php echo e($errors->has('birth_date') ? $errors->first('birth_date') : ''); ?></span>
                            </div>
                            <div class="input-field col s12 m12 l12 xl8 offset-xl2">
                                <i class="material-icons prefix">business</i>
                                <select name="division">
                                    <option value="" disabled >Choose a Division</option>
                                    <?php $__currentLoopData = $divisions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $division): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($division->id); ?>" <?php echo e(old('division') ? 'selected' : ''); ?> <?php echo e($employee->empDivision==$division ? 'selected' : ''); ?> ><?php echo e($division->division_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <label>Division</label>
                            </div>
                            <div class="input-field col s12 m12 l12 xl8 offset-xl2">
                                <i class="material-icons prefix">comment</i>
                                <textarea name="comment" id="comment" class="materialize-textarea" ><?php echo e(Request::old('comment') ? : $employee->comment); ?></textarea>
                                <label for="comment">Comment</label>
                                <span class="<?php echo e($errors->has('comment') ? 'helper-text red-text' : ''); ?>"><?php echo e($errors->has('comment') ? $errors->first('comment') : ''); ?></span>
                            </div>

                            <div class="file-field input-field col s12 m8 offset-m2 l8 offset-l2 xl8 offset-xl2">
                                <div class="btn">
                                    <span>Picture</span>
                                    <input type="file" name="picture">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" value="<?php echo e(old('picture') ? : $employee->picture); ?>">
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
                    <a href="/employees">Go Back</a>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>