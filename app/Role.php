<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use SoftDeletes;
    protected $fillable=['name'];
    protected $table = 'roles';

    public function permissions()
    {
        return $this->belongsToMany('App\Permission', 'role_permission', 'role_id', 'permission_id');
    }

    public function users()
    {
        return $this->belongsTo('App\User', 'user_role', 'role_id', 'user_id');
    }

    public function hasPermission($module_name, $permission_name = null)
    {
        if (empty(Module::$cache)) {
            Module::$cache = Module::all()->map(function ($module, $key) {
                $module->name = strtolower($module->name);
                return $module;
            });
        }

        $module      =   Module::$cache->where('name', strtolower($module_name))->first();

        $module_id   =   empty($module) ? null : $module->id;

        $permissions = $this->permissions->map(function ($permission, $key) {
            $permission->name = strtolower($permission->name);
            return $permission;
        });

        if (empty($module_id) || $permissions->isEmpty()) {
            return FALSE;
        }

        $result = $permissions->where('module_id', $module_id);

        if (!empty($permission_name)) {
            $result = $result->where('name', strtolower($permission_name));
        }

        if ($result->isEmpty()) {
            return false;
        }

        return true;
    }
}
