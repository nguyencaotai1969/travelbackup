<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Image;




class AdminDestinationController extends Controller
{

    public  function  Adddestination(){
        $data=[];
        $data['mien']=DB::table('tb_mien')->get();
        return view('admin.add-destination',$data);
    }
    public  function Adddestination_save(Request $request){
//        echo "<pre>";
//        print_r($request->all());
//        die();
    $tb_diem_den = DB::table('tb_diemden')->get();
        if($request->isMethod('post')){
            $datainsert=[];
            if ($request->hasFile('avatar')){
                $diem_den_img =str_slug($request->get('diemden'));
                $file_name=$request->file('avatar');
                $new_name = time().'.'.$file_name->getClientOriginalExtension();
                Image::make($file_name)->save(public_path('/img/des/'.$diem_den_img.'.'.$new_name));
                $link_save_db = $new_name;

            }else{
                echo 'dsad';
            }
            $checkrule =
                [
                    'diemden'=>'required|max:300',
                    'noidung'=>'required|min:2',
                    'avatar'=>'required|image|mimes:jpeg,bmp,png,gif'
                ];
            $mesenger = [
                'diemden.required'=>'diem den khong duoc de trong',
                'noidung.required'=>'noi dung khong duoc de trong'
            ];
            $resValition = Validator::make($request->all(),$checkrule,$mesenger);
            if ($resValition->fails()) {
                return redirect(route('Add_destination'))
                    ->withErrors($resValition)
                    ->withInput();
            }
            $data=[];
            $data['diemden']=DB::table('tb_diemden')->get();
            foreach ($data['diemden'] as $diem_den){
                $datainsert['id']=$diem_den->id+1;
            }
            $datainsert['id_mien']=$request->get('mien');
            $datainsert['name']=$request->get('diemden');
            $datainsert['img']=str_slug($request->get('diemden')).'.'.$link_save_db;
            $datainsert['gioithieu']=$request->get('noidung');
            $datainsert['slug']=str_slug($request->get('diemden')).'.'.'html';
            $Getinser = DB::table('tb_diemden')->insert($datainsert);
            return redirect(route('Add_destination'))->with(['msg'=>'thanh cong']);
        }

    }
    public function  listdestination(){
        $data=[];
        $data['list_diemden']=DB::table('tb_diemden')->get();
        return view('admin.manage-destination',$data);
    }
    public function  GetChange($id){
        $data=[];
        $data['tb_diemden'] =DB::table('tb_diemden')->where('id',$id)->first();
        return view('admin.update-destination',$data);
    }
    public function  Update(Request $request,$id){
        if ($request->isMethod('post')){
            $dataInsetr=[];
            if ($request->file('avatar')){
                $file_name= $request->file('avatar');
                $new_name = time().'.'.$file_name->getClientOriginalExtension();
                $diemden = str_slug($request->get('name'));
                Image::make($file_name)->save(public_path('/img/des/'.$diemden.'.'.$new_name));
                $link_save_db = $new_name;
            }
            $checkreques =
                [
                    'name'=>'required',
                    'gioithieu'=>'required',
                    'avatar'=>'required'
                ];
            $messages =[
                'name.required'=>'Tên Điểm Đến Không Được Để Trống',
              'gioithieu.required'=>'Giới Thiệu Không Được Để Trống',
              'avatar.required'=>'avatar không được để trống'
            ];
            $resValidator = Validator::make($request->all(),$checkreques,$messages);

            if ($resValidator->fails()){
                return redirect(route('ChangeDestination',$id))->withErrors($resValidator)->withInput();
            }

            $dataInsetr['name']=$request->get('name');
            $dataInsetr['gioithieu']=$request->get('gioithieu');
            $dataInsetr['slug']='diem-den-'.str_slug($request->get('name')).'.'.'html';
            if (isset($link_save_db)){
                $dataInsetr['img']=str_slug($request->get('name')).'.'.$link_save_db;
            }
            $ResInsetr = DB::table('tb_diemden')->where('id',$id)->update($dataInsetr);
        }
        return redirect(route('ChangeDestination',$id))->with(['msg'=>'thanh cong'.$id]);
    }

}
