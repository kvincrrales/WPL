<?php

namespace WP;

use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    protected $table = 'prestamos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fechaP','moneda','montoP','interes','montoTotal','plazoS','total','fSolicitud','notas','nombE','emp_id'
                          ];
}
