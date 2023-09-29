<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;


class Adocoes extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'Adocoes';
    protected $primaryKey = 'id_adocao';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'dt_inicio',
        'dt_inicio_pa',
        'dt_devolucao',
    ];
    protected $fillabel = [
        'id_cliente',
        'id_pet',
        'id_Status',
        'dt_inicio',
        'dt_inicio_pa',
        'dt_devolucao',
        'descricao',
        'observacao'

    ];

    public function Status():BelongsTo{
        return $this->belongsTo(Status::class, 'id_status', 'id_status');
    }

    public function HistoricoAdocoes():BelongsTo{
        return $this->belongsTo(HistoricoPets::class, 'id_adocao', 'id_adocao');
    }

    public function Clientes():BelongsTo{
        return $this->belongsTo(Clientes::class, 'id_cliente', 'id_cliente');
    }

    public function Pets():BelongsTo{
        return $this->belongsTo(Pets::class, 'id_pet', 'id_pet');
    }
}
