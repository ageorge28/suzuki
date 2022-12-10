<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MotorcycleDetail;
use App\Models\Photo;
use App\Models\Category;
use App\Models\Subcategory;

class Motorcycle extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function details()
    {
        return $this->belongsTo(MotorCycleDetail::class, 'id', 'product_id');
    }

    public function photos()
    {
        return $this->hasMany(Photo::class, 'product_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class, 'subcategory_id', 'id');
    }
}
