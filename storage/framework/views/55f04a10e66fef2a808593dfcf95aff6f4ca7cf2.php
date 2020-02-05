<?php $__env->startSection('title','Liên Hệ'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/lienhe/lienhe.css')); ?>">
<?php $__env->startSection('content'); ?>
    <section>
        <div class="container infor-tour"><br>
            <h3 class="text-center text-primary" style="text-decoration:none">Thông Tin Tour Của Bạn</h3><br>
            <div class="row text-left text-xs-center text-md-left" id="des-detail">
                <div class="image-1 col-md-5">
                    <img class="col-md-12" src="../img/tour/<?php echo e($tour->avatar); ?>" alt="">
                </div>
                <div class="detail col-md-7 row">
                    <h5><b><a style="text-decoration: none" href="<?php echo e(route('chitiettour',$tour->slug)); ?>"><?php echo e($tour->name); ?></a></b></h5>
                    <br>
                    <div class=" col-md-6">
                        <span><b><?php echo e($tour->danhgia); ?></b></span>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star"></i><br>
                        <span>Mã: <?php echo e($tour->id); ?></span><br>
                        <span>Thời gian: <?php echo e($tour->songay); ?> ngày</span><br>
                        <span>Nơi khởi hành: <?php echo e($tour->noikhoihanh); ?></span><br>
                        <span>Ngày khởi hành: <?php echo e($tour->ngaykhoihanh); ?></span>
                    </div>
                    <div class="right col-md-6 ml-auto">
                        <span>Số chỗ còn:  <?php echo e(($tour->socho)-($tour->sochodadat)); ?></span><br><br>
                        <span>Giá 1 khách:</span><br>
                        <span style="color: red; font-size: 22px"><b><?php echo e(number_format($tour->giamoi)); ?>đ</b></span>
                    </div>

                </div>
            </div>

            <div class="contact mb-6"><br>
                <?php if($errors->any()): ?>
                    <div >
                        <ul class="alert alert-primary text-danger" role="alert">
                            <button type="button" class="close" data-dismiss="alert">x</button>
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
                <form method="post" action="<?php echo e(route('luudon',$params = ['id'=> $tour->slug])); ?>">
                    <div class="row">
                        <div class="contact-left col-md-6 col-xs-6 form-group">
                            <p>Họ và tên</p>
                            <input type="text" class="form-control" name="name" value="" placeholder="Họ tên"><br>
                            <p>Email</p>
                            <input type="email" class="form-control" name="email" value="" placeholder="E-mail"><br>
                        </div>
                        <div class="contact-right col-md-6 col-xs-6">
                            <p>Điện thoại</p>
                            <input type="number" class="form-control" name="phone" value="" placeholder="Phone"><br>
                            <p>Địa chỉ</p>
                            <input type="address" class="form-control" name="address" value="" placeholder="Địa chỉ"><br>
                        </div>
                        <div class="text-left" style="margin-left: 20px">
                            <p>Phương thức thanh toán</p>
                            <p><input type="radio" name="pay" value="1"> Tiền mặt <i class="fas fa-money-bill-wave"></i></p>
                            <p><input type="radio" name="pay" value="2"> Chuyển khoản <i class="fas fa-credit-card"></i></a>
                        </div>

                    </div>
                    <h2 class="text-center p-3">
                        <input class="btn btn-primary" type="submit" name="button" value="Đặt Tour">
                    </h2>
                    <?php echo csrf_field(); ?>
                </form>

            </div>
        </div>
    </section>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('master-layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>