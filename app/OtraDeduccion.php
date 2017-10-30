<?php
namespace WP;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class OtraDeduccion extends Model
{
	use SoftDeletes;
	protected $table = 'otra_deduccions';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'moneda','montoO','fSolicitud','notas','nombE','emp_id'
    ];
    
    protected $dates = ['deleted_at'];
}