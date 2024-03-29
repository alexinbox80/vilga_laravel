<?php

namespace App\Services\Page;

use App\Models\Page;
use App\Services\Contracts\PageContract;
use Illuminate\Support\Facades\App;

class PageService implements PageContract
{
    /**
     * @return array
     */
    public function index(): array
    {
        $language = App::getLocale();

        $page = Page::whereHas('lang', function ($query) use ($language) {
            return $query->where('language', $language);
        })->first();

        return [
            'data' => $page
        ];
    }
}
