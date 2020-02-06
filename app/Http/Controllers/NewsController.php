<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class NewsController extends Controller
{
//    public function Filter(){
//        $khoihanh = DB::table('tb_tour')->groupBy('noikhoihanh')->select('noikhoihanh')->get();
//        print_r($khoihanh);
//        return view('carosel_home',compact('listtour','toursale','listdes'));
//    }


    public function  ListNews(){

        $first = DB::table('tb_news')
        ->first();
        $listnews1 = DB::table('tb_news')
        ->limit(4,2)
        ->get();
//        List tour
        $listnews2 = DB::table('tb_news')
        ->whereNotBetween('id', [1,9])->orderBy('id','desc')
            ->paginate(4);

        return view('page.tintuc',compact('first','listnews1','listnews2'));
    }

    public function DetailNews($id){
      $news = DB::table('tb_news')
            ->where('slug','=',$id)
            ->first();
       $listnews = DB::table('tb_news')
        ->orderby('id','desc')
        ->limit(5)
        ->get();
       if (isset($news)) {
           return view('page.chitiettintuc', compact('news', 'listnews'));
       }else{
           die(view('errors.404'));
       }
    }

     public function Contact(){
        return redirect(route('lienhe'));
    }

    public function SaveContact(Request $request){
      if ($request->isMethod('post')){

            $checkRules = [
                'name'=>'required|max:50',
                'email'=>'required',
                'phone'=>'required|max:30',
                'message'=>'required'
            ];
            $messages = [
                'name.required' => 'Họ tên không được để trống!',
                'name.max' => 'Họ tên không được quá 50 ký tự!',
                'email.required' => 'Email không được để trống!',
                'phone.required' => 'SĐT không được để trống!',
                'phone.max' => 'SĐT không được quá 30 ký tự!',
                'message.required' => 'Tin nhắn không được để trống!'
            ];
            $resValidator = Validator::make($request->all(), $checkRules,$messages);

            if ($resValidator->fails()) {
                return redirect(route('lienhe'))
                    ->withErrors($resValidator)
                    ->withInput();
                }
      // Ghi DB
            $dataInsert = [];
            $dataInsert['name'] = $request->get('name');
            $dataInsert['email'] = $request->get('email');
            $dataInsert['phone'] = $request->get('phone');
            $dataInsert['message'] = $request->get('message');

            $resInsert = DB::table('tb_contact')
                ->insertGetId($dataInsert);

            return redirect(route('lienhe'))
                ->with(['msg'=>'Cảm Ơn Bạn Đã Liện Hệ Với Chúng Tôi']);
        }
    }

}
