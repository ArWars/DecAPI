<?php

namespace App\Http\Resources\Twitch;

use Illuminate\Http\Resources\Json\JsonResource;

class Chatters extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $resource = $this->resource;
        $chatters = Chatter::collection(collect($resource['data']));
        $pagination = Pagination::make($resource['pagination']);

        return [
            'chatters' => $chatters,
            'count' => $resource['total'],
            'pagination' => $pagination,
        ];
    }
}
