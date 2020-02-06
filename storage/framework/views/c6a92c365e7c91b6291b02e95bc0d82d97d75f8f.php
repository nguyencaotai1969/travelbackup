<?php $__env->startSection('content'); ?>
    <div class="main-grid">
        <div class="agile-grids">
            <!-- input-forms -->
            <div class="grids">
                <div class="progressbar-heading grids-heading">
                    <h2>Sửa đơn hàng</h2>
                </div>
                <div class="panel panel-widget forms-panel">
                    <div class="forms" >
                        <div class="form-grids widget-shadow" data-example-id="basic-forms">
                            <div class="form-title">
                                <h4>Đơn hàng <?php echo e($booking->id); ?></h4>
                            </div>
                            
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
                                <p style="color: green;"><?php echo e(Session::get('msg')); ?></p>
                            <?php endif; ?>
                                <form action="<?php echo e(route('updatebooking',$booking->id)); ?>" method="POST" enctype="multipart/form-data">
                                    <div class="form-body">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Tên khách hàng</label>
                                                <input type="text" name="name" class="form-control" value="<?php echo e($booking->name); ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>ID tour</label>
                                                <input type="number" name="id_tour" class="form-control" value="<?php echo e($booking->id_tour); ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>SĐT</label>
                                                <input type="text" name="phone" class="form-control" value="<?php echo e($booking->phone); ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" name="email" class="form-control" value="<?php echo e($booking->email); ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Địa chỉ</label>
                                                <input type="text" name="address" class="form-control" value="<?php echo e($booking->address); ?>">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Thanh toán</label><br><br>
                                                <?php if($booking->pay == 1): ?>
                                                <input type="radio" checked="checked" name="pay[]" value="1"> Tiền mặt<br><br>
                                                <input type="radio" name="pay[]" value="2"> Chuyển khoản
                                                <?php endif; ?>
                                                <?php if($booking->pay == 2): ?>
                                                <input type="radio" name="pay[]" value="1"> Tiền mặt<br><br>
                                                <input type="radio" checked="checked" name="pay[]" value="2"> Chuyển khoản
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Trạng thái</label>
                                                <select name="id_status" class="form-control search-slt" id="exampleFormControlSelect1">
                                                    <option value="0">Hủy</option>
                                                    <option value="1">Chưa Cọc</option>
                                                    <option value="2">Đã Cọc</option>
                                                    <option value="3">Đã Thanh Toán</option>
                                                </select>
                                            </div>
                                        </div>

                                <?php echo csrf_field(); ?>

                                <!-- Modal footer -->
                                    <div class="form-footer">
                                        <button style="margin-top: 50px" type="reset" class="btn btn-danger">Hủy</button>
                                        <button style="margin-top: 50px" type="submit" class="btn btn-primary">Lưu</button>

                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <!-- //input-forms -->
        </div>
    </div>
    <!-- footer -->
    <!-- //footer -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout-master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>