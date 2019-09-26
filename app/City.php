<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = ['name', 'lat','lon'];

    public function user() {
        return $this->belongsTo('App\User')->withDefault();
    }
}
