

<?php $__env->startSection('body'); ?>
<div class="row justify-content-center">
    <div class="col-md-6">
        <h1 class="mb-4">Add Data</h1>
        <form action="<?php echo e(route('mahasiswa.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Mahasiswa</label>
                <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Mahasiswa">
            </div>
            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" name="nim" class="form-control" id="nim" placeholder="NIM">
            </div>
            <div class="mb-3">
                <label for="prodi" class="form-label">Prodi</label>
                <input type="text" name="prodi" class="form-control" id="prodi" placeholder="Prodi">
            </div>
            <div class="d-grid">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\kimsh\OneDrive\Desktop\Statistik\data-mahasiswa\resources\views/pages/mahasiswa/create.blade.php ENDPATH**/ ?>