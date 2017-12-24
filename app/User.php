<?php

namespace App;

use Illuminate\Notifications\Notifiable;
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
        'name', 'email', 'social_id', 'lang' ,'ip', 'provider'
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
     * Return user if exists; create and return if doesn't
     *
     * @param $socialUser
     * @return User
     */
    public static function findOrCreateUser($socialUser, $lang, $ip, $provider)
    {
        if (!empty($socialUser->nickname)) {
            $name = $socialUser->nickname;
        } elseif(!empty($socialUser->name)) {
            $name = $socialUser->name;
        } else {
            $name = null;
        }
        $data = [
            'name'      => $name,
            'email'     => !empty($socialUser->email) ? $socialUser->email : '',
            'social_id' => $socialUser->id,
            'lang'      => $lang,
            'provider'  => $provider,
            'ip'        => $ip
        ];
        $user = self::where('social_id', $socialUser->id)->first();
        if (!$user) {
            $user = new User();
        }

        $user->fill($data);
        $user->save();
        return $user;
    }
}
