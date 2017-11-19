<?php

namespace WP;

use Illuminate\Database\Eloquent\Model;

class Incapacidad extends Model
{
    protected $table = 'incapacidads';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fechaInicio','fechaFinal','tipo','total','nota','cDias','nomb','emp_id'
                          ];
}
