<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->hasMany(User::class,'region_id');
    }
    public function usernotification()
    {
        return $this->hasMany(UserNotification::class,'region_id');
    }
    public function regioncontent()
    {
        return $this->hasMany(RegionContent::class);
    }
    public function prospect()
    {
        return $this->hasMany(Prospect::class);
    }
}
