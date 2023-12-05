<?php

namespace App\Models;
use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    
    protected  $fillable = [
        'nom',
        'prenom',
        'classe',
    ];
    
    public function image()
    {
        return $this->hasOne(Image::class);
    }
}
