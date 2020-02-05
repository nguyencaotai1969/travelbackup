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
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $listtour; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stt => $tour): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($tour->id); ?></td>
                            <td><a target="_blank" href="<?php echo e(route('chitiettour',$tour->id)); ?>"><?php echo e($tour->name); ?></a></td>
                            <td><span style="text-decoration: line-through;"><strong><?php echo e(number_format($tour->gia)); ?></strong>đ</span>
                            </td>
                            <td><span style="color: red"><strong><?php echo e(number_format($tour->giamoi)); ?>đ</strong></span></td>
                            <td>
                                <button type="button" data-idsp="<?php echo e($tour->lichtrinh); ?>" class="btn btn-small btn-primary lt" data-toggle="modal" data-target="#lichtrinh">
                                    Lịch trình
                                </button>
                            </td>
                            <td><?php echo e($tour->songay); ?></td>
                            <td><?php echo e($tour->ngaykhoihanh); ?></td>
                            <td><?php echo e($tour->noikhoihanh); ?></td>
                            <td><?php echo e($tour->socho); ?></td>
                            <td><?php echo e($tour->sochodadat); ?></td>
                            <td>
                                <button type="button" data-idsp="<?php echo e($tour->luuy); ?>" class="btn btn-small btn-primary ly" data-toggle="modal" data-target="#luuy">
                                    Lưu ý
                                </button>
                            </td>
                            <td>
                                <button type="button" data-idsp="<?php echo e($tour->chitiet); ?>" class="btn btn-small btn-primary ct" data-toggle="modal" data-target="#chitiet">
                                    Chi tiết
                                </button>
                            </td>
                            <td><img style="width: 100px" src="../../storage/tour/avatar/<?php echo e($tour->avatar); ?>"></td>
                            <td><?php echo e($tour->id_diemden); ?></td>
                            <td><?php echo e($tour->id_mien); ?></td>


                            <td>
                            
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                    <a href="<?php echo e(route('getchange',$params = ['id'=> $tour->id])); ?>">Sửa</a>
                                </button>
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
            </div>
            <div class="modal" id="delete">
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
            <div class="modal" id="lichtrinh">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Lịch trình</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body" id="lichtrinh-body">

                        </div>
                    </div>
                </div>
            </div>
            <div class="modal" id="luuy">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Lưu ý</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body" id="luuy-body">

                        </div>
                    </div>
                </div>
            </div>
            <div class="modal" id="chitiet">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Chi tiết</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body" id="chitiet-body">

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
        $("#delete-body").html( "Bạn có chắc muốn xóa tour này? " + TourId);
        var Link = $(this).data('linkdel');
        $("#link-del").attr( "href" , Link);
        // As pointed out in comments,
        // it is unnecessary to have to manually call the modal.
        // $('#addBookDialog').modal('show');
    });
    $(document).on("click", ".lt", function () {
        var lichtrinh = $(this).data('idsp');
        $("#lichtrinh-body").html(lichtrinh);
    });
    $(document).on("click", ".ly", function () {
        var luuy = $(this).data('idsp');
        $("#luuy-body").html(luuy);
    });
    $(document).on("click", ".ct", function () {
        var chitiet = $(this).data('idsp');
        $("#chitiet-body").html(chitiet);
    });
</script>
</body>
</html>
