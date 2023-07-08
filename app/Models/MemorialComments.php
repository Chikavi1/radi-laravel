<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemorialComments extends Model
{

    protected $table = 'MemorialComments';
    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';

    protected $fillable = [
        'text',
        'user_id',
        'memorial_id',
        'status',
        'createdAt',
        'updatedAt'
       ];

    use HasFactory;

    public function memorial(){
        return $this->belongsto('App\Models\Memorial','memorial_id','id');
    }
    public function User(){
        return $this->belongsto('App\Models\User','user_id','id');
    }


}
