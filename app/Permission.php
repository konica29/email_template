<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permission extends Model
{
    protected $table='permissions';
    use SoftDeletes;

    public function roles()
    {
        return $this->belongsToMany('App\Role','role_permission','permission_id','role_id');
    }

    public function module()
    {
        return $this->belongsTo('App\Module');
    }
    
    public function getModuleNameAttribute()
    {
        return $this->module->name;
    }
}
