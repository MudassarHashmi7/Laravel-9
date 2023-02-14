<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;
    public function subscriptionItems()
    {
        return $this->hasMany(SubscriptionItem::class);
    }
//    with invoice model
public function invoices(): \Illuminate\Database\Eloquent\Relations\HasMany
{
        return $this->hasMany(Invoice::class);
}
}
