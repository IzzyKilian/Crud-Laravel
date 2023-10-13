

<?php $__env->startSection('body'); ?>
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Daftar mahasiswa</h1>
        <a href="<?php echo e(route('mahasiswa.create')); ?>" class="btn btn-primary">Add Data</a>
    </div>
    <hr />
    <?php if(Session::has('success')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo e(Session::get('success')); ?>

        </div>
    <?php endif; ?>
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Prodi</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if($mahasiswa->count() > 0): ?>
                <?php $__currentLoopData = $mahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mahasiswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="align-middle"><?php echo e($loop->iteration); ?></td>
                        <td class="align-middle"><?php echo e($mahasiswa->nama); ?></td>
                        <td class="align-middle"><?php echo e($mahasiswa->nim); ?></td>
                        <td class="align-middle"><?php echo e($mahasiswa->prodi); ?></td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="<?php echo e(route('mahasiswa.edit', $mahasiswa->id)); ?>" type="button" class="btn btn-warning">Edit</a>
                                <form action="<?php echo e(route('mahasiswa.destroy', $mahasiswa->id)); ?>" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?> 
                <tr>
                    <td class="text-center" colspan="5">Tidak ada daftar mahasiswa!</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\kimsh\OneDrive\Desktop\Statistik\data-mahasiswa\resources\views/pages/mahasiswa/index.blade.php ENDPATH**/ ?>