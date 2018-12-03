<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = ['name', 'price', 'quantity', 'image', 'description', 'category_id'];

    public function scopeNotdeleted($query) {
        return $query->where('isdeleted', 0);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
