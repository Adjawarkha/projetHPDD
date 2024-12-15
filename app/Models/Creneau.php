<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Creneau extends Model
{
    use HasFactory;
    protected $fillable = [
        'heureDebut',
        'heureFin',
        'plannings_id',
    ];
    public function planning()
    {
        return $this->belongsTo(Planning::class, 'plannings_id');
    }
}
