<?php $__env->startSection('title','Liên Hệ'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/lienhe/lienhe.css')); ?>">
<style>
    .infor-tour h3 {color: #2d51a3;
        text-align: center;
        margin-top: 120px;
    }
    .detail {
        background-color: #f1f1f1;
        display: flex;
        align-items: center;
    }
    @media (max-width: 575.98px) {
        .image-1 img {
            margin-bottom: 20px;
        }

        .detail {
            background-color: white
        }
    }
</style>
<?php $__env->startSection('content'); ?>
    <section>
        <div class="container infor-tour">
            <h3>Thông tin tour</h3><br><br>
            <div class="row text-left text-xs-center text-md-left" id="des-detail">
                <div class="image-1 col-md-5">
                    <img class="col-md-12" src="<?php echo e(base_path.$tour->avatar); ?>" alt="">
                </div>
                <div class="detail col-md-7 ml-auto row">
                    <h4><?php echo e($tour->name); ?></h4><br>
                    <div class="left col-md-6">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i><br>
                        <span>Mã: <?php echo e($tour->id); ?></span><br>
                        <span>Thời gian: <?php echo e($tour->songay); ?> ngày</span><br>
                        <span>Nơi khởi hành: <?php echo e($tour->noikhoihanh); ?></span><br>
                        <span>Ngày khởi hành: <?php echo e($tour->ngaykhoihanh); ?></span>
                    </div>
                    <div class="right col-md-5 ml-auto">
                        <span>Số chỗ còn:  <?php echo e(($tour->socho)-($tour->sochodadat)); ?></span><br><br>
                        <span>Giá 1 khách:</span><br>
                        <span style="color: red; font-size: 22px"><b><?php echo e($tour->giamoi); ?></b></span>
                    </div>

                </div>
            </div>

            <div class="contact">

                <h3>Thông tin liên hệ</h3><br>
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
                <form method="post" action="<?php echo e(route('luudon',$params = ['id'=> $tour->id])); ?>">
                    <div class="row">
                        <div class="contact-left col-6 col-xs-12 form-group">
                            <p>Họ và tên</p>
                            <input type="text" class="form-control" name="name" value="" placeholder="Họ tên"><br>
                            <p>Email</p>
                            <input type="email" class="form-control" name="email" value="" placeholder="E-mail"><br>
                            <p>Phương thức thanh toán</p>
                            <input type="radio" name="pay" value="1"> Tiền mặt<br>
                            <input type="radio" name="pay" value="2"> Chuyển khoản
                        </div>
                        <div class="contact-right col-6 col-xs-12">
                            <p>Điện thoại</p>
                            <input type="tel" class="form-control" name="phone" value="" placeholder="Phone"><br>
                            <p>Địa chỉ</p>
                            <input type="address" class="form-control" name="address" value="" placeholder="Địa chỉ"><br>
                        </div>
                    </div>
                    <h2 class="text-center p-3">
                        <input class="btn btn-primary" type="submit" name="button" value="Đăng ký">
                    </h2>
                    <?php echo csrf_field(); ?>
                </form>
            </div>
        </div>
    </section>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('master-layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>