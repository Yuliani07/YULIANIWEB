

<?php $__env->startSection("konten"); ?>

    <h1>Semua Data</h1>

    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Makanan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        Nama : <?php echo e($Makanan->nama); ?> <br>
        Keterangan: <?php echo e($Makanan->keterangan); ?> <br>
        <a href="<?php echo e(route('ubah_Makanan', ['id' => $Makanan->id])); ?>">Ubah</a>
        <a href="<?php echo e(route('tampil_Makanan', ['id' => $Makanan->id])); ?>">Tampil</a>

        <form action="<?php echo e(route('hapus_Makanan', ['id' => $Makanan->id])); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('delete'); ?>
            <button type="submit">Hapus</button>
        </form>
        <hr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("blank", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\YULIANI\Downloads\Web Yuliani\web-PMM2UMKT\resources\views/Makanan/semua.blade.php ENDPATH**/ ?>