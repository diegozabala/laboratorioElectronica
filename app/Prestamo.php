<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed  user_id
 * @property mixed estudiantes_id
 * @property mixed equipos_id
 * @property String observaciones
 */

class Prestamo extends Model
{
    protected $table="prestamos";

    protected  $fillable=[
        'user_id','estudiantes_id','equipos_id','observaciones',
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function estudiante(){
        return $this->belongsTo('App\Estudiante');
    }
    public function equipo(){
        return $this->belongsTo('App\Equipo');
    }
}
