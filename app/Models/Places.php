<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Hashids\Hashids;

class Places extends Model
{
    protected $table = 'Places';
    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';

    public function setHiddenId(){
        $hashids = new Hashids(ENV('HASH_ID'),6,'ABCEIU1234567890');
        return $hashids->encode($this->id);
    }

    public function Reviews(){
        return $this->hasMany('App\Models\ReviewsPlaces','place_id','id');
    }

    use HasFactory;
}
