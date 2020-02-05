<?php $__env->startSection('title','Trang Chủ'); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('carosel_home', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/trangchu/trangchu.css')); ?>">
    
    <div class="container">
        <div class="text-center tour-gio-vang pt-2">
            <h2>Tour Giờ Vàng Giá Sốc</h2>
            <p>Giờ Vàng Giá Ưu Đãi</p>
        </div>
        <div class="row">

            <div class="new-arrival">

                <div class="titlebar">

                    <div class="next-back">
                    <span>
                        <a data-slide="prev" href="#Carousel" class="left carousel-control"><img
                                src="http://www.sclance.com/pngs/back-button-png/back_button_png_77116.png" width="20"
                                alt="">
                        </a>
                    </span>
                        <span>
                        <a data-slide="next" href="#Carousel" class="right carousel-control"><img
                                src="http://pluspng.com/img-png/next-button-png-open-2000.png" width="20" alt="">
                        </a>
                    </span>
                    </div>
                </div>
                <div class="arrival-product">
                    <div id="Carousel" class="carousel slide" data-ride="carousel">
                        <!-- Carousel items -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <?php $__currentLoopData = $listtour; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stt => $tour): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                        <div class="product-grid">
                                            <div class="product-image">
                                                <a href="<?php echo e(route('chitiettour')); ?>">
                                                    <img class="pic-1"
                                                         src="https://travel.com.vn/Content/ThemeHe/img/dd1.jpg" >
                                                    <img class="pic-2"
                                                         src="https://tour.dulichvietnam.com.vn/uploads/tour/1554714181_tour-ha-long-11.jpg">
                                                </a>

                                                <span class="product-new-label demo"></span>
                                                <span class="product-discount-label">20%</span>
                                            </div>
                                            <ul class="rating">
                                                <li class="fa fa-star"></li>
                                                <li class="fa fa-star"></li>
                                                <li class="fa fa-star"></li>
                                                <li class="fa fa-star"></li>
                                                <li class="fa fa-star disable"></li>
                                                <span><?php echo e($tour->danhgia); ?></span>

                                            </ul>
                                            <div class="product-content">
                                                <h3 class="title"><a href="<?php echo e(route('chitiettour')); ?>"><?php echo e($tour->name); ?><img
                                                            src="<?php echo e(asset('img/hot.gif')); ?>" alt=""></a></h3>
                                                <div class="price"><?php echo e($tour->gia); ?>

                                                    <span><?php echo e($tour->giamoi); ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row">
                                            <?php $__currentLoopData = $listtour; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stt => $tour): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="col-md-3 col-sm-3 col-xs-3">
                                                <div class="product-grid">
                                                    <div class="product-image">
                                                        <a href="<?php echo e(route('chitiettour')); ?>">
                                                            <img class="pic-1"
                                                                 src="https://staticproxy.mytourcdn.com/1000x600,q90/resources/pictures/hotels/9/6gV86nE7QPC9Zeic8KRsLg-38.jpeg">
                                                            <img class="pic-2"
                                                                 src="https://tour.dulichvietnam.com.vn/uploads/tour/1554714181_tour-ha-long-11.jpg">
                                                        </a>

                                                        <span class="product-new-label demo"></span>
                                                        <span class="product-discount-label">-20%
                                                        </span>
                                                    </div>
                                                    <ul class="rating">
                                                        <li class="fa fa-star"></li>
                                                        <li class="fa fa-star"></li>
                                                        <li class="fa fa-star"></li>
                                                        <li class="fa fa-star"></li>
                                                        <li class="fa fa-star disable"></li>
                                                        <span><?php echo e($tour->danhgia); ?></span>
                                                    </ul>
                                                    <div class="product-content">
                                                        <h3 class="title"><a href="<?php echo e(route('chitiettour')); ?>"><?php echo e($tour->name); ?><img
                                                                    src="<?php echo e(asset('img/hot.gif')); ?>" alt=""></a></h3>
                                                        <div class="price"><?php echo e($tour->gia); ?>

                                                            <span><?php echo e($tour->giamoi); ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Carousel-->
                </div>
            </div>
        </div>
    </div>



    
    <div class="container">
        <h2 class="text-center tour-gio-vang">Tour Khuyến Mãi</h2>
        <div class="row" id="ads">
            <!-- Category Card -->
            <?php $__currentLoopData = $toursale; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stt => $tour): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4 col-xs-12 col-sm-12 p-2">
                <div class="card rounded">
                    <div class="card-image">
                        <span class="card-notify-badge"><?php echo e($tour->songay); ?> ngày</span>
                        <span class="card-notify-year">50%</span>
                        <img class="img-fluid" src="https://travel.com.vn/Images/LastMinute/lm_190911075159_562321.jpg"
                             alt="Alternate Text"/>
                    </div>
                    <div class="card-image-overlay m-auto">
                        <span class="card-detail-badge"><?php echo e($tour->giamoi); ?></span>
                        <span class="card-detail-badge khuyenmai-giamgia"><Strike><?php echo e($tour->gia); ?></Strike></span>
                    </div>
                    <div class="card-body text-center">
                        <div class="ad-title m-auto">
                            <h5><?php echo e($tour->name); ?></h5>
                        </div>
                        <a class="ad-btn" href="<?php echo e(route('chitiettour')); ?>">Xem</a>
                    </div>
                </div>
            </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

    
    <section class="our-webcoderskull padding-lg">
        <h2 class="text-center tour-gio-vang">Điểm Đến Yêu Thích Của Bạn</h2>
        <div class="container">
            <ul class="row">
                <?php $__currentLoopData = $listdes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stt => $des): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="col-12 col-md-6 col-lg-3">
                    <div class="cnt-block equal-hight">
                        <figure>
                            <img
                                src="https://media-cdn.tripadvisor.com/media/attractions-splice-spp-540x360/07/1a/bb/c2.jpg"
                                class="img-responsive" alt="">
                        </figure>

                        <ul class="follow-us clearfix">
                            <li><a href="<?php echo e(route('diemden')); ?>"><h3><?php echo e($des->name); ?></h3></a></li>

                        </ul>
                    </div>
                </li>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </section>

    


    <div class="container">
        <h2 class="text-center tour-gio-vang">Đối Tác Của Chúng Tôi</h2>
        <section class="customer-logos-ourcarosel slider">
            <div class="slide"><img src="http://cdn07.happymobile.vn/media/images/2018/01/y-nghia-logo-samsung-2.jpg">
            </div>
            <div class="slide"><img src="https://thietkelogo.vn/wp-content/uploads/2017/10/logo-21.jpg"></div>
            <div class="slide"><img src="https://upload.wikimedia.org/wikipedia/vi/7/7c/Techcombank_logo.png"></div>
            <div class="slide"><img
                    src="https://thietkelogodeponlinetructuyen.files.wordpress.com/2016/12/logo-htv.png?w=1400"></div>
            <div class="slide"><img src="https://upload.wikimedia.org/wikipedia/vi/7/79/BIDV_Logo.png"></div>
            <div class="slide"><img
                    src="https://brandslogo.net/wp-content/uploads/2018/04/Bamboo-Airways-logo-vector.png"></div>
            <div class="slide"><img src="https://image.vietstock.vn/2012/02/13/55441.jpg"></div>
        </section>

    </div>
    <script type="text/javascript" src="<?php echo e(asset('js/datetime.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script type="text/javascript" src="<?php echo e(asset('js/ourcarosel.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master-layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>