<?php $__env->startSection('title','Trang Chủ'); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('carosel_home', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/trangchu/trangchu.css')); ?>">
    
    <div class="container">
        <div class="text-center pt-2">
            <h2 style="margin-top: 40px;    color: #1000ff;margin-bottom: 32px;
">Tour Giờ Vàng Giá Sốc</h2>
        </div>
        <div class="row">

            <div class="new-arrival">

                <div class="titlebar">

                    <div class="next-back">
                    <span>
                        <a data-slide="prev" href="#Carousel" class="left carousel-control"><img
                                src="<?php echo e(asset('img/back_botton.png')); ?>" width="20"
                                alt="">
                        </a>
                    </span>
                        <span>
                        <a data-slide="next" href="#Carousel" class="right carousel-control"><img
                                src="
                                <?php echo e(asset('img/next_botton.png')); ?>" width="17" alt="">
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
                                                    <figure>
                                                    <a href="<?php echo e(route('chitiettour',$tour->slug)); ?>">
                                                        <img class="pic-1"
                                                         src="img/tour/<?php echo e($tour->avatar); ?>" alt="<?php echo e($tour->name.$tour->noikhoihanh); ?>">
                                                        <img class="pic-2"
                                                             src="img/tour/<?php echo e($tour->avatar); ?>">
                                                    </a>
                                                    </figure>

                                                    <span class="product-new-label ">Còn <b class="demo"></b></span>
                                                    <span class="product-discount-label"><?php echo e(round(((($tour->gia)-($tour->giamoi))*100)/$tour->gia)); ?>%</span>
                                                </div>
                                                <ul class="rating">
                                                    <span><b><?php echo e($tour->danhgia); ?></b></span>
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star disable"></li>
                                                </ul>
                                                <div class="product-content">
                                                    <h3 class="title">
                                                        <a href="<?php echo e(route('chitiettour',$tour->slug)); ?>"><?php echo $tour->name; ?>

                                                            <img
                                                                src="<?php echo e(asset('img/hot.gif')); ?>" alt="">
                                                        </a>
                                                    </h3>
                                                    <div class="price"><?php echo e(number_format($tour->giamoi)); ?>đ
                                                        <span><?php echo e(number_format($tour->gia)); ?>đ</span>
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
                                            <?php $__currentLoopData = $listtour_after; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stt => $tour): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="col-md-3 col-sm-3 col-xs-3">
                                                    <div class="product-grid">
                                                        <div class="product-image">
                                                            <a href="<?php echo e(route('chitiettour',$tour->slug)); ?>">
                                                                <img class="pic-1"
                                                                     src="img/tour/<?php echo e($tour->avatar); ?>" alt="<?php echo e($tour->name); ?>'.'<?php echo e($tour->noikhoihanh); ?>">
                                                                <img class="pic-2"
                                                                     src="img/tour/<?php echo e($tour->avatar); ?>">
                                                            </a>

                                                            <span class="product-new-label demo"></span>
                                                            <span class="product-discount-label"><?php echo e(round(((($tour->gia)-($tour->giamoi))*100)/$tour->gia)); ?>%
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
                                                            <h3 class="title">
                                                                <a href="<?php echo e(route('chitiettour',$tour->slug)); ?>"><?php echo e($tour->name); ?>

                                                                    <img
                                                                        src="<?php echo e(asset('img/hot.gif')); ?>" alt="">
                                                                </a>
                                                            </h3>
                                                            <div class="price"><?php echo e(number_format($tour->giamoi)); ?>đ
                                                                <span><?php echo e(number_format($tour->gia)); ?>đ</span>
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
        <h2 style="margin-top: 40px" class="text-center tour-gio-vang">Tour Khuyến Mãi</h2>

        <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
              <div class="carousel-inner w-100" role="listbox">
                          <div class="row" id="ads">
                                <?php $__currentLoopData = $toursale; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stt => $tour): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <div class="col-md-4 col-xs-12 col-sm-12 p-2">
                                      <div class="card rounded">
                                          <div class="card-image">
                                              <span class="card-notify-badge"><marquee direction="right" >
                                            <?php echo e($tour->songay); ?> ngày</marquee></span>
                                              <span class="card-notify-year"><?php echo e(round(((($tour->gia)-($tour->giamoi))*100)/$tour->gia)); ?>%</span>
                                              <figure>
                                              <a href="<?php echo e(route('chitiettour',$tour->slug)); ?>">

                                                  <img class="img-fluid" src="img/tour/<?php echo e($tour->avatar); ?>"
                                                   alt="Alternate Text"/>

                                              </a>
                                              </figure>
                                          </div>
                                          <div class="card-image-overlay m-auto">
                                              <span class="card-detail-badge"><?php echo e(number_format($tour->giamoi)); ?>đ</span>
                                              <span class="card-detail-badge khuyenmai-giamgia"><Strike><?php echo e(number_format($tour->gia)); ?>đ</Strike></span>
                                          </div>
                                          <div class="card-body text-center">
                                              <div class="ad-title m-auto">
                                                  <a href="<?php echo e(route('chitiettour',$tour->slug)); ?>">
                                                  <h5><?php echo e(ucwords($tour->name)); ?></h5></a>
                                              </div>
                                              <a class="ad-btn" href="<?php echo e(route('chitiettour',$tour->slug)); ?>">
                                                  Xem
                                              </a>

                                          </div>
                                      </div>
                                  </div>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </div>
            </div>

        </div>
    </div>

    
    <section class="our-webcoderskull padding-lg">
        <h2 class="text-center tour-gio-vang">Điểm Đến Yêu Thích Của Bạn</h2>
        <div class="container" >
            <ul class="row">
                <div class="MultiCarousel" data-items="1,2,3,4" data-slide="1" id="MultiCarousel"  data-interval="1000">
                    <div class="MultiCarousel-inner">
                        <?php $__currentLoopData = $listdes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stt => $des): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="item col-12 col-md-6 col-lg-4">
                                <a href="<?php echo e(route('diemden',$des->slug)); ?>">
                                    <div class="cnt-block equal-hight">
                                        <figure>
                                            <img
                                                src="img/des/<?php echo e($des->img); ?>" width="200" alt="">
                                        </figure>
                                        <marquee behavior="alternate" onmouseover="this.stop()" onmouseout="this.start()">

                                        <ul class="follow-us clearfix">
                                            <li>

                                                    <h3><?php echo e($des->name); ?></h3>

                                            </li>

                                        </ul>
                                        </marquee>

                                    </div>
                                </a>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                    </div>
                    <button class="btn btn-primary leftLst"><</button>
                    <button class="btn btn-primary rightLst">></button>
                </div>
            </ul>
        </div>

    </section>

    


    <div class="container">
        <h2 class="text-center tour-gio-vang">Đối Tác Của Chúng Tôi</h2>
        <section class="customer-logos-ourcarosel slider">
            <div class="slide"><img src="<?php echo e(asset('img/logo_doitac/1.jpg')); ?>">
            </div>
            <div class="slide"><img src="<?php echo e(asset('img/logo_doitac/2.jpg')); ?>"></div>
            <div class="slide"><img src="<?php echo e(asset('img/logo_doitac/3.png')); ?>"></div>
            <div class="slide"><img
                    src="<?php echo e(asset('img/logo_doitac/4.png')); ?>"></div>
            <div class="slide"><img src="<?php echo e(asset('img/logo_doitac/5.png')); ?>"></div>
            <div class="slide"><img
                    src="<?php echo e(asset('img/logo_doitac/6.png')); ?>"></div>
            <div class="slide"><img src="<?php echo e(asset('img/logo_doitac/7.jpg')); ?>"></div>
        </section>

    </div>
    <script type="text/javascript" src="<?php echo e(asset('js/datetime.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script type="text/javascript" src="<?php echo e(asset('js/ourcarosel.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/trangchu.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master-layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>