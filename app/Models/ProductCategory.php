<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;

    protected $fillable = ['category_name', 'description'];

    public function setCategoryAttribute($value)
    {
        $this->attributes['category_name'] = strtolower($value);
    }

    public function getCategoryAttribute($value)
    {
        return ucfirst($value);
    }

}
