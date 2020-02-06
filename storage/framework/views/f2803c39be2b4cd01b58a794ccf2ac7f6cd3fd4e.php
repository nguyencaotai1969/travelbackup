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
    <script src="<?php echo e(asset('ckeditor/ckeditor.js')); ?>"></script>
	

    <!--//skycons-icons-->
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
    <div class="main-grid">
        <div class="agile-grids">
            <!-- input-forms -->
            <div class="grids">
                <div class="progressbar-heading grids-heading">
                    <h2>Thêm Tour</h2>
                </div>
                <div class="panel panel-widget forms-panel">
                    <div class="forms">
                        <div class="form-grids widget-shadow" data-example-id="basic-forms">
                            <div class="form-title">
                                <h4>Thêm tour :</h4>
                            </div>
                            
                            <?php if($errors->any()): ?>
                                <div class="alert alert-danger">
                                    <ul>
                                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><?php echo e($error); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                            <?php if(Session::has('msg')): ?>
                                <p style="color: green;"><?php echo e(Session::get('msg')); ?></p>
                            <?php endif; ?>
                            <div class="form-body">
                                <form action="<?php echo e(route('admin_tour_save')); ?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Tên tour</label>
                                        <input type="text" name="name" class="form-control" placeholder="Tên tour">
                                    </div>
                                    <div class="form-group">
                                            <label>Giá cũ</label>
                                            <input type="number" name="gia" class="form-control" placeholder="Giá cũ">
                                    </div>
                                    <div class="form-group">
                                        <label>Giá mới</label>
                                        <input type="number" name="giamoi" class="form-control" placeholder="Giá mới">
                                    </div>
                                    <div class="form-group">
                                        <label>Lịch trình</label>
                                        <textarea name="lichtrinh" class="form-control" placeholder="Lịch trình" rows='10' id='lichtrinh'></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Số ngày</label>
                                        <input type="number" name="songay" class="form-control" placeholder="Số ngày">
                                    </div>
                                    <div class="form-group">
                                        <label>Ngày khởi hành</label>
                                        <input type="date" name="ngaykhoihanh" class="form-control" placeholder="Ngày khởi hành">
                                    </div>
                                    <div class="form-group">
                                        <label>Nơi khởi hành</label>
                                        <input type="text" name="noikhoihanh" class="form-control" placeholder="Nơi khởi hành">
                                    </div>
                                    <div class="form-group">
                                        <label>Số chỗ</label>
                                        <input type="number" name="socho" class="form-control"  placeholder="Số chỗ">
                                    </div>
                                    <div class="form-group">
                                        <label>Lưu ý</label>
                                        <textarea name="luuy" class="form-control" placeholder="Lưu ý"rows='10'></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Chi tiết</label>
                                        <textarea name="chitiet" class="form-control" placeholder="Chi tiết" rows='10'></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Avatar</label>
                                        <input name="avatar" type="file">
                                    </div>

                                    
                                    <div class="form-group">
                                        <label>Miền</label><br>
                                        <input style="margin-left: 40px;" type="radio" name="mien" value="1"> Miền Bắc
                                        <input style="margin-left: 40px;" type="radio" name="mien" value="2"> Miền Trung
                                        <input style="margin-left: 40px;" type="radio" name="mien" value="3"> Miền Nam
                                    </div>
                                    <button type="submit" class="btn btn-default w3ls-button">Submit</button>
                                    <?php echo csrf_field(); ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //input-forms -->
        </div>
    </div>
    <!-- footer -->
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
</script>
<script> CKEDITOR.replace('lichtrinh', {
        filebrowserBrowseUrl: '<?php echo e(asset('ckfinder/ckfinder.html')); ?>',
        filebrowserImageBrowseUrl: '<?php echo e(asset('ckfinder/ckfinder.html?type=Images')); ?>',
        filebrowserFlashBrowseUrl: '<?php echo e(asset('ckfinder/ckfinder.html?type=Flash')); ?>',
        filebrowserUploadUrl: '<?php echo e(asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files')); ?>',
        filebrowserImageUploadUrl: '<?php echo e(asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images')); ?>',
        filebrowserFlashUploadUrl: '<?php echo e(asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash')); ?>'
    }); </script>
</body>
</html>
