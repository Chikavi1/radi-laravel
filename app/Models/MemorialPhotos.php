<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemorialPhotos extends Model
{

    protected $table = 'memorialphotos';
    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';

    use HasFactory;

    public function memorial(){
        return $this->belongsto('App\Models\Memorial','memorial_id','id');
    }


}
