<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRolePermission extends Model
{
    use HasFactory;
    public function userrolepermissions()
    {
        return $this->belongsToMany(UserRolePermissionMap::class,'user_role_permission_maps');
    }
}
