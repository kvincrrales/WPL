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
        'nomb','fechaP','moneda','montoP','interes','plazoS','fSolicitud','notas','emp_id'
                          ];
}
