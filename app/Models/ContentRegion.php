<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentRegion extends Model
{
    use HasFactory;
    public function content(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Content::class);
    }
//    with region
public function regions(): \Illuminate\Database\Eloquent\Relations\BelongsTo
{
        return $this->belongsTo(Region::class);
}
// with road map steps
public function roadmapSteps(): \Illuminate\Database\Eloquent\Relations\BelongsTo
{
        return $this->belongsTo(RoadmapStep::class);
}
}
