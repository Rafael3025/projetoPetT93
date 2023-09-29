<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Historico_clientes extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'HistoricoClientes';
    protected $primaryKey = 'id_historico';
    protected $dates = [
        'created_at',
        'update_at',
        'deleted_at',
        'dt_adocao'
    ];

    protected $fillabel = [
        'id_historico',
        'id_cliente',
        'dt_adocao',
        'historico'
    ];

    public function Clientes():BelongsTo{
        return $this->belongsTo(Clientes::class, 'id_cliente', 'id_cliente');
    }

}
