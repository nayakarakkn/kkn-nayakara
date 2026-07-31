<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Helper accessor to automatically extract YouTube 11-char ID from full URL or raw ID
     */
    public function getYoutubeIdAttribute(): string
    {
        $url = trim($this->youtube_url ?? '');

        if (strlen($url) === 11 && !str_contains($url, '/')) {
            return $url;
        }

        preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match);

        return $match[1] ?? 'LXb3EKWsInQ';
    }
}
