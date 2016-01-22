<?php

namespace PalmerPress\Persistence;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }
}
