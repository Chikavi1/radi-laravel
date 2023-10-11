<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Identifications extends Model
{
    protected $table = 'Identifications';
    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';

    protected $fillable = [
        'code',
        'url' ,
        'version',
        'color',

    ];

    use HasFactory;
}
