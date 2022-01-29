<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class ProductGallery extends Model
{
    use HasFactory, SoftDeletes;

     /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */

    protected $fillable = [
        'products_id',
        'url'        
    ];


    // mutation untuk konversi url biasa nya untuk API
    public function getUrlAttribute($url){
        return config('app.url') . Storage::url($url);
    }

}
