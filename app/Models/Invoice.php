<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    public function transactions(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Transaction::class);
    }
//   with invoice
     public function users(){
        return $this->belongsTo(User::class);
     }
//     with subscription
public function subscriptions(): \Illuminate\Database\Eloquent\Relations\BelongsTo
{
        return $this->belongsTo(Subscription::class);
}
//    invoice item
public function invoiceItems(): \Illuminate\Database\Eloquent\Relations\HasMany
{
        return $this->hasMany(InvoiceItem::class);
}
}
