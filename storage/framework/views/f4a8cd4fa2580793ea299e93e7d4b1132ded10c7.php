<?php $__env->startSection('content'); ?>
    <div class="main-grid">
        <div class="agile-grids">
            <!-- input-forms -->
            <div class="grids">
                <div class="progressbar-heading grids-heading">
                    <h2>Thêm Tin Tức</h2>
                </div>
                <div class="panel panel-widget forms-panel">
                    <div class="forms">
                        <div class="form-grids widget-shadow" data-example-id="basic-forms">
                            <div class="form-title">
                                <h4>Thêm tin tức :</h4>
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
                                <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert">x</button>
                                    <span style="color: green"><?php echo e(Session::get('msg')); ?></span>
                                </div>
                            <?php endif; ?>
                            <div class="form-body">
                                <form action="<?php echo e(route('admin_news_save')); ?>" method="post" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>

                                    <div class="form-group">
                                        <label>Tiêu đề</label>
                                        <input type="text" name="tieude" class="form-control" placeholder="Tên tour">
                                    </div>
                                    <div class="form-group">
                                        <label>Tóm tắt</label>
                                        <input  type="text" name="tomtat" class="form-control" placeholder="Tóm tắt">
                                    </div>
                                    <div class="form-group">
                                        <label>Nội dung</label>
                                        <textarea id="txt_content" name="noidung"  class="form-control" placeholder="Nội dung" rows='10' id='noidung'></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>Avatar</label>
                                        <input name="avatar" type="file">
                                    </div>
                                    <div class="form-group">
                                        <label>Điểm đến</label><br>
                                        <select name="diemden">
                                            <?php $__currentLoopData = $listDes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $des): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($des->id); ?>"><?php echo e($des->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-default w3ls-button">Submit</button>
                                </form>
                            </div>
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