<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modelAlunos extends Model
{
    use HasFactory;
    protected $table = 'tb_aluno';
    protected $fillable = ['nm_aluno', 'nm_mae_aluno', 'nm_pai_aluno'];
    protected $primaryKey = 'cd_aluno';
}
