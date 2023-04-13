<?php

namespace App\Http\Resources\Twitch;

use Illuminate\Http\Resources\Json\JsonResource;

class Chatter extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // https://dev.twitch.tv/docs/api/reference/#get-chatters
        return [
            'user_id' => $this->resource['user_id'],
            'user_login' => $this->resource['user_login'],
            'user_name' => $this->resource['user_name']
        ];
    }
}
