<?php $__env->startSection('title','Chi tiết tour'); ?>
<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/chitiettour/chitiettour.css')); ?>">
    <link href="https://fonts.googleapis.com/css?family=Baloo|Baloo+Paaji|Charm|IBM+Plex+Serif|Lobster|Pattaya|Playfair+Display&display=swap"
          rel="stylesheet">

    <div class="container chitiettour">
        <h3 class="text-center danhsachtour"><marquee behavior="alternate"><marquee width="300"><?php echo e($detail->name); ?></marquee></marquee>
            </h3>
        <div class="row">
            <div class="col-md-5 pt-3">

                <img class="col-md-12" src="../storage/tour/avatar/<?php echo e($detail->avatar); ?>" alt="" width="100%">
                <ul class="rating pt-4"><b> Đánh giá :                     <span><?php echo e($detail->danhgia); ?></span>
                    </b>
                    <li class="fa fa-star ngoisao text-warning"></li>
                    <li class="fa fa-star ngoisao text-warning"></li>
                    <li class="fa fa-star ngoisao text-warning"></li>
                    <li class="fa fa-star ngoisao text-warning"></li>
                    <li class="fa fa-star"></li>
                </ul>
                <div class="row" style="padding: 13px">
                    <b><i class="fas fa-plane-departure p-2">&nbsp;</i>THÔNG TIN CHUYẾN ĐI</b>
                   <table border="1" cellpadding="10" style="border:1px solid #3bea69">
                    <tr>
                        <td><b>Nơi khởi hành:</b></td>
                        <td><b>Ngày khởi hành:</b></td>
                        <td><b>Thời gian:</b></td>
                        <td><b>Số chỗ:</b></td>
                        <td><b>Giá:</b></td>
                    </tr>
                    <tr>
                         <td><?php echo e($detail->noikhoihanh); ?></td>
                        <td><?php echo e($detail->ngaykhoihanh); ?></td>
                        <td><?php echo e($detail->songay); ?> ngày</td>
                        <td><?php echo e($detail->socho); ?> chỗ</td>
                        <td style="color: red"><?php echo e(number_format($detail->giamoi)); ?>đ</td>
                    </tr>
                   </table>
                    <div class="d-flex justify-content-center col-md-12 pt-2">
                        <a class="btn btn-primary" href="<?php echo e(route('dattour',$params = ['id'=> $detail->id])); ?>">Đặt ngay</a>
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-sm-12">
                <div class="vertical-tabs pt-3">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item pb-3">
                            <a class="nav-link active" data-toggle="tab" href="#home-v" role="tab" aria-controls="home">Chương
                                Trình Tour</a>
                        </li>
                        <li class="nav-item pb-3">
                            <a class="nav-link" data-toggle="tab" href="#profile-v" role="tab" aria-controls="profile">Chi
                                Tiết Tour</a>
                        </li>
                        <li class="nav-item pb-3">
                            <a class="nav-link" data-toggle="tab" href="#messages-v" role="tab"
                               aria-controls="messages">Lưu ý</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="home-v" role="tabpanel">
                            <div class="sv-tab-panel  p-4">
                                <b><i class="fas fa-map-marker-alt">&nbsp</i><?php echo $detail->lichtrinh; ?></b>
                            </div>
                        </div>
                        <div class="tab-pane" id="profile-v" role="tabpanel">
                            <div class="sv-tab-panel  p-4">
                                <p><?php echo e($detail->chitiet); ?></p>
                            </div>
                        </div>
                        <div class="tab-pane" id="messages-v" role="tabpanel">
                            <div class="sv-tab-panel  p-4">
                                <tr><b>Lưu Ý</b></tr>
                                <p><?php echo e($detail->luuy); ?></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master-layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>