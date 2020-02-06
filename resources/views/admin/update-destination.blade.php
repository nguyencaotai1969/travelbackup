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
                                <h4>Tour {{$tb_diemden->id}}</h4>
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
                            <form action="{{route('UpdateDestination',$params = ['id'=> $tb_diemden->id])}}" method="POST" enctype="multipart/form-data">
                                <div class="form-body">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Tên tour</label>
                                            <input type="text" name="name" class="form-control" value="{{$tb_diemden->name}}">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Giới Thiệu</label>
                                            <input name="gioithieu" class="form-control" type="text" value="{{$tb_diemden->gioithieu}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Avatar</label>
                                            <input name="avatar" type="file" >
                                        </div>
                                    </div>
                                </div>
                          @csrf()
                    <!-- Modal footer -->
                        <div class="form-footer text-center" style="padding: 40px;">
                            <button type="reset" class="btn btn-danger"><a href="{{route('listdestination')}}">Hủy</a></button>
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

