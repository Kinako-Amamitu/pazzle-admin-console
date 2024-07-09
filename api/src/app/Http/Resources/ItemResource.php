<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ItemResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'item_name' => $this->item_name,
            'lot' => $this->lot,
            'get' => $this->get,
            'explanation' => $this->explanation,
        ];
    }
}
