<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Archivo extends Model
{
    use HasFactory;

    public function mes(): BelongsTo
    {
        return $this->belongsTo(Meses::class);
    }
    public function transparencia(): BelongsTo
    {
        return $this->belongsTo(Transparencia::class);
    }
}
