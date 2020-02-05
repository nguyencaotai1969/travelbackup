<?php $__env->startSection('content'); ?>
    <div class="main-grid">
        <div class="agile-grids">
            <!-- input-forms -->
            <div class="grids">
                <div class="progressbar-heading grids-heading">
                    <h2>Sửa thông tin tour</h2>
                </div>
                <div class="panel panel-widget forms-panel">
                    <div class="forms">
                        <div class="form-grids widget-shadow" data-example-id="basic-forms">
                            <div class="form-title">
                                <h4>Tour <?php echo e($tb_diemden->id); ?></h4>
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
                            <form action="<?php echo e(route('UpdateDestination',$params = ['id'=> $tb_diemden->id])); ?>" method="POST" enctype="multipart/form-data">
                                <div class="form-body">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Tên tour</label>
                                            <input type="text" name="name" class="form-control" value="<?php echo e($tb_diemden->name); ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Giới Thiệu</label>
                                            <input name="gioithieu" class="form-control" type="text" value="<?php echo e($tb_diemden->gioithieu); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Avatar</label>
                                            <input name="avatar" type="file" >
                                        </div>
                                    </div>
                                </div>
                          <?php echo csrf_field(); ?>
                    <!-- Modal footer -->
                        <div class="form-footer text-center" style="padding: 40px;">
                            <button type="reset" class="btn btn-danger"><a href="<?php echo e(route('listdestination')); ?>">Hủy</a></button>
                            <button type="submit" class="btn btn-primary">Lưu</button>

                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- //input-forms -->
    <?php $__env->stopSection(); ?>
    <!-- footer -->
        <!-- //footer -->


<?php echo $__env->make('admin.layout-master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>