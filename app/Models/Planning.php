<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planning extends Model
{
    use HasFactory;
    protected $fillable = [
        'datePlanning',
        'medecin_id',
    ];
    public function medecin(){
        return $this->belongsTo(User::class, 'medecin_id');
    }
}
