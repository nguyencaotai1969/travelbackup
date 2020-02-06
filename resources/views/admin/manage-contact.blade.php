@extends('admin.layout-master')
@section('content')
        <div class="row danhsachtour-tour" style="padding: 29px;margin-top: 67px">
                        <h2 class="text-center text-primary"><b>Danh Sách Liên Hệ</b></h2>
            <div class="span5">

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
                <table class="table table-striped table-condensed">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên khách hàng</th>
                        <th>SĐT</th>
                        <th>Email</th>
                        <th>Tin nhắn</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($listcontact as $stt => $contact)
                        <tr>
                            <td>{{$id++}}</td>
                            <td>{{$contact->name}}</td>
                            <td>{{$contact->phone}}</td>
                            <td>{{$contact->email}}</td>
                            <td>{{$contact->message}}</td>


                            <td>
{{--                                Xóa--}}

                                <button type="button" data-idsp="{{$contact->id}}" data-linkdel="{{route('deletecontact',$contact->id)}}" class="btn btn-small btn-danger del" data-toggle="modal" data-target="#delete">
                                    Xóa
                                </button>

                                <!-- The Modal -->

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <div class="modal" id="delete">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Chú ý</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body" id="delete-body">

                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn" data-dismiss="modal">Không</button>

                                <a class="btn btn-danger" id="link-del" href="#">Có</a>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    <!-- //footer -->
@endsection