<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Collection;
use Image;

class AdminTourController extends Controller
{   public function AddTour(){
        $listDes = DB::table('tb_diemden')
            ->orderBy('name','asc')
            ->get();
        $data = ['listDes'=>$listDes];
        return view('admin.add-tour',$data);
    }
    public function SaveTour(Request $request){
        if ($request->isMethod('post')){
            $dataInsert = [];
            if($request->file('avatar')){
                $file_name= $request->file('avatar');
                $new_name = time() .'.'.$file_name->getClientOriginalExtension();
                $a = str_slug($request->get('name'));
                Image::make($file_name)->save(public_path('/img/tour/'.$a.'.'.$new_name));
                $link_save_db = $new_name;
            }
            $checkRules = [
                'name'=>'required|max:50',
                'giamoi'=>'required|numeric',
                'lichtrinh'=>'required',
                'songay'=>'required|integer',
                'ngaykhoihanh'=>'required',
                'noikhoihanh'=>'required',
                'socho'=>'required|integer',
                'chitiet'=>'required',
                'avatar'=>'required|image',
                'diemden'=>'required',
                'mien'=>'required|integer',
            ];
            $messages = [
                'name.required' => 'Tên tour không được để trống!',
                'name.max' => 'Tên tour không được quá 50 ký tự!',
                'giamoi.required' => 'Giá tour không được để trống!',
                'lichtrinh.required' => 'Lịch trình không được để trống!',
                'songay.required' => 'Số ngày không được để trống!',
                'songay.integer' => 'Số ngày phải là số nguyên!',
                'ngaykhoihanh.required' => 'Ngày khởi hành không được để trống!',
                'noikhoihanh.required' => 'Nơi khởi hành không được để trống!',
                'socho.required' => 'Số chỗ không được để trống!',
                'socho.integer' => 'Số chỗ phải là số nguyên!',
                'luuy.required' => 'Lưu ý không được để trống!',
                'chitiet.required' => 'Chi tiết không được để trống!',
                'avatar.required' => 'Avatar không được để trống!',
                'avatar.image' => 'Avatar phải là file ảnh!',
                'diemden.required' => 'Điểm đến không được để trống!',
                'mien.required'=> 'Miền không được để trống!',
                'mien.integer'=> 'Dữ liệu id miền phải là số!'
            ];
            $resValidator = Validator::make($request->all(), $checkRules,$messages);
            if ($resValidator->fails()) {
                return redirect(route('admin_tour_add'))
                    ->withErrors($resValidator)
                    ->withInput();
            }
//      Ghi DB
            $arr = $request->get('diemden');
//            print_r($arr);
            $id_diemden =  implode(' ', $arr);
            $dataInsert['name'] = $request->get('name');
            $dataInsert['gia'] = $request->get('gia');
            $dataInsert['giamoi'] = $request->get('giamoi');
            $dataInsert['lichtrinh'] = $request->get('lichtrinh');
            $dataInsert['songay'] = $request->get('songay');
            $dataInsert['ngaykhoihanh'] = $request->get('ngaykhoihanh');
            $dataInsert['noikhoihanh'] = $request->get('noikhoihanh');
            $dataInsert['socho'] = $request->get('socho');
            $dataInsert['luuy'] = $request->get('luuy');
            $dataInsert['chitiet'] = $request->get('chitiet');
            $dataInsert['sochodadat'] = 0;
            $dataInsert['id_user'] = 1;
            $dataInsert['slug'] = str_slug($request->get('name')).'.'.rand(30,500).'.html';
            $dataInsert['id_diemden'] = $id_diemden;
            $dataInsert['id_mien'] = $request->get('mien');
            $dataInsert['id_status'] = 1;
            $dataInsert['sochodadat'] = 0;
            $dataInsert['danhgia'] = 0;
            $dataInsert['avatar'] = str_slug($dataInsert['name']).'.'.$link_save_db;
            $dataInsert['ngaydang'] = date("Y-m-d H:i:s");

            $resInsert = DB::table('tb_tour')->insertGetId($dataInsert);

            return redirect(route('admin_tour_add'))
                ->with(['msg'=>'Thêm mới thành công tour id = ' . $resInsert]);
        }
    }

    public function  ListTour(){
//        List tour
    $listtour = DB::table('tb_tour')
        ->orderBy('id','desc')
        ->get();
    $mien = DB::table('tb_mien')
            ->first();

        return view('admin.manage-tour',compact('listtour','mien'));
    }

    public function  GetChange($id){
//        List tour
        $data=[];
    $data['tour'] = DB::table('tb_tour')
        ->where('id',$id)
        ->first();
    $data['diem_den'] = DB::table('tb_diemden')->get();
    return view('admin.update-tour',$data);
    }

