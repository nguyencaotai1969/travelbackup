<?php $__env->startSection('content'); ?>
        <div class="row danhsachtour-tour" style="padding: 29px;margin-top: 67px">
                        <h2 class="text-center text-primary"><b>Danh Sách Liên Hệ</b></h2>
            <div class="span5">

                <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
                <?php if(Session::has('msg')): ?>
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                            <span style="color: green"><?php echo e(Session::get('msg')); ?></span>
                        </div>
                <?php endif; ?>
                <table class="table table-striped table-condensed">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên khách hàng</th>
                        <th>SĐT</th>
                        <th>Email</th>
                        <th>Tin nhắn</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $listcontact; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stt => $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($id++); ?></td>
                            <td><?php echo e($contact->name); ?></td>
                            <td><?php echo e($contact->phone); ?></td>
                            <td><?php echo e($contact->email); ?></td>
                            <td><?php echo e($contact->message); ?></td>


                            <td>


                                <button type="button" data-idsp="<?php echo e($contact->id); ?>" data-linkdel="<?php echo e(route('deletecontact',$contact->id)); ?>" class="btn btn-small btn-danger del" data-toggle="modal" data-target="#delete">
                                    Xóa
                                </button>

                                <!-- The Modal -->

                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>

            <div class="modal" id="delete">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Chú ý</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body" id="delete-body">

                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn" data-dismiss="modal">Không</button>

                                <a class="btn btn-danger" id="link-del" href="#">Có</a>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    <!-- //footer -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout-master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>