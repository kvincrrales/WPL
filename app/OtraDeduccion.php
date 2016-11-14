<?php

namespace WP;

use Illuminate\Database\Eloquent\Model;

class OtraDeduccion extends Model
{
    protected $table = 'otrasDeducciones';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        '','','','emp_id'
                          ];
}
