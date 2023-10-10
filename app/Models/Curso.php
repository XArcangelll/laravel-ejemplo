<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;


    // //por si quieres usar una tabla en concreto
    // protected $table = 'users';
    //en fillable pones los campos que quieres llenar si no esta status pues no lo va a tomar funciona para el Create()
    protected $fillable = [
        'name',
        'descripcion',
        'categoria',
        'slug',
        'marca_id'
    ];

    //es lo mismo q arriba solo q en vez de aceptar los campos los va a ignorar
    protected $guarded = [];


    //rutas amigables ya no buscara por el id por defecto sino por el name
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function marcas(){
        return $this->belongsTo('App\Models\Marca');
    }

}
