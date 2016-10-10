<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/**
 * @property mixed  id
 * @property String nombre_imagen
 */
class Imagen extends Model
{

    protected $table="imagenes";
    
    protected $fillable = [
        'id', 'nombre_imagen',
    ];
    

    public function user(){
        return $this->belongsTo('App\User');
    }
}
