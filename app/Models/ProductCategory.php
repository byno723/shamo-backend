<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductCategory extends Model
{
    use HasFactory, SoftDeletes;
 /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    // relasi ketable products
    public function products(){
        return $this->hasMany(Product::class,'categories_id','id');
    }
}
