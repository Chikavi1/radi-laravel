<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Hashids\Hashids;

class Losts extends Model
{
    protected $table = 'DogsLostReports';
    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';

    use HasFactory;

       protected $fillable = [
        'id_user_report',
        'latitude',
        'longitude',
        'status',
        'id_pet',
        'date',
        'note',
        'id_payment',
        'rewards',
        'finish_latitude',
        'finish_longitude',
        'meta_data',
        'cellphone'
    ];

    public function setHiddenId(){
        $hashids = new Hashids(ENV('HASH_ID'),6,'ABCEIU1234567890');
        return $hashids->encode($this->id);
    }


    public function Pet()
    {
        return $this->belongsTo('App\Models\Pets','id_pet','id');
    }
}
