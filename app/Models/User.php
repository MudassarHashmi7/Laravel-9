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
     public function roles(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
     {
        return $this->belongsToMany(Role::class);
     }
//     with invoices
       public function invoices(): \Illuminate\Database\Eloquent\Relations\HasMany
       {
         return $this->hasMany(Invoice::class);
}
//     with scoreboard
   public function scoreboard(): \Illuminate\Database\Eloquent\Relations\HasMany
   {
         return $this->hasMany(Scoreboard::class);
   }
//   with agent agreement
public function agentAgreements(): \Illuminate\Database\Eloquent\Relations\HasMany
{
         return $this->hasMany(AgentAgreement::class);
}
// with appointments
public function appointments(): \Illuminate\Database\Eloquent\Relations\HasMany
{
         return $this->hasMany(Appointment::class, 'entrepreneur_id');
}
public function appointmentAgent(): \Illuminate\Database\Eloquent\Relations\HasMany
{
         return $this->hasMany(Appointment::class, 'agent_id');
}
//  with appointment type
public  function appointmentTypes(): \Illuminate\Database\Eloquent\Relations\HasMany
{
         return $this->hasMany(AppointmentType::class);
}
//


//     public function region(): \Illuminate\Database\Eloquent\Relations\HasOne
//     {
//         return $this->hasOne(Region::class, 'region_id');
//     }
//     public function agentAgreement(){
//         return $this->belongsTo(AgentAgreement::class, 'agent_id');
//     }
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
}
