<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modelUsuario extends Model
{
    use HasFactory;
   protected $table = "tb_usuario";
   protected $primaryKey = "cd_usuario";
   protected $fillable = ['nm_usuario', 'nm_senha', 'nm_email'];
}
