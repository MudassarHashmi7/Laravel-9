<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;
    public function agentAgreements(){
        return $this->hasMany(AgentAgreement::class);
    }

//  with entrepreneur
public function entrepreneurDocuments(){
        return $this->hasMany(EntrepreneurDocument::class);
}
}
