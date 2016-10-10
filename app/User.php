<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * @property string password
 * @property string nombre
 * @property string apellido
 * @property string rol
 * @property string imagen
 * @property mixed id
 * @property string cedula
 * @property mixed email
 */

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table="users";
    protected $fillable = ['nombre', 'apellido', 'cedula','rol','id','password','created_at','email','imagen',];

    public function prestamos(){
        return $this->hasMany('App\Prestamo');
    }

    public  function imagenes(){
        return $this->hasOne('App\Imagen');
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
