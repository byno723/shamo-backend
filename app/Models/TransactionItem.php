<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionItem extends Model
{
    use HasFactory;

     /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */

    protected $fillable = [
        'users_id',
        'products_id',
        'transactions_id',
        'quantity',
        
    ];

    //relasi ke table product
    public function product(){
        return $this->hasOne(Product::class,'id','products_id');
    }


}

