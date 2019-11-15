<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = "tasks";

    protected $fillable =["descricao","data_de_criacao","data_de_termino","finalizada"];
}
