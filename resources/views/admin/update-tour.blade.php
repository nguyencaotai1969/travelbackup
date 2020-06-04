   @extends('admin.layout-master')
@section('content')
    <div class="main-grid">
        <div class="agile-grids">
            <!-- input-forms -->
            <div class="grids">
                <div class="progressbar-heading grids-heading">
                    <h2>Sửa thông tin tour</h2>
                </div>
                <div class="panel panel-widget forms-panel">
                    <div class="forms">
                        <div class="form-grids widget-shadow" data-example-id="basic-forms">
                            <div class="form-title">
                                <h4>Tour {{$tour->id}}</h4>
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
                                <p style="color: green;">{{Session::get('msg')}}</p>
                            @endif
                                <form action="{{route('updatetour',$params = ['id'=> $tour->id])}}" method="POST" enctype="multipart/form-data">
                                    <div class="form-body">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Tên tour</label>
                                                <input type="text" name="name" class="form-control" value="{{$tour->name}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Số ngày</label>
                                                <input type="number" name="songay" class="form-control" value="{{$tour->songay}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Giá cũ</label>
                                                <input type="number" name="gia" class="form-control" value="{{$tour->gia}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Giá mới</label>
                                                <input type="number" name="giamoi" class="form-control" value="{{$tour->giamoi}}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Lịch trình</label>
                                                <textarea id="txt_content" name="lichtrinh" class="form-control" rows='10'>{{$tour->lichtrinh}}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Ngày khởi hành</label>
                                                <input type="date" name="ngaykhoihanh" class="form-control" value="{{$tour->ngaykhoihanh}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nơi khởi hành</label>
                                                <input type="text" name="noikhoihanh" class="form-control" value="{{$tour->noikhoihanh}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Số chỗ</label>
                                                <input type="number" name="socho" class="form-control"  value="{{$tour->socho}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Số chỗ đã đặt</label>
                                                <input type="number" name="sochodadat" class="form-control"  value="{{$tour->sochodadat}}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Lưu ý</label>
                                                <textarea id="txt_content_1" name="luuy" class="form-control" rows='10'>{{$tour->luuy}}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Chi tiết</label>
                                                <textarea id="txt_content_2" name="chitiet" class="form-control" rows='10'>{{$tour->chitiet}}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Điểm đến</label><br>
                                                    @foreach ($diem_den as $diemden)
                                                        <input type="checkbox" name="diemden[]" value="{{$diemden->slug}}">{{$diemden->name}}
                                                    @endforeach

                                            </div>
                                        </div>
                                        
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label>Miền</label><br>
                                                <select name="id_mien"  class="form-control search-slt" id="exampleFormControlSelect1">
                                                    <option value="1">Miền Bắc</option>
                                                    <option value="2">Miền Trung</option>
                                                    <option value="3">Miền Nam</option>
                                                </select>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Avatar</label>
                                                <input name="avatar" type="file" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Trạng thái</label>
                                                <select name="id_status" class="form-control search-slt" id="exampleFormControlSelect1">
                                                    <option value="0">Hủy</option>
                                                    <option value="1">Chưa Đủ</option>
                                                    <option value="2">Đã Đủ</option>
                                                    <option value="3">Đã Hoàn Thành</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Đánh giá</label>
                                                <input type="number" name="danhgia" class="form-control"  value="{{$tour->danhgia}}">
                                            </div>
                                        </div>
                                    </div>
                                @csrf()

                                <!-- Modal footer -->
                                    <div class="form-footer text-center" style="padding: 40px;">
                                        <button type="reset" class="btn btn-danger">Hủy</button>
                                        <button type="submit" class="btn btn-primary">Lưu</button>

                                    </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //input-forms -->
@endsection
    <!-- footer -->
    <!-- //footer -->

