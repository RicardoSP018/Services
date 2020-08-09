<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

<<<<<<< HEAD
class User extends Authenticatable implements MustVerifyEmail
=======
class User extends Authenticatable
>>>>>>> 4d6bcb37afdb70ff1d2016991077f42d5eeeb318
{



    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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
    ];

    public function generateToken()
    {
        $this->api_token = Str::random(60);
        $this->save();

        return $this->api_token;
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class)->withTimestamps();
    }

    public function asignar($role)
    {
        $this->roles()->sync($role, false);
    }

    public function tieneRol()
    {
        return $this->roles->flatten()->pluck('nombre')->unique();
    }

    public function areas()
    {
        return $this->belongsToMany(Area::class)->withTimestamps();
    }

    public function asignarArea($area)
    {
        $this->areas()->sync($area, false);
    }

    public function tieneArea()
    {
        return $this->areas->flatten()->pluck('nombre')->unique();
    }

    public function trabajos()
    {
        return $this->hasMany(Trabajos::class);
    }

}
