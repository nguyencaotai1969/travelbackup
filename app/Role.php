<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Role extends Model{
    protected $table = 'tb_role';
    protected $fillable =['id','name'];

    public function permission(){
        return $this->belongsToMany(Permission::class,'tb_r_p');
    }
}
