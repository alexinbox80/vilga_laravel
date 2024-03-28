<?php

namespace App\Services\Page;

use App\Models\Page;
use App\Services\Contracts\PageContract;

class PageService implements PageContract
{
    /**
     * @param string $language
     * @return array
     */
    public function index(string $language): array
    {
        $page = Page::whereHas('lang', function ($query) use ($language) {
            return $query->where('language', $language);
        })->first();

        return [
            'data' => $page
        ];
    }
}
