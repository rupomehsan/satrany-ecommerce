<?php

namespace App\Modules\ProductManagement\Product\Models;

use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Support\Str;

class Model extends EloquentModel
{
    static $ImageModel = \App\Modules\ProductManagement\Product\Models\ProductImageModel::class;
    static $CategoryModel = \App\Modules\ProductManagement\ProductCategory\Models\Model::class;
    static $BrandModel = \App\Modules\ProductManagement\ProductBrand\Models\Model::class;

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

            $data->save();
        });
    }

    public function scopeActive($q)
    {
        return $q->where('status', 'active');
    }
    public function images(){
        return $this->hasMany(self::$ImageModel,'product_id');
    }
    public function category(){
        return $this->belongsTo(self::$CategoryModel,'category_id');
    }
    public function brand(){
        return $this->belongsTo(self::$BrandModel,'brand_id');
    }
}
