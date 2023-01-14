<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    protected $fillable = [
        'name', 'email', 'password','is_active'
    ];

   
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function roles()
    {
        return $this->belongsToMany('App\Role','user_role','user_id', 'role_id');
    }

    public function hasRole($roleName)
    {
        foreach ($this->roles as $role) {
            if (strcasecmp($role->name, $roleName) == 0)
                return TRUE;
        }
        return FALSE;
    }
}
