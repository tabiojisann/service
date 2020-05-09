<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable =['body'];

    public function theme(): BelongsTo
    {
        return $this->belongsTo('App\Theme');
    }
    
    public function user(): BelongsTo
    {
        return $this->belongsTo('App\User');
    }


}
