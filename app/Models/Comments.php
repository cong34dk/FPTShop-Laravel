<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_id',
        'content',
    ];

    public function user()
    {
        return $this->belongsTo(Users::class);
    }

    public function product()
    {
        return $this->belongsTo(Products::class);
    }
}
