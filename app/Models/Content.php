<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;
    public function roadmapSteps(){
     return $this->belongsTo(RoadmapStep::class);
    }

//    with region
public function regions(): \Illuminate\Database\Eloquent\Relations\HasMany
{
        return $this->hasMany(ContentRegion::class);
}

}
