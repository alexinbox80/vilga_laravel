<?php

namespace App\Services\Contracts;

interface PageContract
{
    /**
     * @param string $language
     * @return array
     */
    public function index(string $language): array;
}
