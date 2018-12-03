<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = ['name', 'description'];

    public function scopeNotdeleted($query) {
        return $query->where('isdeleted', 0);
    }

    public function products() {
        return $this->hasMany(Product::class);
    }

}
