<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'image',
        'color',
        'category_id'
    ];

    //RELACION UNO A MUCHOS
    public function products(){
        return $this->hasMany(Product::class);
    }

    //RELACIÓN UNO A MUCHOS INVERSA
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
