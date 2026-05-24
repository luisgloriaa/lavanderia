<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;

class Order extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'descripcion',
        'total',
        'imagen',
        'estado',
        'fecha_entrega'
    ];

    public function garments()
    {
        return $this->belongsToMany(Garment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}