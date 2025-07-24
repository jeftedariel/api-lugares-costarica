<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Canton extends Model
{
    protected $table = 'cantones';
    
    public function provincias():HasMany
    {
        return $this->hasMany(Provincia::class);
    }

    public function distritos():BelongsToMany
    {
        return $this->belongsToMany(Distrito::class);
    }
}
