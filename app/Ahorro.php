<?php

namespace WP;

use Illuminate\Database\Eloquent\Model;

class Ahorro extends Model
{
    protected $table = 'ahorros';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
		'montoS','montoA','nota','nomb','emp_id'
                          ];
}
