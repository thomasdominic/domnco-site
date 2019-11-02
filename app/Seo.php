<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Spatie\Translatable\HasTranslations;

class Seo extends Model
{
    use HasTranslations;

    public $translatable = ['title', 'description'];

    public function referencable()
    {
        return $this->morphTo();
    }

    private function getSeoPrimaryValue($key, $value)
    {
        if ($value == '') {
            $method = 'getSeo'.Str::camel($key);
            if (method_exists($this->referencable, $method)) {
                return $this->referencable->{$method}();
            }
        }

        return $value;
    }

    public function getDescriptionAttribute($value)
    {
        return $this->getSeoPrimaryValue('description', $value);
    }

    public function getTitleAttribute($value)
    {
        return $this->getSeoPrimaryValue('title', $value);
    }
}
