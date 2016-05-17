<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Clinica extends Model {

		protected $fillable = [
        'id',
        'direccionClinica',
        'comunaClinica',
        'telefonoClinica',
        'administradorClinica'
    ];



}
