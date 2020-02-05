
<?php $__env->startSection('title', 'Danh sách thành viên'); ?>

<?php $__env->startSection('content'); ?>
    <table class="table table-bordered">
        <tr class="success">
            <th>ID</th>
            <th>Tên Thành viên</th>
            <th>Tài khoản</th>
            <th>số đt</th>

        </tr>
        <?php $__currentLoopData = $tb_tour; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($p->id); ?></td>
                <td><?php echo e($p->name); ?></td>
                <td class="text-right"><?php echo e($p->ngaydang); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    <?php echo e($tb_tour->links()); ?>

<?php $__env->stopSection(); ?>
