<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\CanResetPassword;
use App\Notifications\ResetPassword;
use Mail;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstName', 'namePrefix', 'lastName', 'email', 'birthday', 'voice', 'role', 'avatar', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function hasRole(){
        return $this->role;
    }

    public static function generatePassword(){
        // Generate random string
        return str_random(35);
    }

    public static function sendWelcomeEmail($user, $pw){

        // Send email
        Mail::send('emails.welcome', ['user' => $user, 'pw' => $pw], function ($m) use ($user) {
            $m->from('noreply@jongerenkoorglory.nl', 'Christelijk Jongerenkoor Glory');
            $m->to($user->email, $user->name)->subject('Uw login account bij CJK Glory');
        });
    }
}
