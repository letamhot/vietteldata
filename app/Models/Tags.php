<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    use HasFactory;
    protected $fillable = ['chiTietLoaiGoiCuoc', 'moTa', 'category_id'];
    public function category()
    {
        return $this->belongsTo(Categories::class, 'category_id');
    }
    public function products()
    {
        return $this->hasMany(Product::class, "tag_id");
    }
}
