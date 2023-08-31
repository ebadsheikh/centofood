<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AppSettingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'app_google_map' =>  $this->value,
            'app_default_distance' =>  $this->value,
            'app_language' =>  $this->value,
            'app_version' =>  $this->value,
            'app_show_version' =>  $this->value,
        ];
    }
}
