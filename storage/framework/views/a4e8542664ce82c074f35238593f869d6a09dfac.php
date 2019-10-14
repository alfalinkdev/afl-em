<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo e(asset('css/materialize.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>AFL Employee Management System</title>
</head>
<body class="grey lighten-4">
    <!-- 
        This is the default layout that's going to be used in all views
        except for login because i want a login without a navbar
     -->
    <!-- Include Navbar with this layout -->
    <?php echo $__env->make('inc.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>
    <!-- Include Footer -->
    <?php echo $__env->make('inc.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <script src="<?php echo e(asset('js/jquery.js')); ?>"></script>
    <script src="<?php echo e(asset('js/materialize.js')); ?>"></script>
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    <!-- Include the Script after materialize.js is loaded -->
    <?php echo $__env->make('inc.message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>
</html>