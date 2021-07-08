<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modelFuncionario extends Model
{
    use HasFactory;

    protected $table = 'tb_funcionario';
    protected $primaryKey = 'cd_funcionario';
    protected $fillable = ['nm_funcionario', 'cd_departamento'];

    public function relDep(){
        return $this->hasOne('App\Models\modelDepartamento','cd_departamento', 'cd_departamento');
    }
}
