@extends('admin.layout-master')
@section('content')
    <div class="container danhsachtour-tour" style="padding: 29px;margin-top: 67px">
        <div class="row">
            <h2 class="text-center text-primary"><b>Danh Sách Đặt Hàng</b></h2>
            <div class="span5 pt-2">
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
                        <th>ID tour</th>
                        <th>SĐT</th>
                        <th>Địa chỉ</th>
                        <th>Email</th>
                        <th>Ngày đặt</th>
                        <th>Thanh toán</th>
                        <th>Tình trạng</th>
                        <th>ID tài khoản</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($listbooking as $stt => $booking)
                        <tr>
                            <td>{{$id++}}</td>
                            <td>{{$booking->name}}</td>
                            <td>{{$booking->id_tour}}</td>
                            <td>{{$booking->phone}}</td>
                            <td>{{$booking->address}}</td>
                            <td>{{$booking->email}}</td>
                            <td>{{$booking->time}}</td>
                            @php
                                if($booking->pay == 1)
                                    echo '<td><span class="label label-primary">Tiền mặt</span></td>';

                                if($booking->pay == 2)
                                    echo '<td><span class="label label-primary">Chuyển khoản</span></td>'
                            @endphp
                            @php
                                if($booking->id_status == 0)
                                    echo '<td><span class="label label-default">Hủy</span></td>';

                                if($booking->id_status == 1)
                                    echo '<td><span class="label label-danger">Chưa cọc</span></td>';

                                if($booking->id_status == 2)
                                    echo '<td><span class="label label-warning">Đã cọc</span></td>';

                                if($booking->id_status == 3)
                                    echo '<td><span class="label label-success">Đã thanh toán</span></td>';
                            @endphp
                            <td>{{$booking->id_user}}</td>


                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                    <a href="{{route('getchangebooking',$booking->id)}}">Sửa</a>
                                </button>
                            </td>
                            <td>
{{--                                Xóa--}}

                                <button type="button" data-idsp="{{$booking->id}}" data-linkdel="{{route('deletebooking',$booking->id)}}" class="btn btn-small btn-danger del" data-toggle="modal" data-target="#delete">
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
    </div>      <!-- footer -->
    <!-- //footer -->
@endsection
