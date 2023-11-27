<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Categorias;
use Illuminate\Database\Eloquent\Model;

class Platillos extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'categoria_id', 'precio'];

    public function categoria()
    {
        return $this->belongsTo(Categorias::class);
    }
}
