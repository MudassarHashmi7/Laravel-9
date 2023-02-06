<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    public function userentrepreneur()
    {
        return $this->belongsTo(User::class,'entrepreneur_id');
    }
    public function useragent()
    {
        return $this->belongsTo(User::class,'agent_id');
    }

    public function appoinmenttype()
    {
        return $this->belongsTo(Appointment::class);
    }
    public function invoice()
    {
        return $this->hasMany(Invoice::class);
    }

}
