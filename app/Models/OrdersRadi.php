<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Hashids\Hashids;

class OrdersRadi extends Model
{
    protected $table = 'Ordersradi';
    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';

    use HasFactory;

       protected $fillable = [
        'color',
        'size',
        'gender',
        'specie',
        'allergies',
        'product_name',
        'url_tag',
        'id_tag',
        'sku',
        'quantity',
        'pricing',
        'shipping',
        'email',
        'phone',
        'user_name',
        'pet_name',
        'notes',
        'address',
        'total',
        'status'

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
