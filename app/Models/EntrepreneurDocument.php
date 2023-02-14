<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntrepreneurDocument extends Model
{
    use HasFactory;
   public function media(): \Illuminate\Database\Eloquent\Relations\BelongsTo
   {
       return $this->belongsTo(Media::class);
   }

}
