<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Articulo
 *
 * @property $id
 * @property $almacen_id
 * @property $Nombre
 * @property $Descripcion
 * @property $Codigo
 * @property $Imagen
 * @property $created_at
 * @property $updated_at
 *
 * @property Almacene $almacene
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Articulo extends Model
{
    
    static $rules = [
		'almacen_id' => 'required',
		'Nombre' => 'required',
		'Descripcion' => 'required',
		'Codigo' => 'required',
		'Imagen' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['almacen_id','Nombre','Descripcion','Codigo','Imagen'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function almacene()
    {
        return $this->hasOne('App\Models\Almacene', 'id', 'almacen_id');
    }
    

}
