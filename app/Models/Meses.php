<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Meses extends Model
{
    use HasFactory;

    
    public function archivos(): HasMany
    {
        return $this->hasMany(Archivo::class,'mes_id');
    }
}
