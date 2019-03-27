<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Seo extends Model
{
    use HasTranslations;

    public $translatable = ['title','description'];

    public function referencable()
    {
        return $this->morphTo();
    }
}
