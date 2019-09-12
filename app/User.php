<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Role;
use Illuminate\Support\Facades\Config;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name', 'email', 'password', 'phone', 'birthday', 'surname',
        'email_verified_at', 'remember_token', 'role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'birthday' => 'date:Y-m-d'
    ];

    /**
     * @return User
     */
    public function role()
    {
        return $this - hasOne(\App\Role::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orders()
    {
        return $this->hasMany(\App\Order::class);
    }

    /**
     * @return bool
     */
    public function isAdmin()
    {
        $adminRole = \App\Role::where(
            'name',
            '=',
            Config::get('constants.db.roles.admin')
        )->first();
        return $this->role_id === $adminRole->id;
    }
}

































