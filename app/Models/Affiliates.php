<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Affiliates extends Model
{
    protected $table = 'Affiliates';
    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';

    use HasFactory;

    protected $fillable = [
        'id_user',
        'amount',
        'status'
    ];

}
