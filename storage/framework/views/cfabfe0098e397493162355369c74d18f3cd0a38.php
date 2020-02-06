<?php $__env->startSection('title','Chi tiết điểm đến'); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('carosel_home', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/tour/dstour.css')); ?>">
    <link
        href="https://fonts.googleapis.com/css?family=Baloo|Charm|IBM+Plex+Serif|Lobster|Playfair+Display&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Baloo|Baloo+Paaji|Charm|IBM+Plex+Serif|Lobster|Pattaya|Playfair+Display&display=swap"
        rel="stylesheet">
    <div id="content">
        <div class="container ds-tour">
            <h3>Tour <?php echo e($mien->name); ?></h3><br><br>
            <div class="row" id="list">
                <div class="col-lg-9 col-md-12" id="tour-list">
                    <h4>Danh sách tour</h4>
                    <?php $__currentLoopData = $listtour; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stt => $tour): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="tour row">
                            <div class="image-2 col-md-4">
                                <img src="<?php echo e(base_path.$tour->avatar); ?>" alt="">
                            </div>
                            <div class="info col-md-8">
                                <h5><a href="<?php echo e(route('chitiettour',$params = ['id'=> $tour->id])); ?>"><b><?php echo e($tour->name); ?></b></a></h5>
                                <div class="row">
                                    <div class="left col-md-6">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i><br>
                                        <span>Mã: <?php echo e($tour->id); ?></span><br>
                                        <span>Thời gian: <?php echo e($tour->songay); ?> ngày<br>
                                        <span>Khởi hành: <?php echo e($tour->noikhoihanh); ?></span><br>
                                        <span>Ngày khởi hành: <?php echo e($tour->ngaykhoihanh); ?></span>
                                    </div>
                                    <div class="right col-md-5 ml-auto">
                                        <br>
                                        <span>Số chỗ còn: <?php echo e($tour->socho); ?></span><br>
                                        <span>Giá 1 khách:</span><br>
                                        <span style="color: red; font-size: 22px"><b><?php echo e($tour->giamoi); ?></b></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <br>
                    <div class="justify-content-center row ">
                    <div class="col-md-4"><?php echo e($listtour->links()); ?></div></div>
                </div>
                <div class="col-lg-3 col-md-12" id="list-news">
                    <h4>Tin tức</h4>
                    <div class="row news">
                        <img src="<?php echo e(asset('img/tour/262_to_hop_giai_tri_sun_world_halong_complex_co_gi.jpg')); ?>" alt="">
                        <a href="#"><b>Ngắm toàn cảnh Hạ Long với cáp treo Nữ Hoàng</b></a>
                    </div>
                    <br>
                    <div class="row news">
                        <img src="<?php echo e(asset('img/tour/bao-tang-quang-ninh.png')); ?>" alt="">
                        <a href="#"><b>Điểm nhấn mới của du lịch Hạ Long</b></a>
                    </div>
                    <br><br>
                </div>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master-layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>