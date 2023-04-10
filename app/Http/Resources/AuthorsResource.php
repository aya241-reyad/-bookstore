<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AuthorsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
'data'=>[

'id'=>$this->id,
'type'=>'authors',
'attributes'=>[
'name'=>$this->name,
'createdat'=>$this->created_at,
'updatedat'=>$this->updated_at,
        ]
]
        ];
}
}
