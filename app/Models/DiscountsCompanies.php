<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiscountsCompanies extends Model
{
    protected $table = 'DiscountsCompanies';
    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';

    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'type',
        'status'
    ];

    public function Discounts()
    {
        return $this->hasMany('App\Models\Discounts','company_id','id');
    }

    public function Events()
    {
        return $this->hasMany('App\Models\Events','id_business','id');
    }

}
