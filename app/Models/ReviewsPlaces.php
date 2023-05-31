<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewsPlaces extends Model
{
    protected $table = 'reviewsPlaces';
    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';

    protected $fillable = [
        'user_id' ,
        'score'   ,
        'comments',
        'place_id',
        'metadata',
    ];

    use HasFactory;

    public function Users()
    {
        return $this->belongsTo('App\Models\User','user_id','id');
    }
}
