<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/carosel.css')); ?>">
<div>
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo e(asset('img/boats-hoi-an-lights-free-stock-photo-image-wallpaper.jpeg')); ?>"
                     class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?php echo e(asset('img/1736033.jpg')); ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?php echo e(asset('img/2557952.jpg')); ?>" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<div class="search-sec">
    <div class="container">
        <form action="<?php echo e(route('timkiem')); ?>" method="post">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                    <select name="noikhoihanh" class="form-control search-slt" id="exampleFormControlSelect1">
                        <option value="%">Khởi hành</option>
                        <?php $__currentLoopData = $khoihanh; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stt => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php $v = (array)$v; ?>
                            <option value="<?php echo e($v['noikhoihanh']); ?>"><?php echo e($v['noikhoihanh']); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                    <select name="diemden" class="form-control search-slt" id="exampleFormControlSelect1">
                        <option value="%">Điểm đến</option>
                        <?php $__currentLoopData = $diemden; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stt => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php $v = (array)$v;?>
                            <option value="<?php echo e($v['id']); ?>"><?php echo e($v['name']); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                    <input name="ngaykhoihanh" type="date" class="form-control search-slt" id="exampleFormControlSelect1"
                           placeholder="Ngày khởi hành" value="1">
                    </input>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                    <input type="submit" class="btn btn-primary wrn-btn" value="Tìm kiếm">
                </div>
            </div>
            <?php echo csrf_field(); ?>
        </form>
    </div>
</div>
