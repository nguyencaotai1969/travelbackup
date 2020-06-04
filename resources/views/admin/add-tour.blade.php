@extends('admin.layout-master')
@section('content')
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
                            {{--Message--}}
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
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
                            <div class="form-body">
                                <form action="{{route('admin_tour_save')}}" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="{{ csrf_token()}}">
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
                                        <textarea id="txt_content_2" name="lichtrinh" id="lichtrinh" class="form-control" placeholder="Lịch trình" rows='10'></textarea>
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
                                        <textarea id="txt_content" name="luuy" class="form-control" placeholder="Lưu ý"rows='10'></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Chi tiết</label>
                                        <textarea id="txt_content_1" name="chitiet" class="form-control" placeholder="Chi tiết" rows='10'></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Điểm đến</label><br>
                                        @foreach($listDes as $des)
                                            <input type="checkbox" name="diemden[]" value="{{$des->slug}}">{{$des->name}}
                                        @endforeach
                                    </div>  
                                    <div>
                                        <input type="file" name="avatar">
                                    </div>
                                    <div class="form-group">
                                        <label>Miền</label><br>
                                        <input style="margin-left: 40px;" type="radio" name="mien" value="1"> Miền Bắc
                                        <input style="margin-left: 40px;" type="radio" name="mien" value="2"> Miền Trung
                                        <input style="margin-left: 40px;" type="radio" name="mien" value="3"> Miền Nam
                                    </div>
                                    <button type="submit" class="btn btn-default w3ls-button">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //input-forms -->
        </div>
    </div>
   @endsection
