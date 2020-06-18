<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    public function patient()
    {
        return $this->belongsTO(Patient::class);
    }
}
