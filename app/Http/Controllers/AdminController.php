<?php
namespace App\Http\Controllers;
class AdminController extends  Controller{

    public   function ImportPermission(){
        $folder_controller = app_path.'/app/Http/Controllers';
        echo $folder_controller;

        //1. Lấy danh sách file controller
        $listFile = scandir($folder_controller);

        echo '<pre>';
        print_r($listFile);

        $list_file_khong_import =['Controller.php','.','..','Auth'];

        foreach($listFile as $itemFileName){
            if(in_array($itemFileName,$list_file_khong_import))
                continue;
            /// đọc nội dung file code để lấy tên hàm
            ///
            $ten_controller = str_replace('Controller.php','',$itemFileName);

            echo $ten_controller .'<br>';

            $file_full_path = $folder_controller.'/'.$itemFileName;
            $content = file_get_contents($file_full_path);

            preg_match_all('/public[ ]+function[ ]+(.*)[ ]*\(/', $content, $tra_ve_mang_ten_ham);
            print_r($tra_ve_mang_ten_ham);
            echo '<hr>';

            // duyệt mảng tên hàm, ghép chuỗi thành tên permission, cái nào có trong
            // bảng permission rồi thì không thêm, cái nào chưa có thì thêm vào

            foreach($tra_ve_mang_ten_ham[1] as $ten_ham){
                $ten_pms =$ten_controller.'.'.$ten_ham;
                echo "<br>Ten PMS: ". $ten_pms;

                // kiểm tra chuỗi này có trong bảng permission chưa, nếu chưa thì thêm vào csdl.
                // phần này tự làm....

            }



        }




    }
}
