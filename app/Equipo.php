<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/**
 * @property mixed  nombre
 * @property mixed id
 * @property mixed codigo
 * @property String descripcion
 */

class Equipo extends Model
{
    protected $table="equipos";
    protected $fillable=['nombre','codigo','descripcion','id',];
    
    public function prestamos(){
        return $this->hasMany('App\Prestamo');
    }

}
