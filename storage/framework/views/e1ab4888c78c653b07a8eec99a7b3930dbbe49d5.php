<?php $__env->startSection('content'); ?>
    <div class="main-grid">
        <div class="agile-grids">
            <!-- input-forms -->
            <div class="grids">
                <div class="progressbar-heading grids-heading">
                    <h2>Thêm Điểm Đến</h2>
                </div>
                <div class="panel panel-widget forms-panel">
                    <div class="forms">
                        <div class="form-grids widget-shadow" data-example-id="basic-forms">
                            <?php if($errors->any()): ?>
                                <div class="alert alert-danger">
                                    <ul>
                                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><?php echo e($error); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                            <div class="form-title">
                                <h4>Thêm Điểm Đến</h4>
                            </div>
                                <?php if(Session::has('msg')): ?>
                                    <div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert">x</button>
                                        <span style="color: green"><?php echo e(Session::get('msg')); ?></span>
                                    </div>
                                <?php endif; ?>
                            
                            <div class="form-body">
                                <form action="<?php echo e(route('Save_Add_destination')); ?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Tên Điểm Đến</label>
                                        <input type="text" name="diemden" class="form-control" placeholder="Tên tour">
                                    </div>
                                    <div class="form-group">
                                        <select name="mien" id="">
                                            <?php for($i = 0; $i < count($mien) ; $i++): ?>
                                                <option value="<?php echo e($mien[$i]->id); ?>"><?php echo e($mien[$i]->name); ?></option>
                                            <?php endfor; ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Giới Thiệu</label>
                                        <textarea id="txt_content" name="noidung"  class="form-control" placeholder="Nội dung" rows='10' ></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>Avatar</label>
                                        <input name="avatar" type="file">
                                    </div>
                                    <button type="submit" class="btn btn-default w3ls-button">Submit</button>
                                    <?php echo csrf_field(); ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //input-forms -->
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout-master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>