<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    public function appointment()
    {
        return $this->belongsTo(Appointment::class);
    }
    public function invoiceitem()
    {
        return $this->hasMany(InvoiceItem::class);
    }
    public function userpayee()
    {
        return $this->hasMany(User::class,'payee_id');
    }
    public function userrecipient()
    {
        return $this->hasMany(User::class,'recipient_id');
    }
    public function usersubscription()
    {
        return $this->hasMany(Subscription::class);
    }

}

