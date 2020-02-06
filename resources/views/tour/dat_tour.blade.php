@extends('master-layout')
@section('title','Liên Hệ')
<link rel="stylesheet" type="text/css" href="{{asset('css/lienhe/lienhe.css')}}">
@section('content')
    <section>
        <div class="container infor-tour"><br>
            <h3 class="text-center text-primary" style="text-decoration:none">Thông Tin Tour Của Bạn</h3><br>
            <div class="row text-left text-xs-center text-md-left" id="des-detail">
                <div class="image-1 col-md-5">
                    <img class="col-md-12" src="../img/tour/{{$tour->avatar}}" alt="">
                </div>
                <div class="detail col-md-7 row">
                    <h5><b><a style="text-decoration: none" href="{{route('chitiettour',$tour->slug)}}">{{$tour->name}}</a></b></h5>
                    <br>
                    <div class=" col-md-6">
                        <span><b>{{$tour->danhgia}}</b></span>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star"></i><br>
                        <span>Mã: {{$tour->id}}</span><br>
                        <span>Thời gian: {{$tour->songay}} ngày</span><br>
                        <span>Nơi khởi hành: {{$tour->noikhoihanh}}</span><br>
                        <span>Ngày khởi hành: {{$tour->ngaykhoihanh}}</span>
                    </div>
                    <div class="right col-md-6 ml-auto">
                        <span>Số chỗ còn:  {{($tour->socho)-($tour->sochodadat)}}</span><br><br>
                        <span>Giá 1 khách:</span><br>
                        <span style="color: red; font-size: 22px"><b>{{number_format($tour->giamoi)}}đ</b></span>
                    </div>

                </div>
            </div>

            <div class="contact mb-6"><br>
                @if ($errors->any())
                    <div >
                        <ul class="alert alert-primary text-danger" role="alert">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


                @if(Session::has('msg'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        <span style="color: green">{{Session::get('msg')}}</span>
                    </div>
                @endif
                <form method="post" action="{{route('luudon',$params = ['id'=> $tour->slug])}}">
                    <div class="row">
                        <div class="contact-left col-md-6 col-xs-6 form-group">
                            <p>Họ và tên</p>
                            <input type="text" class="form-control" name="name" value="" placeholder="Họ tên"><br>
                            <p>Email</p>
                            <input type="email" class="form-control" name="email" value="" placeholder="E-mail"><br>
                        </div>
                        <div class="contact-right col-md-6 col-xs-6">
                            <p>Điện thoại</p>
                            <input type="number" class="form-control" name="phone" value="" placeholder="Phone"><br>
                            <p>Địa chỉ</p>
                            <input type="address" class="form-control" name="address" value="" placeholder="Địa chỉ"><br>
                        </div>
                        <div class="text-left" style="margin-left: 20px">
                            <p>Phương thức thanh toán</p>
                            <p><input type="radio" name="pay" value="1"> Tiền mặt <i class="fas fa-money-bill-wave"></i></p>
                            <p><input type="radio" name="pay" value="2"> Chuyển khoản <i class="fas fa-credit-card"></i></a>
                        </div>

                    </div>
                    <h2 class="text-center p-3">
                        <input class="btn btn-primary" type="submit" name="button" value="Đặt Tour">
                    </h2>
                    @csrf()
                </form>

            </div>
        </div>
    </section>


@endsection
