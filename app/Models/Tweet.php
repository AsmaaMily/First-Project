<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{

    protected $fillable = [
        'content',
        'parent_tweet_id',

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function parentTweet()
    {
        return $this->belongsTo(Tweet::class, 'parent_tweet_id');
    }

    public function childTweets()
    {
        return $this->hasMany(Tweet::class, 'parent_tweet_id');
    }

    public function baseTweet()
    {
        return $this->belongsTo(Tweet::class, 'base_tweet_id');
    }

    public function descendantTweet()
    {
        return $this->hasMany(Tweet::class, 'base_tweet_id');
    }
}

