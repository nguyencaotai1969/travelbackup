<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Collection;
use Image;

class AdminNewsController extends Controller
{   public function AddNews(){
    $listDes = DB::table('tb_diemden')
        ->orderBy('name','asc')
        ->get();
    $data = ['listDes'=>$listDes];
    return view('admin.add-news',$data);

}
    public function SaveNews(Request $request){
        if ($request->isMethod('post')){
            $dataInsert = [];
          if ($request->hasFile('avatar')){
              if($request->file('avatar')){
                  $file_name= $request->file('avatar');
                  $new_name = time() .'.'.$file_name->getClientOriginalExtension();
                  $a = str_slug($request->get('tieude'));
                  Image::make($file_name)->save(public_path('/img/news/'.$a.'.'.$new_name));
                  $link_save_db = $new_name;
              }
          }else{
              echo 'chua co file';
          }
            $checkRules = [
                'tieude'=>'required|max:300',
                'tomtat'=>'required|max:1055',
                'noidung'=>'required',
                'diemden'=>'required',
                'avatar'=>'required|image|mimes:jpeg,bmp,png,gif|max:2048',
            ];
            $messages = [
                'tieude.required' => 'Tiêu đề không được để trống!',
                'tieude.max' => 'Tiêu đề không được quá 300 ký tự!',
                'tomtat.required' => 'Tóm tắt không được để trống!',
                'tomtat.max' => 'Tóm tắt không được quá 1055 ký tự!',
                'noidung.required' => 'Giá tour không được để trống!',
                'diemden.required' => 'Điểm đến không được để trống!',
                'avatar.required' => 'Avatar không được để trống!',
                'avatar.image' => 'Avatar phải là file ảnh!',
                'avatar.mimes'=>'Ảnh phải có đuôi là jpg,png,gif',
            ];
            $resValidator = Validator::make($request->all(), $checkRules,$messages);

            if ($resValidator->fails()) {
                return redirect(route('admin_news_add'))
                    ->withErrors($resValidator)
                    ->withInput();
            }
//      Ghi DB
            $dataInsert['tieude'] = $request->get('tieude');
            $dataInsert['tomtat'] = $request->get('tomtat');
            $dataInsert['noidung'] = $request->get('noidung');
            $dataInsert['id_user'] = 1;
            $dataInsert['slug']=str_slug($request->get('tieude')).'.'.time().'.html';
            $dataInsert['id_diemden'] = $request->get('diemden');
            $dataInsert['avatar'] = str_slug($dataInsert['tieude']).'.'.$link_save_db;
            $dataInsert['ngaydang'] = date("Y-m-d H:i:s");
             $resInsert = DB::table('tb_news')->insertGetId($dataInsert);
            return redirect(route('admin_news_add'))
                ->with(['msg'=>'Thêm mới thành công bài viết']);
        }
    }

    public function  ListNews(){
        // List tour
        $first = DB::table('tb_news')
            ->first();
        $listnews = DB::table('tb_news')->orderBy('id','desc')
            ->get();
        return view('admin.manage-news',compact('listnews','first'));
    }

    public function  GetChange($id){
        // List tour
        $news = DB::table('tb_news')
            ->where('id',$id)
            ->first();
        return view('admin.update-news',compact('news'));
    }

    public function UpdateNews(Request $request,$id){
        if ($request->isMethod('post')){
            $dataInsert = [];
            if($request->file('avatar')){
                $file_name= $request->file('avatar');
                $new_name = time() .'.'.$file_name->getClientOriginalExtension();
                $a = str_slug($request->get('tieude'));
                Image::make($file_name)->save(public_path('/img/news/'.$a.'.'.$new_name));
                $link_save_db = $new_name;
            }
            $checkRules = [
                'tieude'=>'required|max:300',
                'tomtat'=>'required|max:1055',
                'noidung'=>'required',
                'diemden'=>'required'
            ];
            $messages = [
                'tieude.required' => 'Tiêu đề không được để trống!',
                'tieude.max' => 'Tiêu đề không được quá 300 ký tự!',
                'tomtat.required' => 'Tóm tắt không được để trống!',
                'tomtat.max' => 'Tóm tắt không được quá 1055 ký tự!',
                'noidung.required' => 'Giá tour không được để trống!',
                'diemden.required' => 'Điểm đến không được để trống!'
            ];
            $resValidator = Validator::make($request->all(), $checkRules,$messages);

            if ($resValidator->fails()) {
                return redirect(route('getchangenews',$id))
                    ->withErrors($resValidator)
                    ->withInput();
            }
            // Ghi DB
            $dataInsert['tieude'] = $request->get('tieude');
            $dataInsert['tomtat'] = $request->get('tomtat');
            $dataInsert['slug']=str_slug($request->get('tieude')).'.'.time().'.html';
            $dataInsert['noidung'] = $request->get('noidung');
            $dataInsert['id_user'] = 1;
            $dataInsert['id_diemden'] = $request->get('diemden');
            if (isset($link_save_db)) {
                $dataInsert['avatar'] = str_slug($dataInsert['tieude']).'.'.$link_save_db;
            }
            $dataInsert['ngaydang'] = date("Y-m-d H:i:s");

            $resInsert = DB::table('tb_news')
                ->where('id',$id)
                ->update($dataInsert);

            return redirect(route('getchangenews',$id))
                ->with(['msg'=>'Cập nhật thành công bài viết id = ' . $id]);
        }
    }

    public function  DeleteNews($id){
//        List tour


        $resw = DB::table('tb_news')
            ->where('id',$id)
          ->select('avatar')->get($id);
      foreach ($resw as $delete_avatar) {
          $delete_file_avatar = $delete_avatar->avatar;
          File::delete(public_path('/img/news/'.$delete_file_avatar));
      }
        $res = DB::table('tb_news')
            ->where('id',$id)
            ->delete();


        return redirect(route('listnews'))
            ->with(['msg'=>'Xóa thành công bài viết id = ' . $id]);
    }

}
