<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $table='modules';
    public static $cache = [];

    public function permissions()
    {
        return $this->hasMany('App\Permission');
    }
}
