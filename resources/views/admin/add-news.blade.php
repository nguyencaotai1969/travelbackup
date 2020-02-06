@extends('admin.layout-master')
@section('content')
    <div class="main-grid">
        <div class="agile-grids">
            <!-- input-forms -->
            <div class="grids">
                <div class="progressbar-heading grids-heading">
                    <h2>Thêm Tin Tức</h2>
                </div>
                <div class="panel panel-widget forms-panel">
                    <div class="forms">
                        <div class="form-grids widget-shadow" data-example-id="basic-forms">
                            <div class="form-title">
                                <h4>Thêm tin tức :</h4>
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
                                <form action="{{route('admin_news_save')}}" method="post" enctype="multipart/form-data">
                                    @csrf()

                                    <div class="form-group">
                                        <label>Tiêu đề</label>
                                        <input type="text" name="tieude" class="form-control" placeholder="Tên tour">
                                    </div>
                                    <div class="form-group">
                                        <label>Tóm tắt</label>
                                        <input  type="text" name="tomtat" class="form-control" placeholder="Tóm tắt">
                                    </div>
                                    <div class="form-group">
                                        <label>Nội dung</label>
                                        <textarea id="txt_content" name="noidung"  class="form-control" placeholder="Nội dung" rows='10' id='noidung'></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>Avatar</label>
                                        <input name="avatar" type="file">
                                    </div>
                                    <div class="form-group">
                                        <label>Điểm đến</label><br>
                                        <select name="diemden">
                                            @foreach($listDes as $des)
                                                <option value="{{$des->id}}">{{$des->name}}</option>
                                            @endforeach
                                        </select>
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

    <!-- footer -->
    <!-- //footer -->
@endsection
