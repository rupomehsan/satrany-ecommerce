<?php

namespace App\Modules\ProductManagement\Product\Models;

use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Support\Str;

class Model extends EloquentModel
{
    static $productCategoryModel = "App\Modules\ProductManagement\ProductCategory\Models\Model";
    static $productImageModel = "App\Modules\ProductManagement\Product\Models\ProductImageModel";

    protected $table = "products";
    protected $guarded = [];


    protected static function booted()
    {
        static::created(function ($data) {
            $random_no = random_int(100, 999) . $data->id . random_int(100, 999);
            $slug = $data->title . " " . $random_no;
            $data->slug = Str::slug($slug); //use Illuminate\Support\Str;
            if (strlen($data->slug) > 150) {
                $data->slug = substr($data->slug, strlen($data->slug) - 150, strlen($data->slug));
            }
            if (auth()->check()) {
                $data->creator = auth()->user()->id;
            }
            $data->save();
        });
    }

    public function product_categories()
    {
        return $this->belongsToMany(self::$productCategoryModel, 'product_category_products', 'product_id', 'product_category_id');
    }

    public function product_image()
    {
        return $this->hasOne(self::$productImageModel, 'product_id', 'id');
    }
    public function product_images()
    {
        return $this->hasMany(self::$productImageModel, 'product_id', 'id');
    }

    public function scopeActive($q)
    {
        return $q->where('status', 'active');
    }
}
