<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AgentAgreement extends Model
{
    /**
     * @return mixed
     */
    public function user()
    {
        return $this->belongsToMany(User::class);
    }
}
