

<?php $__env->startSection("konten"); ?>

<?php $__currentLoopData = $data_user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

User ID ({ $user->id }) <br>
Nama ({ $user->name }) <br>
Username ({ $user->username }) <br>
Password ({ $user->password }) <br>
Level ({ $user->level }) <br>
Create at ({ $user->create_at }) <br>
update at ({ $user->update_at }) <br>
<hr>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("blank", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\OneDrive\Documents\web-PMM2UMKT\resources\views/tampiluser.blade.php ENDPATH**/ ?>