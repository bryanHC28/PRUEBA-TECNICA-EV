<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receptores extends Model
{
    use HasFactory;
    protected $table = 'Receptores';

protected $fillable = ['id_emisor','id_servicio','id_usuario','descripcion','status'];

public function emisores()
{
return $this->belongsTo('App\emisores','id_emisor','id');

}

public function servicios()
{
return $this->belongsTo('App\servicios','id_servicio','id');
}

public function users()
{
return $this->belongsTo('App\users','id_usuario','id');
}
}
