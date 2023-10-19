<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Contracts\Auth\MustVerifyEmail;
// implements MustVerifyEmail
use Hashids\Hashids;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'Users';
    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function setHiddenId(){
        $hashids = new Hashids(ENV('HASH_ID'),6,'ABCEIU1234567890');
        return $hashids->encode($this->id);
    }

        protected $fillable = [
            'customer',
            'name',
            'email',
            'password',
            'code'
        ];

        public function Pets()
        {
            return $this->hasMany('App\Models\Pets','id_user','id');
        }

        public function Affiliates()
        {
            return $this->hasMany('App\Models\Affiliates','id_user','id');
        }

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
