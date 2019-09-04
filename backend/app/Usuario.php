<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class Usuario extends Authenticatable implements JWTSubject
{
    use \App\Traits\UsesUuid;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'email', 'senha'
    ];

     /**
    * Get the identifier that will be stored in the subject claim of the JWT.
    *
    * @return mixed
    */
    public function getJWTIdentifier(){
       return $this->getKey();
    }
 
    /**
        * Return a key value array, containing any custom claims to be added to the JWT.
        *
        * @return array
        */
    public function getJWTCustomClaims(){
        return [];
    }
    
    public function setPasswordAttribute($senha){
        if ( !empty($senha) ) {
            $this->attributes['senha'] = bcrypt($senha);
        }
    }


}
