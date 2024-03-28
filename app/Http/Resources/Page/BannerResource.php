<?php

namespace App\Http\Resources\Page;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BannerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'header' => $this->header,
            'sub_header' => $this->sub_header,
            'form_title' => $this->form_title,
            'form_name' => $this->form_name,
            'form_phone' => $this->form_phone,
            'form_button' => $this->form_button
        ];
    }
}
