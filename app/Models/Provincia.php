<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Provincia extends Model
{

    protected $table = 'provincas';

    public function cantones():BelongsToMany
    {
        return $this->belongsToMany(Canton::class);
    }
}
