<?php

namespace App;

use App\Traits\HasSlug;
use App\Traits\Referencable;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Page extends Model
{
    use HasSlug, HasTranslations, Referencable;

    public $translatable = ['title', 'slug'];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->setSlugName('slug');
        $this->setSlugSource('title');
    }

    public function getSeoTitle()
    {
        return $this->title;
    }

    public function getSeoDescription()
    {
        return "description";
    }
}
