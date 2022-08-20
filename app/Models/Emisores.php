<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emisores extends Model
{
    use HasFactory;
    protected $table = 'Emisores';

protected $fillable = ['id_usuario','id_servicio','descripcion','status'];

public function users()
{
return $this->belongsTo('App\Models\users','id_usuario','id');
}

public function servicios()
{
return $this->belongsTo('App\Models\servicios','id_servicio','id');

}
}
