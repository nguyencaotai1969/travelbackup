<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
class TourController extends Controller
{
//    public function Filter(){
//        $khoihanh = DB::table('tb_tour')->groupBy('noikhoihanh')->select('noikhoihanh')->get();
//        print_r($khoihanh);
//        return view('carosel_home',compact('listtour','toursale','listdes'));
//    }
    public function Search(Request $request){
        //       Filter
        $data = [];
        $data['khoihanh'] = DB::table('tb_tour')
            ->groupBy('noikhoihanh')->select('noikhoihanh')->get();
        $data['diemden'] = DB::table('tb_diemden')->select('name','id','slug')->get();
        $data['listnews'] = DB::table('tb_news')
            ->limit(4)
            ->get();


//        if ($request->isMethod('post')) {
            if ($request->hasAny('giamoi', 'diemden', 'noikhoihanh')) {
                $giamoi = $request->input('giamoi');
                $searchdiemden = $request->input('diemden');
                $noikhoihanh = $request->input('noikhoihanh');
                $s1 = 0;
                $s2 = 100000000;
                if ($giamoi == 1) {
                    $s1 = 0;
                    $s2 = 5000000;
                }

                if ($giamoi == 2) {
                    $s1 = 5000000;
                    $s2 = 10000000;
                }
                if ($giamoi == 3) {
                    $s1 = 10000000;
                    $s2 = 100000000;
                }
                if ($noikhoihanh != ' ') {
                    $noikhoihanh = $request->input('noikhoihanh');
                } else  $noikhoihanh = '%';

                $data['s1'] = $s1;
                $data['s2'] = $s2;
                $data['giamoi'] = $giamoi;
                $data['noikhoihanh'] = $noikhoihanh;

                if ($searchdiemden != ' ') {
                    $searchdiemden = $request->input('diemden');
                } else  $searchdiemden = '%';
                $list = DB::table('tb_tour')
                    ->where('id_diemden','like','%'.' '.$searchdiemden)
                    ->orWhere('id_diemden','like','%'.' '.$searchdiemden.' '.'%')
                    ->orWhere('id_diemden','like',$searchdiemden.' '.'%')
                    ->orWhere('id_diemden','like',$searchdiemden)
                    ->select('id')
                    ->get();
                $list_id = [];
                foreach ($list as $stt => $tour){
                    $list_id[] = $tour->id;
                }
                $data['search'] = DB::table('tb_tour')
                    ->where('giamoi','>', $s1)
                    ->where('giamoi','<', $s2)
                    ->where('noikhoihanh','like',$noikhoihanh)
                    ->whereIn('id',$list_id)
                    ->orderBy('ngaydang', 'desc')
                    ->paginate(10);
                if( $data['search']->count() <= 0)
                    $data['err'] = 'Không có giữ liệu !';

            }

            else {
                $data['err'] = 'Nội dung tìm kiếm không hợp lệ!';
//                return view('tour.tim_kiem')->with(['err' => 'Nội dung tìm kiếm không hợp lệ!']);
            }

//        }
        $data['params'] = $request->all();
        return view('tour.tim_kiem',$data);
    }
    public function TrangChu(){
//       Filter
        $khoihanh = DB::table('tb_tour')->groupBy('noikhoihanh')->select('noikhoihanh')->get();
        $diemden = DB::table('tb_diemden')->select('name','id','slug')->get();
//      Trang chủ
        $listtour = DB::table('tb_tour')->orderBy('ngaydang','desc')
            ->take(4)
            ->get();
        $listtour_after = DB::table('tb_tour')->orderBy('ngaydang','asc')->take('4')->get();
        $toursale = DB::table('tb_tour')->whereNotNull('gia')
            ->orderBy('giamoi','asc')->limit('3')
           ->get();
        $listdes = DB::table('tb_diemden')->orderBy('id','desc')->get();
        return view('page.trangchu',compact('listtour','toursale','listdes','khoihanh','diemden','listtour_after'));
    }
    public function  DiemDen($id){
//       Filter
        $khoihanh = DB::table('tb_tour')->groupBy('noikhoihanh')->select('noikhoihanh')->get();
        $diemden = DB::table('tb_diemden')->select('id','name')->get();
//        Detail
        $des     = DB::table('tb_diemden')
            ->where('slug','=',$id)
            ->first();
//        List tour
        $listtour = DB::table('tb_tour')
            ->where('id_diemden','like','%'.' '.$id)
            ->orWhere('id_diemden','like','%'.' '.$id.' '.'%')
            ->orWhere('id_diemden','like',$id.' '.'%')
            ->paginate(5);
        $listnews = DB::table('tb_news')
            ->limit(5)
            ->get();
        return view('tour.chi_tiet_diem_den',compact('des','khoihanh','diemden','listtour','listnews'));
    }
    public function TourDetail($id){
        $detail = DB::table('tb_tour')
            ->where('slug','=',$id)
            ->first();
        if (is_null($detail)){
            return view('errors.404');
        }else{
            return view('tour.chitiettour',compact('detail'));
        }
    }
    public function DatTour($id){
        $tour= DB::table('tb_tour')
            ->where('slug','=',$id)
            ->first();
        if (isset($tour)) {
            return view('tour.dat_tour', compact('tour'));
        }else{
            die(view('errors.404'));
        }
    }
    public function DuLich(){
//       Filter
        $khoihanh = DB::table('tb_tour')->groupBy('noikhoihanh')->select('noikhoihanh')->get();
        $diemden = DB::table('tb_diemden')->select('name','id')->get();
//        List
        $mienbac = DB::table('tb_tour')
            ->Where('id_diemden','like','%1%')
            ->limit(4)
            ->get();
        $mientrung = DB::table('tb_tour')
            ->where('id_mien','like','%2%')
            ->limit(4)
            ->get();
        $miennam = DB::table('tb_tour')
            ->where('id_mien','like','%3%')
            ->limit(4)
            ->get();
        return view('page.dulich',compact('mienbac','mientrung','miennam','khoihanh','diemden'));
    }
    public function  ListTour($id){
//       Filter
        $khoihanh = DB::table('tb_tour')->groupBy('noikhoihanh')->select('noikhoihanh')->get();
        $diemden = DB::table('tb_diemden')->select('name','id')->get();
//        List tour
        $listtour = DB::table('tb_tour')
            ->where('id_mien',$id)
            ->paginate(5);
        $mien = DB::table('tb_mien')
            ->where('id',$id)
            ->first();
        $listnews = DB::table('tb_news')
            ->limit(5)
            ->get();
        return view('tour.ds-tour',compact('khoihanh','diemden','listtour','mien','listnews'));
    }
//     public function ListBook(){
//         $data = [];
//         $data['list'] = DB::table('tb_book')->get();
//         // Lấy các cột dữ liệu khác nhau
//         $row = DB::table('tb_book');
//         //Xem lệnh Sql
//         echo $row->toSql();
//         // Lấy dữ liệu
//         $listB = $row->get();
//         $data['list_book'] = $listB;
//         return view('book.list-book',$data);
//     }
//     public function AddBook(){
//         $listCat = DB::table('tb_cat')
//             ->orderBy('cat_name','asc')
//             ->get();
//         $data = ['listCat'=>$listCat];
//         return view('book.add-book',$data);
//     }
// //    public function UpFile(Request $request)
// //    {
// //   Request $request){
////         echo $request->get('id');
//// //        $resDel = DB::table('tb_book')->deleteGetID();
////     } }
//     public function DeleteBook(
}
