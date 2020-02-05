<?php $__env->startSection('title','Chi Tiết Tin Tức'); ?>
<?php $__env->startSection('content'); ?>
    <style type="text/css" media="screen">

       .news,h4{text-align: center;}
        .ndtintuc img{width: 675px !important;height: auto !important}
    </style>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/chitiet/chitiet.css')); ?>">
    <section class="main-content bg-light py-4 mb-5">
        <div class="container carosel-chitiet">
            <div class="row">
                <div class="col-md-8">
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4><?php echo e($news->tieude); ?></h4>
                                            <p><i class="fas fa-clock"></i> <?php echo e($news->ngaydang); ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 ndtintuc">
                                            <?php echo $news->noidung; ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 news">
                    <h3 class="btn-primary">Tin Tức Mới</h3>
                    <?php $__currentLoopData = $listnews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stt => $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="row mb-3">
                        <div class="col-md-12">

                            <div class="card">
                                <div class="card-body caption">
                                    <a href="<?php echo e(route('chitiet',$news->slug)); ?>" title="">
                                    <img class="img-fluid"
                                         src="../img/news/<?php echo e($news->avatar); ?>"
                                         alt="" style=" border-radius: 10px;border: 2px solid blue">
                                        <p class="mb-1"><marquee behavior="alternate"><marquee width="150"><?php echo e($news->tieude); ?></marquee></marquee></p>
                                    </a>
                                </div>

                            </div>
                        </div>

                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master-layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>