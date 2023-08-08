<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $table = 'Events';
    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';

    use HasFactory;

    // protected $fillable = [
    //     'name',
    //     'email',
    //     'type',
    //     'status'
    // ];


    public function business()
    {
        return $this->belongsTo('App\Models\DiscountsCompanies','id_business','id');
    }

}
