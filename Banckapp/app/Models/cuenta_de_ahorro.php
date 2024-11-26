<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cuenta_de_ahorro extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 
        'tipo_cuenta', 
        'numero_cuenta', 
        'saldo', 
        'credito'
    ];

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
