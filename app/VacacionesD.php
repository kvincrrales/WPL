<?php

namespace WP;

use Illuminate\Database\Eloquent\Model;

class VacacionesD extends Model
{
    protected $table = 'vacaciones_ds';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'disponibles','emp_id'];
}
