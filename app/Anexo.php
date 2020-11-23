<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anexo extends Model
{
    public function anexable(){
        return $this->morphTo();
    }
}
