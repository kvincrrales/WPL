<?php

namespace WP;

use Illuminate\Database\Eloquent\Model;

class Vacacion extends Model
{
    protected $table = 'vacacions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    		'nomb','tVacaciones','fechaS','fechaIni','fechaFin','diasD','caja','total','emp_id'
                          ];
}
