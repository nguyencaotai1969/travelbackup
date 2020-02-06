<!DOCTYPE html>
<head>
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Colored Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() {setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link rel="stylesheet" href="<?php echo e(asset('css/admin/bootstrap.css')); ?>">
    <link href="<?php echo e(asset('css/admin/style.css')); ?>" rel='stylesheet' type='text/css'/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css
">
    <link
        href="https://fonts.googleapis.com/css?family=Baloo|Charm|IBM+Plex+Serif|Lobster|Playfair+Display&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Baloo|Baloo+Paaji|Charm|IBM+Plex+Serif|Lobster|Pattaya|Playfair+Display&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/admin/font.css')); ?>" type="text/css"/>
    <script src="<?php echo e(asset('js/admin/jquery2.0.3.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/admin/modernizr.js')); ?>"></script>
    <script src="<?php echo e(asset('js/admin/jquery.cookie.js')); ?>"></script>
    <script src="<?php echo e(asset('js/admin/jquery.cookie.js')); ?>"></script>
    <script src="<?php echo e(asset('js/admin/raphael-min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/admin/morris.js')); ?>"></script>
    <link rel="stylesheet" href="<?php echo e(asset('css/admin/morris.css')); ?>">
    <script src="<?php echo e(asset('js/admin/skycons.js')); ?>"></script>
    <!--//skycons-icons-->
    <style>
        .popup h2 {
            text-align: center;
        }

        .popup {
            text-align: center;
            padding-top: 130px;
        }
    </style>
</head>
<body class="dashboard-page">
<?php echo $__env->make('admin.header.header_left', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<section class="wrapper scrollable">
    <nav class="user-menu">
        <a href="javascript:;" class="main-menu-access">
            <i class="icon-proton-logo"></i>
            <i class="icon-reorder"></i>
        </a>
    </nav>
    <?php echo $__env->make('admin.header.header_top', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="container">
        <div class="row">
            <div class="span5">
                <?php if(Session::has('msg')): ?>
                    <p style="color: green;"><?php echo e(Session::get('msg')); ?></p>
                <?php endif; ?>
                <table class="table table-striped table-condensed">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên tour</th>
                        <th>Giá cũ</th>
                        <th>Giá mới</th>
                        <th>Lịch trình</th>
                        <th>Số ngày</th>
                        <th>Ngày khởi hành</th>
                        <th>Nơi khởi hành</th>
                        <th>Số chỗ</th>
                        <th>Số chỗ đã đặt</th>
                        <th>Lưu ý</th>
                        <th>Chi tiết</th>
                        <th>Avatar</th>
                        <th>ID điểm đến</th>
                        <th>ID miền</th>
                        <th>Trạng thái</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $listtour; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stt => $tour): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($tour->id); ?></td>
                            <td><?php echo e($tour->name); ?></td>
                            <td><?php echo e($tour->gia); ?></td>
                            <td><?php echo e($tour->giamoi); ?></td>

                            <td><?php echo e($tour->songay); ?></td>
                            <td><?php echo e($tour->ngaykhoihanh); ?></td>
                            <td><?php echo e($tour->noikhoihanh); ?></td>
                            <td><?php echo e($tour->socho); ?></td>
                            <td><?php echo e($tour->sochodadat); ?></td>


                            <td><img style="width: 100px" src="<?php echo e(base_path.$tour->avatar); ?>"></td>
                            <td><?php echo e($tour->id_diemden); ?></td>
                            <td><?php echo e($tour->id_mien); ?></td>
                            <?php
                                if($tour->id_status == 0)
                                    echo '<td><span class="label">Hủy</span></td>';

                                if($tour->id_status == 1)
                                    echo '<td><span class="label label-success">Chưa đủ</span></td>';

                                if($tour->id_status == 2)
                                    echo '<td><span class="label label-warning">Đã đủ</span></td>';

                                if($tour->id_status == 3)
                                    echo '<td><span class="label label-important">Đã hoàn thành</span></td>';
                            $id = $tour->id;
                            ?>

                            <td>
                            
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                    <a href="<?php echo e(route('getchange',$params = ['id'=> $tour->id])); ?>">Sửa</a>
                                </button>

                                <!-- The Modal -->
                                <div class="modal" id="myModal">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Sửa thông tin tour</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>

                                            <!-- Modal body -->
                                            <form action="" method="POST">
                                                <div class="modal-body">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Tên tour</label>
                                                            <input type="text" name="name" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Giá cũ</label>
                                                            <input type="number" name="gia" class="form-control" placeholder="Giá cũ">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Giá cũ</label>
                                                            <input type="number" name="gia" class="form-control" placeholder="Giá cũ">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Giá mới</label>
                                                            <input type="number" name="giamoi" class="form-control" placeholder="Giá mới">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Lịch trình</label>
                                                            <textarea name="lichtrinh" class="form-control" placeholder="Lịch trình" rows='10'></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Số ngày</label>
                                                            <input type="number" name="songay" class="form-control" placeholder="Số ngày">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Ngày khởi hành</label>
                                                            <input type="date" name="ngaykhoihanh" class="form-control" placeholder="Ngày khởi hành">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Nơi khởi hành</label>
                                                            <input type="text" name="noikhoihanh" class="form-control" placeholder="Nơi khởi hành">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Số chỗ</label>
                                                            <input type="number" name="socho" class="form-control"  placeholder="Số chỗ">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Lưu ý</label>
                                                            <textarea name="luuy" class="form-control" placeholder="Lưu ý"rows='10'></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Chi tiết</label>
                                                            <textarea name="chitiet" class="form-control" placeholder="Chi tiết" rows='10'></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Điểm đến</label><br>
                                                            <input type="text" name="id_diemden" value=""/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Miền</label><br>
                                                            <input type="number" name="id_mien" value=""/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Avatar</label>
                                                            <input name="avatar" type="file">
                                                        </div>
                                                    </div>

                                                </div>
                                                <?php echo csrf_field(); ?>

                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Hủy</button>
                                                    <button type="submit" class="btn btn-primary">Lưu</button>

                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>


                                <button type="button" data-idsp="<?php echo e($tour->id); ?>" data-linkdel="<?php echo e(route('deletetour',$tour->id)); ?>" class="btn btn-small btn-danger del" data-toggle="modal" data-target="#delete">
                                    Xóa
                                </button>

                                <!-- The Modal -->

                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div><div class="modal" id="delete">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Chú ý</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body" id="delete-body">

                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn" data-dismiss="modal">Không</button>

                                <a class="btn btn-danger" id="link-del" href="#">Có</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>		<!-- footer -->
    <!-- //footer -->
</section>
<script src="<?php echo e(asset('js/admin/bootstrap.js')); ?>"></script>
<script src="<?php echo e(asset('js/admin/proton.js')); ?>"></script>
<script>
    var theme = $.cookie('protonTheme') || 'default';
    $('body').removeClass (function (index, css) {
        return (css.match (/\btheme-\S+/g) || []).join(' ');
    });
    if (theme !== 'default') $('body').addClass(theme);

    $(document).on("click", ".del", function () {
        var TourId = $(this).data('idsp');
        $("#delete-body").html( "Bạn có chắc muốn xóa tour này?" + TourId);
        var Link = $(this).data('linkdel');
        $("#link-del").attr( "href" , Link);
        // As pointed out in comments,
        // it is unnecessary to have to manually call the modal.
        // $('#addBookDialog').modal('show');
    });
</script>
</body>
</html>
