<?php

namespace App\Orchid\Resources;

use App\Models\Menu;
use Orchid\Crud\Resource;
use Orchid\Screen\Sight;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Label;
use Orchid\Screen\Fields\Matrix;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\TD;
use App\Models\Page;

class PageResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = Page::class;

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(): array
    {
        return [
            Input::make('lang.language')->title(__('Language'))->required(),

            Group::make([
                Input::make('charset')->title(__('Charset'))->required(),
                Input::make('meta_title')->title(__('Meta title'))->required(),
                Input::make('meta_description')->title(__('Meta description'))->required(),
                Input::make('title')->title(__('Title'))->required(),
                Input::make('contact_phone')->title(__('Contact phone'))->required(),
            ]),

            Matrix::make('menus')
                ->columns([
                    'name',
                    'href'
                ])
                ->fields([
                    'name' => Input::make('menus.name'),
                    'href' => Input::make('menus.href')
                ]),

            Group::make([
                TextArea::make('banner.header')->title(__('Header'))->rows(6)->required(),
                TextArea::make('banner.sub_header')->title(__('Sub header'))->rows(6)->required(),
                TextArea::make('banner.form_title')->title(__('Form title'))->rows(6)->required(),
                Input::make('banner.form_name')->title(__('Form name'))->required(),
                Input::make('banner.form_phone')->title(__('Form title'))->required(),
            ]),

            //Label::make('advantage'),
            Input::make('advantage.header')->title(__('Header'))->required(),
            Matrix::make('advantage.items')
                ->columns([
                    'title',
                    'text'
                ])
                ->fields([
                    'title' => TextArea::make('advantage.items.title'),
                    'text' => TextArea::make('advantage.items.text')
                ]),

            //Label::make('gallery'),
            Input::make('gallery.header')->title(__('Header'))->required(),
            Matrix::make('gallery.images')
                ->columns([
                    'preview',
                    'original_name',
                    'url',
                ])
                ->fields([
//                    'preview' => TextArea::make('preview_image', __('Preview image'))->render(function ($model) {
//                        return '<img height="150" src = "' . $model->url . '"title = "' . $model->url . '">';}),
                    'original_name' => TextArea::make('gallery.images.original_name'),
                    'url' => TextArea::make('gallery.images.url')
                ]),

            //Label::make('schema'),
            Input::make('schema.header')->title(__('Header'))->required(),
            Group::make([
                Input::make('schema.image.name')->title(__('Preview')),
                Input::make('schema.image.original_name')->title(__('Original name'))->required(),
                Input::make('schema.image.url')->title(__('Url'))->required(),
            ]),

            //Label::make('map'),
            Input::make('map.header')->title(__('Header'))->required(),
            TextArea::make('map.text')->title(__('Text'))->rows(4)->required(),
            Group::make([
                Input::make('map.image.name')->title(__('Preview')),
                Input::make('map.image.original_name')->title(__('Original name'))->required(),
                Input::make('map.image.url')->title(__('Url'))->required(),
            ]),

            //Label::make('footer'),
            Input::make('footer.header')->title(__('Header'))->required(),
        ];
    }

    /**
     * Get the columns displayed by the resource.
     *
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('id'),
            TD::make('charset', __('Charset')),
            TD::make('meta_title', __('Meta title')),
            TD::make('meta_description', __('Meta description')),
            TD::make('title', __('Title')),
            TD::make('contact_phone', __('Contact phone')),

//            TD::make('created_at', 'Date of creation')
//                ->render(function ($model) {
//                    return $model->created_at->toDateTimeString();
//                }),
//
//            TD::make('updated_at', 'Update date')
//                ->render(function ($model) {
//                    return $model->updated_at->toDateTimeString();
//                }),
        ];
    }

    /**
     * Get the sights displayed by the resource.
     *
     * @return Sight[]
     */
    public function legend(): array
    {
        return [
            Sight::make('id'),
            Sight::make('charset'),
            Sight::make('meta_title'),
            Sight::make('meta_description'),
            Sight::make('title'),
            Sight::make('contact_phone'),

            Sight::make('menus.name'),

            Sight::make('menus.href'),
            //Sight::make('menus')->component(Menu::class),
        ];
    }

    /**
     * Get the filters available for the resource.
     *
     * @return array
     */
    public function filters(): array
    {
        return [];
    }

    /**
     * Get relationships that should be eager loaded when performing an index query.
     *
     * @return array
     */
    public function with(): array
    {
        return [
            'lang',
            'menus',
            'banner',
            'advantage',
            'gallery',
            'schema',
            'map',
            'footer'
        ];
    }
}
