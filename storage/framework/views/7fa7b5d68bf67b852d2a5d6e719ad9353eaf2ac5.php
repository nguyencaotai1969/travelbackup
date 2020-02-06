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
<?php echo $__env->yieldContent('content'); ?>
<script type="text/javascript" src="<?php echo e(asset('ckeditor/ckeditor.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('ckeditor/config.js')); ?>"></script>

<script src="<?php echo e(asset('js/admin/bootstrap.js')); ?>"></script>
<script src="<?php echo e(asset('js/admin/proton.js')); ?>"></script>
<script>
    var theme = $.cookie('protonTheme') || 'default';
    $('body').removeClass(function (index, css) {
        return (css.match(/\btheme-\S+/g) || []).join(' ');
    });
    if (theme !== 'default') $('body').addClass(theme);
</script>
<script type="text/javascript">

CKEDITOR.replace("content",{
                               toolbar: [
                    { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'Strike', '-', 'RemoveFormat','-','Source']},
                    { name: 'clipboard', items: ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo']},
                    { name: 'styles', items : [ 'Styles','Format','Fonts','FontSize' ] },
                    { name: 'colors', items : [ 'TextColor','BGColor' ] },
                    { name: 'insert', items: ['Image', 'Flash', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar', 'PageBreak', 'Iframe']},
                    { name: 'paragraph', items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock']},
                    { name: 'links', items: ['Link', 'Unlink', 'Anchor']},
                    { name: 'tools', items : [ 'Maximize','About'] }
                ],

                                extraPlugins: "tableresize"
                    });</script>
</body>
</html>
