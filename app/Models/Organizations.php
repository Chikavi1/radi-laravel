<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Hashids\Hashids;

class Organizations extends Model
{
    protected $table = 'Organizations';
    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';

    public function setHiddenId(){
        $hashids = new Hashids(ENV('HASH_ID'),6,'ABCEIU1234567890');
        return $hashids->encode($this->id);
    }

    public function Pets(){
        return $this->hasMany('App\Models\Pets','id_organization','id');
    }


    use HasFactory;
}
