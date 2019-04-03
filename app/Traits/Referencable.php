<?php
/**
 * Created by PhpStorm.
 * User: dom
 * Date: 27/03/19
 * Time: 21:19.
 */

namespace App\Traits;

use App\Seo;

trait Referencable
{
    public function seo()
    {
        return $this->morphOne(Seo::class, 'referencable')->withDefault();
    }

    public function getHasSeoAttribute()
    {
        return $this->seo instanceof Seo && $this->seo->id;
    }
}
