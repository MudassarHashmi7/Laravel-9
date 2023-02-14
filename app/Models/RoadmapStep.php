<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoadmapStep extends Model
{
    use HasFactory;
    public function content(){
     return $this->hasMany(Content::class);
    }
//    with content region
public function contentRegions(){
        return $this->hasMany(ContentRegion::class);
}
}
