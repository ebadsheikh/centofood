<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AppThemeSettingResource extends JsonResource
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
            'app_main_color_light' => $this->value,
            'app_main_color_dark' => $this->value,
            'app_second_color_light' => $this->value,
            'app_second_color_dark' => $this->value,
            'app_accent_color_light' => $this->value,
            'app_accent_color_dark' => $this->value,
            'app_background_color_light' => $this->value,
            'app_background_color_dark' => $this->value,
        ];
    }
}
