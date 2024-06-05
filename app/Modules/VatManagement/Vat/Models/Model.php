<?php

namespace App\Modules\VatManagement\Vat\Models;

use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Support\Str;

class Model extends EloquentModel
{
    static $VatGroupModel = \App\Modules\VatManagement\VatGroup\Models\Model::class;
    static $model = \App\Modules\VatManagement\Vat\Models\Model::class;
    protected $table = "vats";
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

    public function scopeActive($q)
    {
        return $q->where('status', 'active');
    }


    public function vat_group_vats()
    {
        return $this->belongsToMany(self::$VatGroupModel, 'vat_group_vats', 'vat_id', 'vat_group_id', 'id');
    }
}
