<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $casts = [
        'items' => 'array'
    ];

    protected $dates = ['date'];

    /*Tudo que for enviando pelo POST pode ser atualizado
      Caso seja inserido algum campo o Laravel não permite que o mesmo seja atualizado*/
    protected $guarded = [];

    //Evento pertence a um usuário
    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    //Um usuário pode ter vários eventos
    public function users() {
        return $this->belongsToMany('App\Models\User');
    }
}