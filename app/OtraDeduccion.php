<?php
namespace WP;
use Illuminate\Database\Eloquent\Model;
class OtraDeduccion extends Model
{
    protected $table = 'otra_deduccions';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nomb','moneda','montoO','fSolicitud','notas','emp_id'
                          ];
}