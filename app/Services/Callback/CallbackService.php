<?php

namespace App\Services\Callback;

use App\Models\Callback;
use App\Services\Contracts\CallbackContract;

class CallbackService implements CallbackContract
{
    /**
     * @param array $validated
     * @return Callback
     */
    public function store(array $validated): Callback
    {
        return Callback::create($validated);
    }
}
