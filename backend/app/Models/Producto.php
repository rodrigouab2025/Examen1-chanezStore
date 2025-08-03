<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    protected $table = 'producto';
    protected $fillable = [
        'nombre',
        'precio',
        'marca_id'
    ];
    public function marca()
    {
        return $this->belongsTo(Marca::class, 'marca_id');
    }
}
