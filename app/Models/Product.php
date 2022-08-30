<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'product';
    // Inisiasi kolom delete_at agar bisa dilakukan softDeletes
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'product_name',
    ];
    protected $hidden;
}
