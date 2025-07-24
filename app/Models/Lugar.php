<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Lugar extends Model
{

    protected $table = 'lugares';

    public function distritos():HasMany
    {
        return $this->hasMany(Distrito::class);
    }
}
