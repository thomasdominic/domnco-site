<?php

namespace App;

use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Page extends Model
{
    use HasSlug, HasTranslations;

    public $translatable = ['title', 'slug'];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->setSlugName('slug');
        $this->setSlugSource('title');
    }
}
