<?php

namespace App\Http\Resources\Twitch;

use Illuminate\Http\Resources\Json\JsonResource;

class Moderator extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $moderator = $this->resource;

        // https://dev.twitch.tv/docs/api/reference/#get-moderators
        return [
            'user_id' => $moderator['user_id'],
            'user_login' => $moderator['user_login'],
            'user_name' => $moderator['user_name']
        ];
    }
}
