<?php

namespace App;

use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Model;
use Spatie\Tags\HasTags;
use Spatie\Translatable\HasTranslations;

class Post extends Model
{
    use HasTranslations, HasSlug, HasTags;

    public $translatable = ['title', 'slug', 'text'];


    protected $guarded = [];

    protected $dates = ['created_at','updated_at','published_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->setSlugName('slug');
        $this->setSlugSource('title');
    }

}
