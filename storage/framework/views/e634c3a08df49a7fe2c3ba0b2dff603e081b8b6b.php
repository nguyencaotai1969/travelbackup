<?php $__env->startSection('title','Chi tiết tour'); ?>
<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/chitiettour/chitiettour.css')); ?>">
    <link href="https://fonts.googleapis.com/css?family=Baloo|Baloo+Paaji|Charm|IBM+Plex+Serif|Lobster|Pattaya|Playfair+Display&display=swap"
          rel="stylesheet">
          
    <div class="container chitiettour">
        <h3 class="text-center danhsachtour"><?php echo e($detail->name); ?></h3>
        <div class="row">
            <div class="col-md-5 pt-3">
                
                <img class="col-md-12" src="../storage/tour/avatar/<?php echo e($detail->avatar); ?>" alt="" width="100%">
                <ul class="rating pt-4"><b> Đánh giá : </b>
                    <li class="fa fa-star ngoisao"></li>
                    <li class="fa fa-star ngoisao"></li>
                    <li class="fa fa-star ngoisao"></li>
                    <li class="fa fa-star ngoisao"></li>
                    <li class="fa fa-star"></li>
                    <span><?php echo e($detail->danhgia); ?></span>
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
                        <td><?php echo e($detail->giamoi); ?> đ</td>
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
                            <div class="sv-tab-panel">
                                <b><i class="fas fa-map-marker-alt">&nbsp;</i><?php echo e($detail->lichtrinh); ?></b>
                                <p>Xe và hướng dẫn viên Vietravel đón Quý khách tại 190 Pasteur, Q.3, TP.HCM, khởi hành
                                    đến cửa khẩu Mộc Bài. Ăn sáng trên đường. Đến Mộc Bài, Quý khách làm thủ tục qua cửa
                                    khẩu. Xe và hướng dẫn viên địa phương đón đoàn và đưa đi dùng bữa trưa tại nhà hàng
                                    địa phương . Sau đó, Quý khách tiếp tục lên đường đi Siem Reap. Đến nơi, Quý khách
                                    về nhận phòng tại khách sạn . Ăn tối và tự do nghỉ ngơi.
                                    Xem nội dung đầy đủ tại:
                                    https://travel.com.vn/tourNNSGN100-109-240919XE-D-O/siem-reap-phnom-penh-khach-san-4sao,-tour-tieu-chuan.aspx?LM=1
                                    Nguồn: travel.com.vn</p>
                                <b><i class="fas fa-map-marker-alt">&nbsp;</i>SIEM REAP (Ăn ba bữa)</b>.
                                <p>Ăn sáng tại khách sạn. Quý khách tham quan Cổng nam Angkor Thom và Ta Prohm, đây là
                                    những cung điện lớn nhất với các mặt Phật được tạc trên đá cùng những phù điêu tuyệt
                                    đẹp, xe đưa Quý khách ngang qua đền Bayon, Baphuon và Quảng trường đấu voi. Tiếp
                                    theo, quý khách tham quan đền Angkor Wat - Một trong những kỳ quan của thế giới .
                                    Sau bữa trưa, quý khách sẽ trở về khách sạn nghỉ ngơi….trước khi dùng ăn tối quý
                                    khách sẽ tham quan đồi Bakheng ngắm nhìn đất nước Chùa Tháp xinh đẹp và huyền bí.
                                    Quý khách dùng bữa tối và thưởng thức chương trình ca múa nhạc truyền thống của
                                    người Khmer. Sau đó, Quý khách trở về khách sạn nghỉ ngơi.

                                    Xem nội dung đầy đủ tại:
                                    https://travel.com.vn/tourNNSGN100-109-240919XE-D-O/siem-reap-phnom-penh-khach-san-4sao,-tour-tieu-chuan.aspx?LM=1
                                    Nguồn: travel.com.vn</p>
                                <b><i class="fas fa-map-marker-alt">&nbsp;</i>PHNOM PENH - MỘC BÀI - TP. HỒ CHÍ MINH (Ăn
                                    sáng, ăn trưa)</b>.
                                <p>Ăn sáng tại khách sạn. Quý khách lên đường đến Phnom Penh - Thủ đô của Vương quốc
                                    Campuchia. Quý khách dùng bữa trưa tại nhà hàng địa phương ở Phnom Penh và nhận
                                    phòng tại khách sạn 4 sao. Buổi chiều, Quý khách đi tham quan Wat Phnom - Một ngôi
                                    chùa rất nổi tiếng tại thành phố Phnom Penh, tiếp tục tham quan Chùa Bạc và Hoàng
                                    Cung.
                                    Sau đó, Quý khách tự do tham quan và mua sắm tại City Jewelry. Sau bữa tối, Quý
                                    khách tham quan và tự do thử vận may tại Casino nổi tiếng của Campuchia.
                                    Xem nội dung đầy đủ tại:
                                    https://travel.com.vn/tourNNSGN100-109-240919XE-D-O/siem-reap-phnom-penh-khach-san-4sao,-tour-tieu-chuan.aspx?LM=1
                                    Nguồn: travel.com.vn
                                </p>
                            </div>
                        </div>
                        <div class="tab-pane" id="profile-v" role="tabpanel">
                            <div class="sv-tab-panel">
                                <p><?php echo e($detail->chitiet); ?></p>
                            </div>
                        </div>
                        <div class="tab-pane" id="messages-v" role="tabpanel">
                            <div class="sv-tab-panel">
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