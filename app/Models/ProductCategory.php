<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;

    protected $fillable = ['category', 'description'];

    public static $categories = ['appetizers', 'main', 'desserts'];

    public function setCategoryAttribute($value)
    {
        $this->attributes['category'] = strtolower($value);
    }

    public function getCategoryAttribute($value)
    {
        return ucfirst($value);
    }

}
