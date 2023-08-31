<?php

namespace App\Http\Resources;

use App\Models\User;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Collection;

class UserAddressResource extends JsonResource
{
    protected $addresses;

    public function getAddresses($id)
    {
        $users = User::findOrFail($id);

        $addresses = new Collection();

        $users->load(['deliveryAddresses' => function ($q) use (&$addresses) {
            $addresses = $q->get()->unique();
        }]);

        return $addresses;
    }

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'mobile_number' => $this->mobile_number,
            'address' => strip_tags($this->address),
            'deliveryAddresses' => DeliveryAddressResource::collection($this->getAddresses($this->id)),
        ];
    }
}
