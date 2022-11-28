
<?php $__env->startSection("konten"); ?>

Nama : <?php echo e($data_user->name); ?> <br>
Username : <?php echo e($data_user->username); ?> <br>
Password : <?php echo e($data_user->password); ?> <br>
Level : <?php echo e($data_user->level); ?> <br>
Created : <?php echo e($data_user->created_at); ?> <br>
Updated : <?php echo e($data_user->updated_at); ?> <br>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("blank", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\OneDrive\Documents\web-PMM2UMKT\resources\views//show.blade.php ENDPATH**/ ?>