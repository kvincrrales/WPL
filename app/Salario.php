<?php

namespace WP;

use Illuminate\Database\Eloquent\Model;

class Salario extends Model
{
    protected $table = 'salarios';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'salarioM','salarioQ','salarioS','salarioD','salarioH','salarioHE','emp_id'];
}
