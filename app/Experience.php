<?php

namespace App;

use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Experience extends Model
{
    use HasTranslations, HasSlug;
    protected $dates = ['created_at','deleted_at','begin_at','finish_at'];

    public $translatable = ['title','description'];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->setSlugName('slug');
        $this->setSlugSource('title');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
