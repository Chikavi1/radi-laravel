<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Hashids\Hashids;

class Pets extends Model
{
    protected $table = 'Pets';
    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';
    use HasFactory;

    protected $fillable = [
        'name'              ,
        'photo'          ,
        'image'           ,
        'description'      ,
        'chronic_disease'  ,
        'gender'           ,
        'birthday'           ,
        'specie'           ,
        'sterelized'       ,
        'sterelized_date'   ,
        'breed'            ,
        'size'             ,
        'color_necklace'   ,
        'weight'           ,
        'id_user',
        'status'            ,
];

    public function setHiddenId(){
        $hashids = new Hashids(ENV('HASH_ID'),6,'ABCEIU1234567890');
        return $hashids->encode($this->id);
    }

    public function Organizations()
    {
        return $this->belongsTo('App\Models\Organizations','id_organization','id');
    }

    public function Losts()
    {
        return $this->hasOne('App\Models\Losts','id_pet','id')->latest();
    }
}
