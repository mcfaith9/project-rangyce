<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function boot()
    {
        parent::boot();
        static::creating(function($users)
        {   
            $file_path = str_random(20) . time() . '.jpg';
            $username = $users->username[0].' '.$users->username[-1];
            $colors = array("#1289A7","#B53471","#006266","#EA2027","#1B1464","#3742fa","#57606f","#353b48","#c23616","#009432");
            $key = array_rand($colors, 1);
            $img = \DefaultProfileImage::create($username, 150, $colors[$key], '#fff');
            \Storage::disk('user_profile')->put($file_path, $img->encode());

            $rand = rand();
            $users->id = $rand;
            $users->picture = $file_path;
        });
    }
}
