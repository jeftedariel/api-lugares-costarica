<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Distrito extends Model
{

    protected $table = 'distritos';

    public function cantones():HasMany
    {
        return $this->hasMany(Canton::class);
    }

    public function lugares():BelongsToMany
    {
        return $this->belongsToMany(Lugar::class);
    }
}
