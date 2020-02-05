<?php $__env->startSection('title','Chi tiết tour'); ?>
<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/chitiettour/chitiettour.css')); ?>">
    <link href="https://fonts.googleapis.com/css?family=Baloo|Baloo+Paaji|Charm|IBM+Plex+Serif|Lobster|Pattaya|Playfair+Display&display=swap"
          rel="stylesheet">
    <style>
        .chitiettour{margin-bottom: 50px;}
        .danhsachtour{font-family: 'Pattaya', sans-serif;}
        .detail{background-color: #f0f0f0;}
        .rating li{margin-top: 20px;
                color: yellow}
        #left{margin-left: 30px;}
        #home-v,#profile-v,#messages-v{background-color: #99d699}
        .sv-tab-panel{margin: 0px 40px}
    </style>
    <div class="container chitiettour">
        <h3 class="text-center danhsachtour"><?php echo e($detail->name); ?></h3>

        <div class="row text-left text-xs-center text-md-left" id="tour-detail">
            <div class="image-1 col-md-8">
                <img class="col-md-12" src="<?php echo e(base_path.$detail->avatar); ?>" alt="">
            </div>
            <div class="detail col-md-4 ml-auto ">
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <span><?php echo e($detail->danhgia); ?></span>
                </ul>
                <div class="row ">
                    <div  class="col-md-5" id="left">
                        <p>Nơi khởi hành:</p>
                        <p>Ngày khởi hành:</p>
                        <p>Thời gian:</p>
                        <p>Số chỗ:</p>
                        <p style="margin-top: 24px;">Giá: </p>
                    </div>
                    <div class="col-md-5" id="right">
                        <p><?php echo e($detail->noikhoihanh); ?></p>
                        <p><?php echo e($detail->ngaykhoihanh); ?></p>
                        <p><?php echo e($detail->songay); ?> ngày</p>
                        <p><?php echo e($detail->socho); ?> chỗ</p>
                        <p style="color: red; font-size: 24px;"><?php echo e($detail->giamoi); ?> đ</p><br>
                    </div>
                    <div class="d-flex justify-content-center col-md-12">
                    <a class="btn btn-primary" href="<?php echo e(route('dattour',$params = ['id'=> $detail->id])); ?>">Đặt ngay</a></div>
                </div>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="vertical-tabs">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item pb-3">
                            <a class="nav-link active" data-toggle="tab" href="#home-v" role="tab" aria-controls="home">Lịch trình</a>
                        </li>
                        <li class="nav-item pb-3">
                            <a class="nav-link" data-toggle="tab" href="#profile-v" role="tab" aria-controls="profile">Chi
                                Tiết</a>
                        </li>
                        <li class="nav-item pb-3">
                            <a class="nav-link" data-toggle="tab" href="#messages-v" role="tab"
                               aria-controls="messages">Lưu ý</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="home-v" role="tabpanel">
                                <div style="" class="sv-tab-panel">
                                <?php echo e($detail->lichtrinh); ?>

                            </div>
                        </div>
                        <div class="tab-pane" id="profile-v" role="tabpanel">
                            <div class="sv-tab-panel">
                                <b><i class="fas fa-plane-departure">&nbsp;</i>THÔNG TIN CHUYẾN BAY</b>
                                <table border="1" cellpadding="10">
                                    <tr>
                                        <td>Ngày đi</td>
                                        <td>Đến</td>
                                        <td>chuyến bay</td>
                                    </tr>
                                    <tr>
                                        <td>Ngày đi: 24/09/2019 04:30</td>
                                        <td>Đến: 24/09/2019 18:00</td>
                                        <td>Chuyến bay: XE DI</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane" id="messages-v" role="tabpanel">
                            <div style="margin-left: 10px" class="sv-tab-panel">
                                <tr><b>Lưu Ý</b></tr>
                                <p>Các điều kiện đăng ký tour:</p>
                                <p>Hộ chiếu của Quý khách phải còn thời hạn trên 6 tháng tính đến ngày về. Quý khách vui
                                    lòng gửi hộ chiếu gốc cho Vietravel trước khi khởi hành ít nhất 02 ngày làm
                                    việc.</p>
                                <p>Khi đăng ký quý khách vui lòng đóng tiền cọc 50% để giữ chỗ và bổ sung bản photo hộ
                                    chiếu. Phần còn lại thanh toán hết trước 1 tuần đối với ngày thường, trước 2 tuần
                                    đối với tour lễ, Tết. Sau khi đóng cọc Vietravel sẽ xác nhận với Quý khách số ghế
                                    ngồi trên xe.</p>
                                <p>Giá trẻ em áp dụng từ 2 tuổi cho đến dưới 12 tuổi.</p>
                                <p>Nếu yêu cầu ở phòng đơn, Quý khách vui lòng thanh toán tiền phụ thu.</p>
                                <p>Quý khách mang 2 Quốc tịch hoặc Travel document (chưa nhập quốc tịch) vui lòng thông
                                    báo với nhân viên bán tour ngay thời điểm đăng ký tour và nộp bản gốc kèm các giấy
                                    tờ có liên quan (nếu có).
                                    Quý khách chỉ mang thẻ xanh (thẻ tạm trú tại nước ngoài) và không còn hộ chiếu VN
                                    còn hiệu lực thì không đăng ký du lịch sang nước thứ ba được.
                                </p>
                                <p>Quý khách có nhu cầu xuất Hóa đơn, vui lòng báo cho nhân viên lúc đăng ký và thanh
                                    toán tour. Vietravel sẽ không giải quyết các trường hợp xuất Hóa đơn cho khách sau
                                    thời gian tour đã khởi hành
                                    - Khách nữ từ 55 tuổi trở lên và khách nam từ 60 trở lên: nên có người thân dưới 55
                                    tuổi (đầy đủ sức khỏe) đi cùng. Riêng khách từ 70 tuổi trở lên: bắt buộc phải có
                                    người thân dưới 55 tuổi (đầy đủ sức khỏe) đi cùng. Ngoài ra, khách từ 75 tuổi trở
                                    lên khuyến khích đóng thêm phí bảo hiểm cao cấp.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master-layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>