    public function UpdateTour(Request $request,$id){
        $link_save_db = '';
//        echo "<pre>";
//        print_r($request->file('avatar'));

        if ($request->isMethod('post')){
            $dataInsert = [];
            if($request->file('avatar')){
                $file_name= $request->file('avatar');
                $new_name = time() .'.'.$file_name->getClientOriginalExtension();
                $a = str_slug($request->get('name'));
                Image::make($file_name)->save(public_path('/img/tour/'.$a.'.'.$new_name));
                $link_save_db = $new_name;
            }
//die($link_save_db);

            $checkRules = [
                'name'=>'required',
                'giamoi'=>'required|numeric',
                'lichtrinh'=>'required',
                'songay'=>'required|integer',
                'ngaykhoihanh'=>'required',
                'noikhoihanh'=>'required',
                'socho'=>'required|integer',
                'sochodadat'=>'required|integer',
                'id_status'=>'required|integer',
                'chitiet'=>'required',
                'id_diemden'=>'required',
                'id_mien'=>'required|integer',
                'danhgia'=>'required',
            ];
            $messages = [
                'name.required' => 'Tên tour không được để trống!',
                'giamoi.required' => 'Giá tour không được để trống!',
                'lichtrinh.required' => 'Lịch trình không được để trống!',
                'songay.required' => 'Số ngày không được để trống!',
                'songay.integer' => 'Số ngày phải là số nguyên!',
                'ngaykhoihanh.required' => 'Ngày khởi hành không được để trống!',
                'noikhoihanh.required' => 'Nơi khởi hành không được để trống!',
                'socho.required' => 'Số chỗ không được để trống!',
                'socho.integer' => 'Số chỗ phải là số nguyên!',
                'sochodadat.required' => 'Số chỗ đã đặt không được để trống!',
                'sochodadat.integer' => 'Số chỗ đã đặt phải là số nguyên!',
                'id_status.required' => 'Trạng thái không được để trống!',
                'id_status.integer' => 'Trạng thái phải là số nguyên!',
                'luuy.required' => 'Lưu ý không được để trống!',
                'chitiet.required' => 'Chi tiết không được để trống!',
                'id_diemden.required' => 'Điểm đến không được để trống!',
                'id_mien.required'=> 'ID miền không được để trống!',
                'id_mien.integer'=> 'ID miền phải là số!',
                'danhgia.required'=> 'Đánh giá không được để trống!'
            ];
            $resValidator = Validator::make($request->all(), $checkRules,$messages);

            if ($resValidator->fails()) {
                return redirect(route('getchange',$params = ['id'=> $id]))
                    ->withErrors($resValidator)
                    ->withInput();
            }
//      Ghi DB
            $dataInsert['name'] = $request->get('name');
            $dataInsert['gia'] = $request->get('gia');
            $dataInsert['giamoi'] = $request->get('giamoi');
            $dataInsert['lichtrinh'] = $request->get('lichtrinh');
            $dataInsert['songay'] = $request->get('songay');
            $dataInsert['ngaykhoihanh'] = $request->get('ngaykhoihanh');
            $dataInsert['noikhoihanh'] = $request->get('noikhoihanh');
            $dataInsert['socho'] = $request->get('socho');
            $dataInsert['slug'] = str_slug($request->get('name')).'.'.rand(40,500).'.html';
            $dataInsert['sochodadat'] = $request->get('sochodadat');
            $dataInsert['id_status'] = $request->get('id_status');
            $dataInsert['luuy'] = $request->get('luuy');
            $dataInsert['chitiet'] = $request->get('chitiet');
            if ($link_save_db) {
                $dataInsert['avatar'] = str_slug($dataInsert['name']).'.'.$link_save_db;
            }
            $dataInsert['id_user'] = 1;
            $dataInsert['id_diemden'] = $request->get('id_diemden');
            $dataInsert['id_mien'] = $request->get('id_mien');
            $dataInsert['ngaydang'] = date("Y-m-d H:i:s");
            $dataInsert['danhgia'] = $request->get('danhgia');
//            $dataInsert['id'] = $request->get('id');
            $resInsert = DB::table('tb_tour')
                ->where('id',$id)
                ->update($dataInsert);
            return redirect(route('getchange',$params = ['id'=> $id]))
                ->with(['msg'=>'Cập nhật thành công tour id = ' . $id]);
        }
    }

    public function  DeleteTour($id){
//        List tour
        $resw = DB::table('tb_tour')
            ->where('id',$id)
            ->select('avatar')
            ->get($id);

        foreach ($resw as $delete_tour){
            $delete_tour_img = $delete_tour->avatar;
            File::delete(public_path('/img/tour/'.$delete_tour_img));
        }

        $res = DB::table('tb_tour')
            ->where('id',$id)
            ->delete();
        return redirect(route('listtour'))
            ->with(['msg'=>'Xóa thành công tour id = ' . $id]);
    }

}
