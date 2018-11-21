<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Operator extends Model
{
     /*
    *   define quais os-at campos que podem ser inseridos pelo usuário do sistema no banco
    */

    protected $fillable = [
        'name',
    ];

    /*
    *   protege os campos de inserções, impede que seja inserido dados nestes campos
    */

    protected $guarded = [
        'id', 'created_at', 'updated_at', '_token'
    ];

    /*
    *   determina a tabela onde sera inserido os dados.
    */

    protected $table = 'operators';
}
