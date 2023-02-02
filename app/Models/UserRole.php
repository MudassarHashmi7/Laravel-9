<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class,'user_role_maps','user_id','user_role_id');
    }
    public function userrolepermissionmaps()
    {
        return $this->belongsToMany(UserRolePermissionMap::class,'user_role_permission_maps');
    }
}
