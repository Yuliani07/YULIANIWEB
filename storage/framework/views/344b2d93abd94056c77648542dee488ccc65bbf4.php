
<?php $__env->startSection("konten"); ?>

<!-- <form action="<?php echo e(route("user_simpan")); ?>" method="post">
<?php echo csrf_field(); ?>

Nama     : <input type="text" name="nama"> <br>
Username : <input type="text" name="username"> <br>
Password : <input type="password" name="password"> <br>
Level    : <input type="text" name="level"> <br>

<br>
<button class="btn btn-info" type="submit">Add User</button>

</form> -->

<?php if($errors->any()): ?>
 <div class="alert alert-danger">
 <ul>
 <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <li><?php echo e($error); ?></li>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 </ul>
 </div>
<?php endif; ?>

<form action="<?php echo e(route("user_simpan")); ?>" method="post">
<?php echo csrf_field(); ?>
<div class="col-lg-6">
    <div class="p-5">
        <center><h3>TAMBAHKAN USER</h3></center>
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control form-control-user" placeholder="Masukkan nama ..." required>
        </div>
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control form-control-user" placeholder="Masukkan username ..." required>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control form-control-user" placeholder="Masukkan password ..." required>
        </div>
        <div class="form-group">
            <label>Level</label>
            <select name="level" class="form-control form-control-user" required>
                      <option value="">Pilih Level</option>
                      <option value="Admin">Admin</option>
                      <option value="User">User</option>
            </select>
        </div>
        <button class="btn btn-info btn-user btn-block" type="submit">Add User</button>
    </div>
</div>

</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("blank", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\YULIANI\Downloads\Web Yuliani\web-PMM2UMKT\resources\views/form.blade.php ENDPATH**/ ?>