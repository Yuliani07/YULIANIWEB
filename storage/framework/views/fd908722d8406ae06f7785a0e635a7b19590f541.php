

<?php $__env->startSection("konten"); ?>

<table class="table">

<a href="<?php echo e(route("user_input")); ?>" >Add User</a>
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Username</th>
            <th scope="col">Password</th>
            <th scope="col">Level</th>
            <th scope="col">Create at</th>
            <th scope="col">Updated at</th>
            <th scope="col">#</th>

        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $data_user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <th scope="row"><?php echo e($user->id); ?></th>
            <td><?php echo e($user->name); ?></td>
            <td><?php echo e($user->username); ?></td>
            <td><?php echo e($user->password); ?></td>
            <td><?php echo e($user->level); ?></td>
            <td><?php echo e($user->created_at); ?></td>
            <td><?php echo e($user->updated_at); ?></td>
            <td>
            <a href="<?php echo e(route("user_edit", ["id" => $user->id])); ?>">Edit | </a>
            <a href="<?php echo e(route("user_show", ["id" => $user->id])); ?>">Show</a>


            <?php if($errors->any()): ?>
            <div class="alert alert-danger">
            <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            </div>
            <?php endif; ?>


            <form action = "<?php echo e(route("user_hapus", ['id' => $user->id])); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field("delete"); ?>
            <button class="btn btn-primary" type="submit" 
            onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')">Hapus</button>
</form></td>
        </tr>
</body>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("blank", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\YULIANI\Downloads\Web Yuliani\web-PMM2UMKT\resources\views/tampil-user.blade.php ENDPATH**/ ?>