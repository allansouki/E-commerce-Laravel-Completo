<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dashbord extends Model
{


    protected $table = "users";
    protected $fillable = [
        'name', 'email', 'password','cpf', 'contato','cep','endereco','numero','complemento','cidade','estado',
    ];
}
