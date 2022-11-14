<?php $__env->startSection('content'); ?>
<table>
    <thead>
        <th>no</th>
        <th>Fakultas</th>
        <th>Prodi</th>
        <th>Kelas</th>
        <th>Isi</th>
    </thead>
    <tbody>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
        <td><?php echo e(++$no); ?></td>
        <td><?php echo e($d->fakultas); ?></td>
        <td><?php echo e($d->prodi); ?></td>
        <td><?php echo e($d->kelas); ?></td>
        <td><?php echo e($d->isi); ?></td>
        <td><a href="<?php echo e(route('kelas.edit', $d->id)); ?>" class = "btn btn-warning"> Edit </a>
        </td>
        <td>
            <form action = "<?php echo e(route('kelas.delete', ['id' => 1])); ?>">
                <?php echo e(csrf_field()); ?>

                <?php echo e(method_field('DELETE')); ?>

                <button class = "btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\belajar_laravel\resources\views/kelas.blade.php ENDPATH**/ ?>