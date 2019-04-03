<?php

namespace App\Nova;

use Spatie\TagsField\Tags;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\Markdown;
use Laravel\Nova\Fields\MorphOne;
use Laravel\Nova\Fields\BelongsTo;
use Spatie\NovaTranslatable\Translatable;

class Post extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Post';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'title',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),

            Translatable::make([
                Text::make('Titre', 'title'),
                Text::make('slug')->onlyOnDetail(),
                Markdown::make('Résumé', 'summary'),
                Markdown::make('Contenu', 'text'),
            ]),

            DateTime::make('Publié le', 'published_at'),

            BelongsTo::make('Créateur', 'user', User::class),

            Text::make('URL Source', 'source_url')->hideFromIndex(),

            DateTime::make('Créé le', 'created_at')->onlyOnDetail(),
            DateTime::make('Modifié le', 'updated_at')->onlyOnDetail(),

            Tags::make('Tags')->type('post-tags'),

            MorphOne::make('SEO', 'seo', Seo::class),

            Boolean::make('SEO', 'has_seo')->onlyOnIndex(),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
