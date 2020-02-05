<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link REL="SHORTCUT ICON" HREF="<?php echo e(asset('img/logo.png')); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/login/reset_password.css')); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
    <form method="POST" action="<?php echo e(route('password.update')); ?>">
     <?php echo csrf_field(); ?>
    <input type="hidden" name="token" value="<?php echo e($token); ?>">
    <div class="wrap">
        <div class="card-header text-center btn-primary text-primary"><b><?php echo e(__('Đổi Mật Khẩu Của Bạn')); ?></b></div>
        <div class="mat-div">
                 <label for="first-name" class="mat-label "><b>Email</b></label>
                 <input id="email" type="email" id="first-name" class="mat-input form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e($email ?? old('email')); ?>" required autofocus>
                  <?php if($errors->has('email')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                    <?php endif; ?>
        </div>
        <div class="mat-div">

                  <label for="first-name" class="mat-label"><b>Mật Khẩu</b></label>
                   <input id="password"  id="last-name" type="password" class="mat-input form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required>
                   <?php if($errors->has('password')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                    <?php endif; ?>
        </div>

        <div class="mat-div">
                <label for="address" class="mat-label"><b>Nhập Lại Mật Khẩu</b></label>
                <input type="password" name="password_confirmation" class="mat-input form-control" id="address">
        </div>
        <div class="col-md-12 text-center p-3">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Đổi mật Khẩu')); ?>

                                </button>
        </div>
    </div>
</form>
<script type="text/javascript" src="<?php echo e(asset('js/resetpassword.js')); ?>"></script>
</body>
</html>