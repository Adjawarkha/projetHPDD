<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RendezVous extends Model
{
    use HasFactory;
    protected $fillable = [
        'creneau_id',
        'medecin_id',
        'patient_id',
        'status',
        'motif'
    ];
    public function medecin(){
        return $this->belongsTo(User::class, 'medecin_id');
    }
    public function patient(){
        return $this->belongsTo(User::class, 'patient_id');
    }
    public function creneau(){
        return $this->belongsTo(Creneau::class, 'creneau_id');
    }
}
