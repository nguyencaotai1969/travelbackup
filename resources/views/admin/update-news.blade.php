@extends('admin.layout-master')
@section('content')
    <div class="main-grid">
        <div class="agile-grids">
            <!-- input-forms -->
            <div class="grids">
                <div class="progressbar-heading grids-heading">
                    <h2>Sửa bài viết</h2>
                </div>
                <div class="panel panel-widget forms-panel">
                    <div class="forms">
                        <div class="form-grids widget-shadow" data-example-id="basic-forms">
                            <div class="form-title">
                                <h4>Bài viết {{$news->id}}</h4>
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
                                <form action="{{route('updatenews',$news->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf()
                                    <div class="form-body">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Tiêu đề</label>
                                                <input type="text" name="tieude" class="form-control" value="{{$news->tieude}}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Tóm tắt</label>
                                                <input type="text" name="tomtat" class="form-control" value="{{$news->tomtat}}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Nội dung</label>
                                                <textarea id="txt_content" name="noidung" class="form-control" placeholder="Nội dung" rows='10' id='noidung'>{{$news->noidung}}</textarea>

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Điểm đến</label><br>
                                                <input type="text" name="diemden" value="{{$news->id_diemden}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Avatar</label>
                                                <input name="avatar" type="file" >
                                            </div>
                                        </div>


                                <!-- Modal footer -->
                                    <div  class="form-footer">
                                        <button type="reset" class="btn btn-danger">Hủy</button>
                                        <button type="submit" class="btn btn-primary">Lưu</button>

                                    </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //input-forms -->
        </div>
    </div>
    <!-- footer -->
    <!-- //footer -->
@endsection
