<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Collection;


class AdminBookingController extends Controller
{
    public function  ListBooking(){
        // List tour
        $listbooking = DB::table('tb_detail_booking')->orderBy('id','desc')
        ->get();
        $id=1;

        return view('admin.manage-booking', compact('listbooking', 'id'));


    }
    public function notification(){
        $data = [];
        $data['list'] = DB::table('tb_detail_booking')->get();
        return view('admin.header.header_top',$data);
    }

    public function  GetChangeBooking($id){
        // List tour
    $booking = DB::table('tb_detail_booking')
        ->where('id',$id)
        ->first();
    $data =[];
    $data['tb_status_booking'] = DB::table('tb_status_booking')->get();
    return view('admin.update-booking',compact('booking'),$data);
    }

    public function UpdateBooking(Request $request,$id){
        if ($request->isMethod('post')){

            $checkRules = [
                'id_status'=>'required',
                'name'=>'required',
                'id_tour'=>'required',
                'phone'=>'required',
                'email'=>'required',
                'address'=>'required'
            ];
            $messages = [
                'id_status.required' => 'Trạng thái không được để trống!',
                'name.required'=>'Tên không được để trống!',
                'id_tour.required'=>'ID tour không được để trống!',
                'phone.required'=>'SĐT không được để trống!',
                'email.required'=>'Email không được để trống!',
                'address.required'=>'Địa chỉ không được để trống!'
            ];
            $resValidator = Validator::make($request->all(), $checkRules,$messages);

            if ($resValidator->fails()) {
                return redirect(route('getchangebooking',$id))
                    ->withErrors($resValidator)
                    ->withInput();
                }
      // Ghi DB
            $dataInsert = [];
            $dataInsert['id_status'] = $request->get('id_status');
            $dataInsert['name'] = $request->get('name');
            $dataInsert['id_tour'] = $request->get('id_tour');
            $dataInsert['phone'] = $request->get('phone');
            $dataInsert['email'] = $request->get('email');
            $dataInsert['address'] = $request->get('address');

            $resInsert = DB::table('tb_detail_booking')
                ->where('id',$id)
                ->update($dataInsert);

            return redirect(route('listbooking'))
                ->with(['msg'=>'Cập nhật thành công đơn hàng id = ' . $id]);
        }
    }

    public function  DeleteBooking($id){
//        List tour
        $res = DB::table('tb_detail_booking')
            ->where('id',$id)
            ->delete();
        return redirect(route('listbooking'))
            ->with(['msg'=>'Xóa thành công bài viết id = ' . $id]);
    }

}
