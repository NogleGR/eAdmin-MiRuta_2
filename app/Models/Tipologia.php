<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipologia extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'tipologia';
    protected $primaryKey = 'id_tipologia';
    
    protected $fillable = [
		'nombre', 
		'descripcion', 
		'estado'
	];
}
