<?php

namespace App\Http\Resources\Twitch;

use Illuminate\Http\Resources\Json\JsonResource;

class Vips extends JsonResource
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
        $vips = Vip::collection(collect($resource['data']));
        $pagination = Pagination::make($resource['pagination']);

        return [
            'vips' => $vips,
            'count' => $resource['total'],
            'pagination' => $pagination,
        ];
    }
}
