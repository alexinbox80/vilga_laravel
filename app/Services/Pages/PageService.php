<?php

namespace App\Services\Pages;

use App\Models\Page;
use App\Services\Contracts\PageContract;

class PageService implements PageContract
{
    /**
     * @return array
     */
    public function index(): array
    {
        $language = 'ru';

        $page = Page::whereHas('lang', function ($query) use ($language) {
            return $query->where('language', $language);
        })->first();

        //dd($page);
        return [
            'data' => $page
        ];
    }
}
