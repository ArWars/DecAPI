<?php

namespace App\Http\Resources\Twitch;

use Illuminate\Http\Resources\Json\JsonResource;

class ChatterCollection extends JsonResource
{
    public function __construct($resource)
    {
        $this->resource = $resource;
    }

    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $chatters = Chatter::collection(collect($this->resource['data']));
        $pagination = Pagination::make($this->resource['pagination']);

        return [
            'total' => $this->resource['total'],
            'chatters' => $chatters->resolve(),
            'pagination' => $pagination->resolve(),
        ];
    }
}
