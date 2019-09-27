<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = ['name', 'description'];

    public function user() {
        return $this->belongsTo('App\UserGroup')->withDefault();
    }
}
