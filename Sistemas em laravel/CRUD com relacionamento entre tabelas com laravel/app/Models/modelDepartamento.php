<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modelDepartamento extends Model
{
    use HasFactory;

    protected $table = 'tb_departamento';
    protected $primaryKey = 'cd_departamento';
    protected $fillable = ['nm_departamento'];

    public function relFun(){
        return $this->hasMany('App\Models\modelFuncionario', 'cd_departamento');
    }
}
