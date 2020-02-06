<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/carosel.css')); ?>">
<div class="overflow">
        <div class="row">
            <div class="col-md-12 crls-magrin">
                <!-- Start cssSlider.com -->
                <div class='csslider1 autoplay '>
                    <input name="cs_anchor1" id='cs_slide1_0' type="radio" class='cs_anchor slide' >
                    <input name="cs_anchor1" id='cs_slide1_1' type="radio" class='cs_anchor slide' >
                    <input name="cs_anchor1" id='cs_slide1_2' type="radio" class='cs_anchor slide' >
                    <input name="cs_anchor1" id='cs_play1' type="radio" class='cs_anchor' checked>
                    <input name="cs_anchor1" id='cs_pause1' type="radio" class='cs_anchor' >
                    <ul>
                        <div style="width: 100%; visibility: hidden; font-size: 0px; line-height: 0;">
                            <img src="<?php echo e(asset('img/1736033.jpg')); ?>" style="width: 100%;">
                        </div>
                        <li class='num0 img'>
                            <img src="<?php echo e(asset('img/1736033.jpg')); ?>" class="d-block w-100" alt="...">
                        </li>
                        <li class='num1 img'>
                            <img src="<?php echo e(asset('img/boats-hoi-an-lights-free-stock-photo-image-wallpaper.jpeg')); ?>"
                                 class="d-block w-100" alt="...">
                        </li>
                        <li class='num2 img'>
                            <img src="<?php echo e(asset('img/2557952.jpg')); ?>" class="d-block w-100" alt="...">
                        </li>

                    </ul>
                </div>
                <!-- End cssSlider.com -->





            </div><!--md12-->
        </div><!--row-->


</div>
<div class="search-sec">
    <div class="container">
        <form action="<?php echo e(route('timkiem')); ?>" method="get">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                    <select name="noikhoihanh" class="form-control search-slt" id="exampleFormControlSelect1">
                        <option value="%">Khởi Hành</option>
                        <?php $__currentLoopData = $khoihanh; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stt => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php $v = (array)$v; ?>
                            <option value="<?php echo e($v['noikhoihanh']); ?>"><?php echo e(ucwords($v['noikhoihanh'])); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                    <select name="diemden" class="form-control search-slt" id="exampleFormControlSelect1">
                        <option value="%">Điểm Đến</option>
                        <?php $__currentLoopData = $diemden; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stt => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php $v = (array)$v;?>
                            <option value="<?php echo e($v['id']); ?>"><?php echo e(ucwords($v['name'])); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                    <select name="giamoi" class="form-control search-slt" id="exampleFormControlSelect1">
                        <option value="%">Mức Giá</option>

                            <option value="1">0-5.000.000đ</option>
                            <option value="2">5.000.000đ-10.000.000đ</option>
                            <option value="3">10.000.000đ</option>
                    </select>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                    <input type="submit" class="btn btn-primary wrn-btn" value="Tìm kiếm">
                </div>
            </div>
        </form>
    </div>
</div>


