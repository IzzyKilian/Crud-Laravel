

<?php $__env->startSection('body'); ?>
    <h1 class="mb-0">Edit Data</h1>
    <hr />
    <form action="<?php echo e(route('mahasiswa.update', $mahasiswa->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="name" class="form-control" placeholder="nama" value="<?php echo e($mahasiswa->name); ?>" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Nim</label>
                <input type="text" name="nim" class="form-control" placeholder="nim" value="<?php echo e($mahasiswa->author); ?>" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Prodi</label>
                <input type="text" name="prodi" class="form-control" placeholder="prodi" value="<?php echo e($mahasiswa->year); ?>" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\kimsh\OneDrive\Desktop\Statistik\data-mahasiswa\resources\views/pages/mahasiswa/edit.blade.php ENDPATH**/ ?>