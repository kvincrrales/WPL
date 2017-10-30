<?php

namespace WP;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = 'empleados';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
        'estatus','fIngreso','tipoId','numId','nomb','ape1','ape2','sexo','fNac','nCel','nCasa','email','dir','fPago','cBanc','cAhorro','tipoPlanilla','salario','totalVacaciones','fotoEmpleado','dept_id','puesto_id','nombD','nombP'
                          ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
}
