<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<style>
    @import  url('https://fonts.googleapis.com/css?family=Open+Sans');
    @import  url('https://fonts.googleapis.com/css?family=Montserrat');

    body {
        font-family: 'Montserrat', sans-serif;

    }

    /* Category Ads */

    #ads {
        margin: 30px 0 30px 0;

    }

    #ads .card-notify-badge {
        position: absolute;
        left: -10px;
        top: -20px;
        background: #f2d900;
        text-align: center;
        border-radius: 30px 30px 30px 30px;
        color: #000;
        padding: 5px 10px;
        font-size: 14px;

    }

    #ads .card-notify-year {
        position: absolute;
        right: -10px;
        top: -20px;
        background: #ff4444;
        border-radius: 50%;
        text-align: center;
        color: #fff;
        font-size: 14px;
        width: 50px;
        height: 50px;
        padding: 15px 0 0 0;
    }


    #ads .card-detail-badge {
        background: #f2d900;
        text-align: center;
        border-radius: 30px 30px 30px 30px;
        color: #000;
        padding: 5px 10px;
        font-size: 14px;
    }



    #ads .card:hover {
        background: #fff;
        box-shadow: 12px 15px 20px 0px rgba(46,61,73,0.15);
        border-radius: 4px;
        transition: all 0.3s ease;
    }

    #ads .card-image-overlay {
        font-size: 20px;

    }


    #ads .card-image-overlay span {
        display: inline-block;
    }


    #ads .ad-btn {
        text-transform: uppercase;
        width: 150px;
        height: 40px;
        border-radius: 80px;
        font-size: 16px;
        line-height: 35px;
        text-align: center;
        border: 3px solid #e6de08;
        display: block;
        text-decoration: none;
        margin: 20px auto 1px auto;
        color: #000;
        overflow: hidden;
        position: relative;
        background-color: #e6de08;
    }

    #ads .ad-btn:hover {
        background-color: #e6de08;
        color: #1e1717;
        border: 2px solid #e6de08;
        background: transparent;
        transition: all 0.3s ease;
        box-shadow: 12px 15px 20px 0px rgba(46,61,73,0.15);
    }

    #ads .ad-title h5 {
        text-transform: uppercase;
        font-size: 18px;
    }
</style>
<div class="container">
    <br>
        <br>
        <div class="row" id="ads">
            <!-- Category Card -->
            <div class="col-md-12">
                <div class="card rounded">
                    <div class="card-image">
                        <span class="card-notify-badge"><b>Nơi Khởi Hành</b> <?php echo e($users->noikhoihanh); ?></span>
                        <span class="card-notify-year"><b>số chỗ</b> <?php echo e($users->socho); ?></span>
                        <img width="500" height="50%" src="../storage/tour/avatar/<?php echo e($users->avatar); ?>" alt="Alternate Text" />
                    </div>
                    <div class="card-image-overlay m-auto">
                        <span class="card-detail-badge">Used</span>
                        <span class="card-detail-badge"><?php echo e(number_format($users->giamoi)); ?>đ</span>
                        <span class="card-detail-badge"><?php echo e(number_format($users->gia)); ?>đ</span>
                    </div>
                    <div class="card-body text-center">
                        <div class="ad-title m-auto">
                            <h5><?php echo e($users->name); ?></h5>
                        </div>
                        <a class="ad-btn" href="#">View</a>
                    </div>
                </div>
            </div>

        </div>
</div>

</body>
</html>
