<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Hashids\Hashids;

class Memorial extends Model
{
    protected $table = 'Memorials';
    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';

    public function setHiddenId(){
        $hashids = new Hashids(ENV('HASH_ID'),6,'ABCEIU1234567890');
        return $hashids->encode($this->id);
    }

    public function pets(){
        return $this->belongsto('App\Models\Pets','pet_id','id');
    }


    public function Photos(){
        return $this->hasMany('App\Models\MemorialPhotos','memorial_id','id');
    }

    public function Comments(){
        return $this->hasMany('App\Models\MemorialComments','memorial_id','id');
    }

    use HasFactory;
}
