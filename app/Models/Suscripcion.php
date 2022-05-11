<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Suscripcion
 *
 * @property $id
 * @property $nombre
 * @property $ciclo
 * @property $precio
 * @property $moneda
 * @property $fecha_pago
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Suscripcion extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'ciclo' => 'required',
		'precio' => 'required',
		'moneda' => 'required',
		'fecha_pago' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','ciclo','precio','moneda','fecha_pago'];



}
