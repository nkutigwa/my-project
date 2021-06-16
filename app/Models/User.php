<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Crypt;
use Swoole\Http\Request;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
/* once user has entered password we have to encrypt it in DB*/
$encrypted_password = Crypt::encrypt($data['password']);
/*Displaying a message once a user has registered successfully. */
$req->session()->flash('register_status','User has been registered successfully');
return redirect('/register');
/*For Register .. */
/*email id has to be used once,it can not be used again by another user. */


    /*For login. Email id has to be used with that was used for register/creating account */
    