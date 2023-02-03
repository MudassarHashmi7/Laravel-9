<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRolePermission extends Model
{
    use HasFactory;
    public function userroles()
    {
        return $this->belongsToMany(UserRolePermissionMap::class,'user_role_permission_maps','user_role_id','user_role_permission_id');
    }

}
