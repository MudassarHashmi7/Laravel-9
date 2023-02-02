<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
//    public $timestamps = false;

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function userrolemap()
    {
        return $this->hasMany(UserRoleMap::class);
    }

    public function agentagreement()
    {
        return $this->hasMany(AgentAgreement::class);
    }

    public function entrepreneurdocument()
    {
        return $this->hasMany(EntrepreneurDocument::class);
    }
//    public function region()
//    {
//        return $this->hasOne(Region::class);
//    }
    public function role()
    {
        return $this->belongsToMany(UserRole::class, 'user_role_maps', 'user_id', 'user_role_id');
    }

    public function userrolepermission()
    {
        return $this->hasOne(UserRolePermission::class);
    }

    public function usernotification()
    {
        return $this->hasOne(UserNotification::class);
    }

    //Transaction
    public function transaction()
    {
        return $this->hasMany(Transaction::class);
    }

    public function invoice()
    {
        return $this->hasMany(Invoice::class);
    }

    public function invoiceitem()
    {
        return $this->hasone(InvoiceItem::class);
    }

//Appointment tables

    public function appointment()
    {
        return $this->hasMany(Appointment::class);
    }

    public function appointmenttype()
    {
        return $this->hasMany(Appointment::class);
    }

    public function scoreboard()
    {
        return $this->hasMany(Scoreboard::class);
    }
    public function media()
    {
        return $this->hasMany(Media::class);
    }

}
