<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/carosel.css')); ?>">
<div>
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo e(asset('img/boats-hoi-an-lights-free-stock-photo-image-wallpaper.jpeg')); ?>"
                     class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?php echo e(asset('img/1736033.jpg')); ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?php echo e(asset('img/2557952.jpg')); ?>" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<div class="search-sec">
    <div class="container">
        <form action="#" method="post" novalidate="novalidate">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-12 p-0 offset-lg-1">
                    <select class="form-control search-slt" id="exampleFormControlSelect1">
                        <option>Khởi hành</option>
                        <option>Example one</option>
                        <option>Example one</option>
                        <option>Example one</option>
                        <option>Example one</option>
                        <option>Example one</option>
                        <option>Example one</option>
                    </select>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12 p-0">
                    <select class="form-control search-slt" id="exampleFormControlSelect1">
                        <option>Điểm đến</option>
                        <option>Example one</option>
                        <option>Example one</option>
                        <option>Example one</option>
                        <option>Example one</option>
                        <option>Example one</option>
                        <option>Example one</option>
                    </select>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12 p-0">
                    <input type="date" class="form-control search-slt" id="exampleFormControlSelect1"
                           placeholder="Ngày khởi hành">
                    </input>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12 p-0">
                    <select class="form-control search-slt" id="exampleFormControlSelect1">
                        <option>Giá</option>
                        <option>Example one</option>
                        <option>Example one</option>
                        <option>Example one</option>
                        <option>Example one</option>
                        <option>Example one</option>
                        <option>Example one</option>
                    </select>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12 p-0">
                    <button type="button" class="btn btn-primary wrn-btn"><b>Tìm Kiếm</b></button>
                </div>
            </div>
        </form>
    </div>
</div>
