<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    use HasFactory;

    protected $connection = 'mysql';
    protected $table = 'pais';
    protected $primaryKey = 'id_pais'; //modificado
    public $timestamps = false; 
}
