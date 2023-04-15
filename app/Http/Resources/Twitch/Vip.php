<?php

namespace App\Http\Resources\Twitch;

use Illuminate\Http\Resources\Json\JsonResource;

class Vip extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $vip = $this->resource;

        // https://dev.twitch.tv/docs/api/reference/#get-vips
        return [
            'user_id' => $vip['user_id'],
            'user_login' => $vip['user_login'],
            'user_name' => $vip['user_name']
        ];
    }
}
