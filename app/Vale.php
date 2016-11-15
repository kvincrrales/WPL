<?php

namespace WP;

use Illuminate\Database\Eloquent\Model;

class Vale extends Model
{
    protected $table = 'vales';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nomb','moneda','montoV','interes','total','fSolicitud','notas','emp_id'
                          ];
}
