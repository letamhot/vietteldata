<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    protected $fillable = ['tenLoaiGoiCuoc', 'moTa'];
    public function tags()
    {
        return $this->hasMany(Tags::class, 'category_id');
    }
    public function products()
    {
        return $this->hasManyThrough(Product::class, Tags::class, 'category_id', 'tag_id');
    }

}
