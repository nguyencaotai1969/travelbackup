@extends('admin.layout-master')
@section('content')
    <div class="main-grid">
        <div class="agile-grids">
            <!-- input-forms -->
            <div class="grids">
                <div class="progressbar-heading grids-heading">
                    <h2>Thêm Điểm Đến</h2>
                </div>
                <div class="panel panel-widget forms-panel">
                    <div class="forms">
                        <div class="form-grids widget-shadow" data-example-id="basic-forms">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="form-title">
                                <h4>Thêm Điểm Đến</h4>
                            </div>
                                @if(Session::has('msg'))
                                    <div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert">x</button>
                                        <span style="color: green">{{Session::get('msg')}}</span>
                                    </div>
                                @endif
                            {{--Message--}}
                            <div class="form-body">
                                <form action="{{route('Save_Add_destination')}}" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Tên Điểm Đến</label>
                                        <input type="text" name="diemden" class="form-control" placeholder="Tên tour">
                                    </div>
                                    <div class="form-group">
                                        <select name="mien" id="">
                                            @for ($i = 0; $i < count($mien) ; $i++)
                                                <option value="{{$mien[$i]->id}}">{{$mien[$i]->name}}</option>
                                            @endfor
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Giới Thiệu</label>
                                        <textarea id="txt_content" name="noidung"  class="form-control" placeholder="Nội dung" rows='10' ></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>Avatar</label>
                                        <input name="avatar" type="file">
                                    </div>
                                    <button type="submit" class="btn btn-default w3ls-button">Submit</button>
                                    @csrf()
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
