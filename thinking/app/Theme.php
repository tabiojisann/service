<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Theme extends Model
{

    protected $fillable = [
        'body',
        'image',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo('App\User');
    }

    public function answer(): hasMany
    {
        return $this->hasMany('App\Answer');
    }
}
