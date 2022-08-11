<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'uuid' => $this->uuid,
            'title' => $this->title,
            'caption' => $this->caption,
            'text' => $this->text,
            'image' => $this->image,
            'record_uuid' => $this->record_uuid,
            'record' => $this->record,
            // 'font' => $this->font,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
