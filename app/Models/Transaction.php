<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory, SoftDeletes;
     /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */

    protected $fillable = [
        'users_id',
        'address',
        'payment',
        'total_price',
        'shipping_price',
        'status'
    ];

    //relasi ke user belongsTo yaitu relasi kebalikan
    public function user(){
        return $this->belongsTo(User::class,'users_id', 'id');
    }

    //relasi ketable transaction item
    public function items(){
        return $this->hasMany(TransactionItem::class,'transaction_id', 'id');
    }
}
