<?php

namespace WP;

use Illuminate\Database\Eloquent\Model;

class Puesto extends Model
{
    protected $table = 'puestos';
    
    protected $fillable = [
        'nombre','desc','dept_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
}
