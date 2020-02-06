<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
//    Sửa
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
//    Sửa
    protected $fillable = [
        'name', 'email', 'password','id_group_user','role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    /**
     * Hàm lấy danh sách tất cả các vai trò (nhóm tài khoản)
     *
     *
     */
    public function role(){
        return $this->belongsTo(Role::class);
    }

    public function hasPermission(Permission $permission){
//        echo $permission->name;

        $check = !!optional(optional($this->role)->permission)->contains($permission);

        return $check;
    }

}
