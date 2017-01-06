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
        'moneda','montoV','interes','total','fSolicitud','notas','nombE','emp_id'
                          ];
}
