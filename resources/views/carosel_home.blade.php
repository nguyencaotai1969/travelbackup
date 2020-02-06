<link rel="stylesheet" type="text/css" href="{{asset('css/carosel.css')}}">
<div class="overflow">
        <div class="row">
            <div class="col-md-12 crls-magrin">
                <!-- Start cssSlider.com -->
                <div class='csslider1 autoplay '>
                    <input name="cs_anchor1" id='cs_slide1_0' type="radio" class='cs_anchor slide' >
                    <input name="cs_anchor1" id='cs_slide1_1' type="radio" class='cs_anchor slide' >
                    <input name="cs_anchor1" id='cs_slide1_2' type="radio" class='cs_anchor slide' >
                    <input name="cs_anchor1" id='cs_play1' type="radio" class='cs_anchor' checked>
                    <input name="cs_anchor1" id='cs_pause1' type="radio" class='cs_anchor' >
                    <ul>
                        <div style="width: 100%; visibility: hidden; font-size: 0px; line-height: 0;">
                            <img src="{{asset('img/1736033.jpg')}}" style="width: 100%;">
                        </div>
                        <li class='num0 img'>
                            <img src="{{asset('img/1736033.jpg')}}" class="d-block w-100" alt="...">
                        </li>
                        <li class='num1 img'>
                            <img src="{{asset('img/boats-hoi-an-lights-free-stock-photo-image-wallpaper.jpeg')}}"
                                 class="d-block w-100" alt="...">
                        </li>
                        <li class='num2 img'>
                            <img src="{{asset('img/2557952.jpg')}}" class="d-block w-100" alt="...">
                        </li>

                    </ul>
                </div>
                <!-- End cssSlider.com -->





            </div><!--md12-->
        </div><!--row-->


</div>
<div class="search-sec">
    <div class="container">
        <form action="{{route('timkiem')}}" method="get">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                    <select name="noikhoihanh" class="form-control search-slt" id="exampleFormControlSelect1">
                        <option value="%">Khởi Hành</option>
                        @foreach($khoihanh as $stt => $v)
                            @php $v = (array)$v; @endphp
                            <option value="{{$v['noikhoihanh']}}">{{ucwords($v['noikhoihanh'])}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                    <select name="diemden" class="form-control search-slt" id="exampleFormControlSelect1">
                        <option value="%">Điểm Đến</option>
                        @foreach($diemden as $stt => $v)
                            @php $v = (array)$v;
                            @endphp
                            <option value="{{$v['id']}}">{{ucwords($v['name'])}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                    <select name="giamoi" class="form-control search-slt" id="exampleFormControlSelect1">
                        <option value="%">Mức Giá</option>

                            <option value="1">0-5.000.000đ</option>
                            <option value="2">5.000.000đ-10.000.000đ</option>
                            <option value="3">10.000.000đ</option>
                    </select>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                    <input type="submit" class="btn btn-primary wrn-btn" value="Tìm kiếm">
                </div>
            </div>
        </form>
    </div>
</div>


