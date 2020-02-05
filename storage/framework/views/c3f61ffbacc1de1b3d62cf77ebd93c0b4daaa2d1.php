<nav class="navbar navbar-expand-md fixed-top top-nav">
    <div class="container">
        <a class="navbar-brand" href="<?php echo e(route('trangchu')); ?>"><img src="<?php echo e(asset('img/logo.png')); ?>" width="100"
                                                                  height="37" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true"></i></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                    <a class="nav-link trangchu" href="<?php echo e(route('trangchu')); ?>"><i class="fas fa-home"></i>&nbsp;Trang Chủ
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link dulich" href="<?php echo e(route('dulich')); ?>"><i class="fas fa-plane"></i>&nbsp;Du Lịch</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link tintuc" href="<?php echo e(route('tintuc')); ?>"><i class="fas fa-book-open"></i>&nbsp;Tin Tức</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link gioithieu" href="<?php echo e(route('gioithieu')); ?>"><i class="fas fa-crown"></i>&nbsp;Giới
                        Thiệu</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link lienhe" href="<?php echo e(route('lienhe')); ?>"><i class="far fa-address-book"></i>&nbsp;Liên
                        Hệ</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link dangnhap" href="<?php echo e(route('login')); ?>"><i class="fas fa-sign-in-alt"></i>&nbsp;Đăng
                        Nhập</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
