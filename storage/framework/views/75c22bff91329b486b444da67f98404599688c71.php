<?php $__env->startSection('title','Du Lich'); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('carosel_home', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/dulich/dulich.css')); ?>">
    <div class="container travel-list">
        <h3 class="h3 text-center tour-gio-vang">Tour Miền Bắc</h3>
        <div class="row">
            <?php $__currentLoopData = $mienbac; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stt => $tour): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-3 col-sm-6">
                <div class="product-grid4">
                    <div class="product-image4">
                        <a href="<?php echo e(route('chitiettour',$tour->id)); ?>">
                            <img class="pic-1 img-fluid"
                                 src="storage/tour/avatar/<?php echo e($tour->avatar); ?>">
                            <img class="pic-2"
                                 src="https://dulichviet.com.vn/images/bandidau/images/CHAU%20A-%20HA%20NOI/2018/H%C3%A0%20Giang%20-%20Cao%20B%E1%BA%B1ng%20-%20B%E1%BA%AFc%20K%E1%BA%A1n/900x500_nha_vua_meo_ha_giang_du_lich_viet.png">
                        </a>

                        <span class="product-new-label"><?php echo e(round(((($tour->gia)-($tour->giamoi))*100)/$tour->gia)); ?>%</span>
                    </div>
                    <div class="product-content">
                        <h3 class="title p-1"><a href="<?php echo e(route('chitiettour',$tour->id)); ?>"><b><?php echo e($tour->name); ?></b> <img
                                    src="<?php echo e(asset('img/hot.gif')); ?>"
                                    alt=""></a></h3>
                        <div class="price">
                            <p><?php echo e(number_format($tour->giamoi)); ?>đ</p>
                            <span><?php echo e(number_format($tour->gia)); ?>đ</span>
                        </div>
                    </div>
                    <a class="add-to-cart dat-tour-mien-bac" href="<?php echo e(route('dattour',$params = ['id'=> $tour->id])); ?>"><b>Đặt Tour</b></a>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <h3 class="text-center p-3"><a href="<?php echo e(route('danhsach',$params = ['id'=> 1])); ?>" class=" btn-outline-primary btn">Xem Thêm</a></h3>


    </div>
    <div class="container">
        <h3 class="h3 text-center tour-gio-vang">Tour Miền Trung</h3>
        <div class="row">
            <?php $__currentLoopData = $mientrung; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stt => $tour): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-3 col-sm-6">
                <div class="product-grid4">
                    <div class="product-image4">
                        <a href="<?php echo e(route('chitiettour',$tour->id)); ?>">
                            <img  class="pic-1 img-fluid"
                                 src="storage/tour/avatar/<?php echo e($tour->avatar); ?>">
                            <img class="pic-2"
                                 src="https://dulichviet.com.vn/images/bandidau/images/CHAU%20A-%20HA%20NOI/2018/H%C3%A0%20Giang%20-%20Cao%20B%E1%BA%B1ng%20-%20B%E1%BA%AFc%20K%E1%BA%A1n/900x500_nha_vua_meo_ha_giang_du_lich_viet.png">
                        </a>

                        <span class="product-new-label"><?php echo e(round(((($tour->gia)-($tour->giamoi))*100)/$tour->gia)); ?>%</span>
                    </div>
                    <div class="product-content">
                        <h3 class="title p-1"><a href="<?php echo e(route('chitiettour',$tour->id)); ?>"><b><?php echo e($tour->name); ?></b> <img
                                    src="<?php echo e(asset('img/hot.gif')); ?>"
                                    alt=""></a></h3>
                        <div class="price">
                            <p><?php echo e(number_format($tour->giamoi)); ?>đ</p>
                            <span><?php echo e(number_format($tour->gia)); ?>đ</span>
                        </div>
                    </div>
                    <a class="add-to-cart dat-tour-mien-bac" href="<?php echo e(route('dattour',$params = ['id'=> $tour->id])); ?>"><b>Đặt Tour</b></a>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <h3 class="text-center p-3"><a href="<?php echo e(route('danhsach',$params = ['id'=> 2])); ?>" class=" btn-outline-primary btn">Xem Thêm</a></h3>
    </div>


    <div class="container">
        <h3 class="h3 text-center tour-gio-vang">Tour Miền Nam</h3>
        <div class="row">
            <?php $__currentLoopData = $miennam; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stt => $tour): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-3 col-sm-6">
                <div class="product-grid4">
                    <div class="product-image4 ">
                        <a href="<?php echo e(route('chitiettour',$tour->id)); ?>">
                            <img class="pic-1 img-fluid"
                                 src="storage/tour/avatar/<?php echo e($tour->avatar); ?>">
                            <img class="pic-2"
                                 src="https://dulichviet.com.vn/images/bandidau/images/CHAU%20A-%20HA%20NOI/2018/H%C3%A0%20Giang%20-%20Cao%20B%E1%BA%B1ng%20-%20B%E1%BA%AFc%20K%E1%BA%A1n/900x500_nha_vua_meo_ha_giang_du_lich_viet.png">
                        </a>

                        <span class="product-new-label"><?php echo e(round(((($tour->gia)-($tour->giamoi))*100)/$tour->gia)); ?>%</span>
                    </div>
                    <div class="product-content">
                        <h3 class="title p-1"><a href="<?php echo e(route('chitiettour',$tour->id)); ?>"><b><?php echo e($tour->name); ?></b> <img
                                    src="<?php echo e(asset('img/hot.gif')); ?>"
                                    alt=""></a></h3>
                        <div class="price">
                            <p><?php echo e(number_format($tour->giamoi)); ?>đ</p>
                            <span><?php echo e(number_format($tour->gia)); ?>đ</span>
                        </div>
                    </div>
                    <a class="add-to-cart dat-tour-mien-bac" href="<?php echo e(route('dattour',$params = ['id'=> $tour->id])); ?>"><b>Đặt Tour</b></a>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <h3 class="text-center p-3"><a href="<?php echo e(route('danhsach',$params = ['id'=> 3])); ?>" class=" btn-outline-primary btn">Xem Thêm</a></h3>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master-layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>