<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Collection;


class AdminContactController extends Controller
{
    public function  ListContact(){
        // List tour
        $data = [];
        $data['listcontact']= DB::table('tb_contact')->orderBy('id','desc')
        ->get();
        $data['id']=1;
        return view('admin.manage-contact',compact('data'),$data);
    }


    public function  DeleteContact($id){
//        List tour
        $res = DB::table('tb_contact')
            ->where('id',$id)
            ->delete();
        return redirect(route('listcontact'))
            ->with(['msg'=>'Xóa thành công tin nhắn id = ' . $id]);
    }

}
