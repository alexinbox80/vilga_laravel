<?php

namespace App\Http\Resources\Page;

use App\Models\Advantage;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'lang' => $this->lang->language,
            'charset' => $this->charset,
            'meta_title' => $this->meta_title,
            'meta_description' => $this->meta_description,
            'title' => $this->title,
            'contact_phone' => $this->contact_phone,
            'menu' => MenuResource::collection($this->menus),
            'banner' => BannerResource::make($this->banner),
            'advantage' => AdvantageResource::make($this->advantage),
            'gallery' => GalleryResource::make($this->gallery),
            'schema' => SchemaResource::make($this->schema),
            'map' => MapResource::make($this->map),
            'footer' => FooterResource::make($this->footer)
        ];
    }
}
