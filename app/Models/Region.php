<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;
    protected $table = 'regions';
    public function prospects(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Prospect::class);
    }
//    with user notifications
      public function notifications(){
        return $this->hasMany(UserNotification::class);
      }
//    with region content
public function regionContent(): \Illuminate\Database\Eloquent\Relations\HasMany
{
        return $this->hasMany(ContentRegion::class);
}



//public function contents(){
//        return $this->belongsToMany(Content::class);
//}


}
