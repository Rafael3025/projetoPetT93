<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sexos extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'Sexos';
    protected $primaryKey = 'id_sexo';
    protected $dates = [
        'created_at',
        'update_at',
        'deleted_at'
    ];

    protected $fillabel = [
        'id_sexo',
        'sexo'
    ];

    public function Clientes():BelongsTo{
        return $this->belongsTo(Clientes::class, 'id_sexo', 'id_sexo');
    }

}
