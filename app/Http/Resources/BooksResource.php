<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BooksResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    { return [
'data'=>[

'id'=>$this->id,
'type'=>'books',
'attributes'=>[
'name'=>$this->name,
'authors'=>$this->authors,
'description'=>$this->description,
'publicaction_year'=>$this->publicaction_year,
'createdat'=>$this->created_at,
'updatedat'=>$this->updated_at,
        ]
]
        ];
    }
}
