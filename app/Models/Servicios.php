<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicios extends Model
{
    use HasFactory;
    protected $table = 'Servicios';

protected $fillable = ['id_usuario','nombre_servicio','descripcion','marca','contacto','status'];

public function users()
{
return $this->belongsTo('App\Models\Users','id_usuario','id');
}
}
