<!DOCTYPE html>
<head>
<title>Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() {setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="stylesheet" href="{{asset('css/admin/bootstrap.css')}}">
<link href="{{asset('css/admin/style.css')}}" rel='stylesheet' type='text/css'/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css
">
<link rel="stylesheet" href="{{asset('css/admin/font.css')}}" type="text/css"/>
<script src="{{asset('js/admin/jquery2.0.3.min.js')}}"></script>
<script src="{{asset('js/admin/modernizr.js')}}"></script>
<script src="{{asset('js/admin/jquery.cookie.js')}}"></script>
<script src="{{asset('js/admin/jquery.cookie.js')}}"></script>
<script src="{{asset('js/admin/raphael-min.js')}}"></script>
<script src="{{asset('js/admin/morris.js')}}"></script>
<link rel="stylesheet" href="{{asset('css/admin/morris.css')}}">
<!--//skycons-icons-->
</head>
<body class="dashboard-page">
@include('admin.header.header_left')
@include('admin.header.header_top')
<section class="wrapper scrollable">
    <nav class="user-menu">
        <a href="javascript:;" class="main-menu-access text-primary">
            <i class="icon-proton-logo"></i>
            <i class="icon-reorder"></i>
            <span class="navbar-toggler-icon"></span>
        </a>
    </nav>
    @yield('content')
</section>
<script src="{{asset('js/admin/bootstrap.js')}}"></script>
<script src="{{asset('js/admin/proton.js')}}"></script>
<script>
    var theme = $.cookie('protonTheme') || 'default';
    $('body').removeClass(function (index, css) {
        return (css.match(/\btheme-\S+/g) || []).join(' ');
    });
    if (theme !== 'default') $('body').addClass(theme);
</script>
<script src="{{asset('/ckeditor/ckeditor/ckeditor.js')}}"></script>
<script>
    CKEDITOR.replace("txt_content",{
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

        extraPlugins: "tableresize",
        height:500

    });
</script>
<script>
    CKEDITOR.replace("txt_content_1",{
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

        extraPlugins: "tableresize",
        height:500

    });
</script>
<script>
    CKEDITOR.replace("txt_content_2",{
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

        extraPlugins: "tableresize",
        height:500

    });
</script>

</body>
</html>
