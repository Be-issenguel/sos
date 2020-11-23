<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campanha extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function admin()
    {
        return $this->belongsTo('App\User','foreign_key','admin_id');
    }

    public function doacoes(){
        return Doacao::where(['status' => 'aceita', 'campanha_id' => $this->id])->count();
    }

}
