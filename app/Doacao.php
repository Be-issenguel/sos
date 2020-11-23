<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doacao extends Model
{
    public function anexos(){
        return $this->morphMany('App\Anexo','anexable');
    }

    public function campanha()
    {
        return $this->belongsTo(Campanha::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function utente(){
        return $this->belongsTo(Utente::class);
    }

}
