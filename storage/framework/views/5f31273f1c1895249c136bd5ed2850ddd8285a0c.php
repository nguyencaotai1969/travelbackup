<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>login</title>
    <link REL="SHORTCUT ICON" HREF="<?php echo e(asset('img/logo.png')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/login/login.css')); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="login-wrap">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <div class="login-html">
        <a href="<?php echo e(asset('trangchu')); ?>" data-toggle="tooltip" title="Về Trang Chủ"><i class="fas fa-home"></i></a>&nbsp;&nbsp;
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab cursor">Đăng
            Nhập</label>
        <input id="tab-2" type="radio" name="tab" class="for-pwd"><label for="tab-2" class="tab cursor">Đăng Kí</label>
        <div class="login-form">
            <form method="" action="">
                <div class="sign-in-htm">
                    <div class="group">
                        <label for="user" class="label">Tên Tài Khoản</label>
                        <input id="user" type="text" class="input" placeholder="Tên Tài Khoản">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Mật Khẩu</label>
                        <input id="pass" type="password" class="input" data-type="password" placeholder="Mật Khẩu">
                    </div>
                    <div class="group">
                        <input type="submit" class="button" value="Login">
                    </div>
                    <div class="hr"></div>
                </div>
            </form>
            <form method="" action="">
                <div class="for-pwd-htm">
                    <div class="group">
                        <label for="user" class="label">Tên Tài Khoản</label>
                        <input id="user" type="text" class="input" placeholder="Tên Tài Khoản">
                    </div>
                    <div class="group">
                        <label for="user" class="label">Email</label>
                        <input id="user" type="email" class="input" placeholder="email">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Mật Khẩu</label>
                        <input id="pass" type="password" class="input" data-type="password" placeholder="Mật Khẩu">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Nhập Lại Mật Khẩu</label>
                        <input id="pass" type="password" class="input" data-type="password"
                               placeholder="Nhập Lại Mật Khẩu">
                    </div>
                    <div class="group">
                        <input type="submit" class="button" value="Sing In">
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
<video id="video_background" preload="auto" autoplay="true" loop="loop" muted volume="0">

    <source src="<?php echo e(asset('img/cauvang.mp4')); ?>" type="video/mp4"/>

</video>
<script src="<?php echo e(asset('js/js_home.js')); ?>">
</script>
<script src="<?php echo e(asset('bootstrap/js/bootstrap.min.js')); ?>"></script>
</body>
</html>


