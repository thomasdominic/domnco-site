<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Customer extends Model
{
    use HasTranslations;

    public $translatable = ['description'];

    protected $dates = ['created_at','deleted_at'];
}
