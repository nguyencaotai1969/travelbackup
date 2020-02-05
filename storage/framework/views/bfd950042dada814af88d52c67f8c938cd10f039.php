   
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
                                <h4>Tour <?php echo e($tour->id); ?></h4>
                            </div>
                            
                            <?php if($errors->any()): ?>
                                <div class="alert alert-danger">
                                    <u
                                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><?php echo e($error); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                            <?php if(Session::has('msg')): ?>
                                <p style="color: green;"><?php echo e(Session::get('msg')); ?></p>
                            <?php endif; ?>
                                <form action="<?php echo e(route('updatetour',$params = ['id'=> $tour->id])); ?>" method="POST" enctype="multipart/form-data">
                                    <div class="form-body">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Tên tour</label>
                                                <input type="text" name="name" class="form-control" value="<?php echo e($tour->name); ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Số ngày</label>
                                                <input type="number" name="songay" class="form-control" value="<?php echo e($tour->songay); ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Giá cũ</label>
                                                <input type="number" name="gia" class="form-control" value="<?php echo e($tour->gia); ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Giá mới</label>
                                                <input type="number" name="giamoi" class="form-control" value="<?php echo e($tour->giamoi); ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Lịch trình</label>
                                                <textarea id="txt_content" name="lichtrinh" class="form-control" rows='10'><?php echo e($tour->lichtrinh); ?></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Ngày khởi hành</label>
                                                <input type="date" name="ngaykhoihanh" class="form-control" value="<?php echo e($tour->ngaykhoihanh); ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nơi khởi hành</label>
                                                <input type="text" name="noikhoihanh" class="form-control" value="<?php echo e($tour->noikhoihanh); ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Số chỗ</label>
                                                <input type="number" name="socho" class="form-control"  value="<?php echo e($tour->socho); ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Số chỗ đã đặt</label>
                                                <input type="number" name="sochodadat" class="form-control"  value="<?php echo e($tour->sochodadat); ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Lưu ý</label>
                                                <textarea id="txt_content_1" name="luuy" class="form-control" rows='10'><?php echo e($tour->luuy); ?></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Chi tiết</label>
                                                <textarea id="txt_content_2" name="chitiet" class="form-control" rows='10'><?php echo e($tour->chitiet); ?></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Điểm đến</label><br>
                                                    <?php $__currentLoopData = $diem_den; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $diemden): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <input type="checkbox" name="id_diemden" value="<?php echo e($diemden->id); ?>"><?php echo e($diemden->name); ?>

                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            </div>
                                        </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label>Miền</label><br>
                                                <select name="id_mien"  class="form-control search-slt" id="exampleFormControlSelect1">
                                                    <option value="1">Miền Bắc</option>
                                                    <option value="2">Miền Trung</option>
                                                    <option value="3">Miền Nam</option>
                                                </select>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Avatar</label>
                                                <input name="avatar" type="file" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Trạng thái</label>
                                                <select name="id_status" class="form-control search-slt" id="exampleFormControlSelect1">
                                                    <option value="0">Hủy</option>
                                                    <option value="1">Chưa Đủ</option>
                                                    <option value="2">Đã Đủ</option>
                                                    <option value="3">Đã Hoàn Thành</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Đánh giá</label>
                                                <input type="number" name="danhgia" class="form-control"  value="<?php echo e($tour->danhgia); ?>">
                                            </div>
                                        </div>
                                    </div>
                                <?php echo csrf_field(); ?>

                                <!-- Modal footer -->
                                    <div class="form-footer text-center" style="padding: 40px;">
                                        <button type="reset" class="btn btn-danger">Hủy</button>
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