

<?php $__env->startSection("konten"); ?>

    <form action="<?php echo e(route("simpan_Makanan")); ?>" method="post">
        <?php echo csrf_field(); ?>

        Nama : <input type="text" name="nama"> <br>
        Keterangan: <textarea name="keterangan" id="" cols="30" rows="10"></textarea> <br>

        <button type="submit">Simpan</button>
    </form>


<?php $__env->stopSection(); ?>
<?php echo $__env->make("blank", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\YULIANI\Downloads\Web Yuliani\web-PMM2UMKT\resources\views/Makanan/form-input.blade.php ENDPATH**/ ?>