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
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'products_id',
        'url',
    ];

    /**
     * Laravel Mutation
     * otomatis mengembalikan data url dengan tambahan http:// 
     */
    public function getUrlAttribute($url)
    {
        return config('app.url') . Storage::url($url);
    }
}
