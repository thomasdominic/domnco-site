<?php

namespace App;

use App\Traits\HasSlug;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Parsedown;
use Spatie\Tags\HasTags;
use App\Traits\Referencable;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Post extends Model
{
    use HasTranslations, HasSlug, HasTags, Referencable;

    public $translatable = ['title', 'slug','summary', 'text'];

    protected $guarded = [];

    protected $dates = ['created_at', 'updated_at', 'published_at'];

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

    public function getTextAsHtmlAttribute(): string
    {
        return (new Parsedown())->text($this->text);
    }
    public function getSummaryAsHtmlAttribute(): string
    {
        return (new Parsedown())->text($this->summary);
    }

    public function getSeoTitle()
    {
        return $this->title;
    }

    public function getSeoDescription()
    {
        return strip_tags($this->getSummaryAsHtmlAttribute());
    }


}
