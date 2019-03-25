<?php

namespace App\Traits;
use Illuminate\Support\Str;

trait HasSlug
{

    protected $slug_name = 'slug';
    protected $slug_source = 'name';

    public static function bootHasSlug()
    {
        static::saving(function ($model) {
            $model->attributes[$model->slug_name] = $model->generateSlug();
        });
    }

    protected function generateSlug(): string
    {
        $slugs = [];
        foreach ($this->getTranslatedLocales($this->slug_source) as $locale) {
            $slugs[$locale] = Str::slug($this->getTranslation($this->slug_source, $locale));
        }
        return json_encode($slugs);
    }

    protected function setSlugSource(string $slug)
    {
        $this->slug_source = $slug;
        return $this;
    }

    protected function setSlugName(string $name)
    {
        $this->slug_name = $name;
        return $this;
    }
}