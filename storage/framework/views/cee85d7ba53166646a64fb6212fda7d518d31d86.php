<?php $__env->startSection('content'); ?>
    <div class="container danhsachtour-tour" style="padding: 29px;margin-top: 67px">
        <div class="row">
            <h2 class="text-center text-primary"><b>Danh Sách Đặt Hàng</b></h2>
            <div class="span5 pt-2">
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
                        <th>ID tour</th>
                        <th>SĐT</th>
                        <th>Địa chỉ</th>
                        <th>Email</th>
                        <th>Ngày đặt</th>
                        <th>Thanh toán</th>
                        <th>Tình trạng</th>
                        <th>ID tài khoản</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $listbooking; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stt => $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($id++); ?></td>
                            <td><?php echo e($booking->name); ?></td>
                            <td><?php echo e($booking->id_tour); ?></td>
                            <td><?php echo e($booking->phone); ?></td>
                            <td><?php echo e($booking->address); ?></td>
                            <td><?php echo e($booking->email); ?></td>
                            <td><?php echo e($booking->time); ?></td>
                            <?php
                                if($booking->pay == 1)
                                    echo '<td><span class="label label-primary">Tiền mặt</span></td>';

                                if($booking->pay == 2)
                                    echo '<td><span class="label label-primary">Chuyển khoản</span></td>'
                            ?>
                            <?php
                                if($booking->id_status == 0)
                                    echo '<td><span class="label label-default">Hủy</span></td>';

                                if($booking->id_status == 1)
                                    echo '<td><span class="label label-danger">Chưa cọc</span></td>';

                                if($booking->id_status == 2)
                                    echo '<td><span class="label label-warning">Đã cọc</span></td>';

                                if($booking->id_status == 3)
                                    echo '<td><span class="label label-success">Đã thanh toán</span></td>';
                            ?>
                            <td><?php echo e($booking->id_user); ?></td>


                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                    <a href="<?php echo e(route('getchangebooking',$booking->id)); ?>">Sửa</a>
                                </button>
                            </td>
                            <td>


                                <button type="button" data-idsp="<?php echo e($booking->id); ?>" data-linkdel="<?php echo e(route('deletebooking',$booking->id)); ?>" class="btn btn-small btn-danger del" data-toggle="modal" data-target="#delete">
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
    </div>      <!-- footer -->
    <!-- //footer -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout-master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>