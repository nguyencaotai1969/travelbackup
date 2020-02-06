<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Permission extends Model{
    protected $table = 'tb_permission';
    public function roles(){
        // lấy danh sách các nhóm tài khoản
        return $this->belongsToMany(Role::class,'tb_r_p');
    }
}
