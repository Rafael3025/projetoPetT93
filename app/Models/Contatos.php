<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Contatos extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'Contatos';
    protected $primaryKey = 'id_contato';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillabel = [
        'id_contato',
        'id_cliente',
        'email',
        'telefone'
    ];

    public function Clientes():BelongsTo{
        return $this->belongsTo(Clientes::class, 'id_cliente', 'id_cliente');
    }
}
