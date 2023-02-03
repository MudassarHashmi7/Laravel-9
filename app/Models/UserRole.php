<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    use HasFactory;
//    public function user()
//    {
//        return $this->belongsTo(User::class);
//    }
    public function users()
    {
        return $this->belongsToMany(User::class,'user_role_maps');
    }
    public function userrolepermissions()
    {
        return $this->belongsToMany(UserRolePermission::class,'user_role_permission_maps','user_role_id','user_role_permission_id');
    }

}
