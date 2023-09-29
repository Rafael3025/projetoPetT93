<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Clientes extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'Clientes';
    protected $primaryKey = 'id_cliente';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'nascimento'
    ];

    protected $fillabel = [
        'id_cliente',
        'id_sexo',
        'nome',
        'nascimento',
        'renda'
    ];

    protected $cast = [
        'nascimento' => 'date',
        'renda' => 'decimal:2'
    ];

    public function Sexos():BelongsTo{
        return $this->belongsTo(Sexos::class, 'id_sexo', 'id_sexo');
    }

    public function HistoricoClientes():BelongsTo{
        return $this->belongsTo(HistoricoClientes::class, 'id_cliente', 'id_cliente');
    }

    public function Contatos():BelongsTo{
        return $this->belongsTo(Contatos::class, 'id_cliente', 'id_cliente');
    }

    public function Adocoes():BelongsTo{
        return $this->belongsTo(Adocoes::class, 'id_cliente', 'id_cliente');
    }
}
