<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoadmapStep extends Model
{
    use HasFactory;

    public function regioncontent()
    {
        return $this->hasMany(RegionContent::class);
    }
    public function content()
    {
        return $this->belongsTo(Content::class);
    }
}

