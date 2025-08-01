<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'product_id', 'content','parent_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function replies()
    {
        return $this->hasMany(Comment::class, 'parent_id')->with('replies');
    }
    public function parent()
    {
        return $this->belongsTo(Comment::class, 'parent_id');
    }


}

