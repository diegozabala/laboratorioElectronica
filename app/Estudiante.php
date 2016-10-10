<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/**

 * @property string  nombre
 * @property string apellido
 * @property mixed cedula
 * @property string carrera
 * @property string facultad
 */
class Estudiante extends Model
{

    protected $table="estudiantes";
    
    protected $fillable = [
        'nombre', 'apellido', 'cedula','carrera','facultad',
    ];
    
    public function prestamos(){
        return $this->hasMany('App\Prestamo');
    }
}
