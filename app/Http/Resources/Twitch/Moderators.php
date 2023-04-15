<?php

namespace App\Http\Resources\Twitch;

use Illuminate\Http\Resources\Json\JsonResource;

class Moderators extends JsonResource
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
        $moderators = Moderator::collection(collect($resource['data']));
        $pagination = Pagination::make($resource['pagination']);

        return [
            'moderators' => $moderators,
            'count' => $resource['total'],
            'pagination' => $pagination,
        ];
    }
}
