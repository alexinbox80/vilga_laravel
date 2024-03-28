<?php

namespace App\Services\Contracts;
use App\Models\Callback;

interface CallbackContract
{
    /**
     * @param array $validated
     * @return Callback
     */
    public function store(array $validated): Callback;
}
