<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom&prenom', 'adress', 'tel', 'story', 'etat_id', 'ecocash_name', 'ecocash_number', 'lumicash_name',
        'lumicash_number', 'bank_name', 'bank_number', 'pic_path'
    ];

    public function etat() {
        return $this->belongsTo(Etat::class);
    }
}
