
<?php $__env->startSection("konten"); ?>

<!-- <form action="<?php echo e(route("user_update", ['id' => $id])); ?>" method="post">
<?php echo csrf_field(); ?>
<?php echo method_field("put"); ?>
Nama     : <input type="text" name="nama"> <br>
Username : <input type="text" name="username"> <br>
Password : <input type="password" name="password"> <br>
Level : <select name="level" required>
                      <option value=""> Pilih Level </option>
                      <option value="Admin">Admin</option>
                      <option value="User">User</option>
            </select>

<br>
<button class="btn btn-info" type="submit">Simpan</button>

</form> -->

<form action="<?php echo e(route("user_update", ['id' => $id])); ?>" method="post">
<?php echo csrf_field(); ?>
<?php echo method_field("put"); ?>
<div class="col-lg-6">
    <div class="p-5">
        <center>
        <h3>EDIT USER</h3>
</center>
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
        <button class="btn btn-success btn-user btn-block" type="submit">Update</button>
    </div>
</div>

</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("blank", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\OneDrive\Documents\web-PMM2UMKT\resources\views/form-update.blade.php ENDPATH**/ ?>