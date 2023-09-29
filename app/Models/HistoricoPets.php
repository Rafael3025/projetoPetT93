<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class HistoricoPets extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'HistoricoPets';
    protected $primaryKey = 'id_historicoPet';
    protected $dates = [
        'created_at',
        'update_at',
        'deleted_at',
        'dt_adocao',
        'dt_devolucao'
    ];

    protected $fillabel = [
        'id_historicoPet',
        'id_pet',
        'HistoricoPet',
        'Personalidade',
        'dt_adocao',
        'dt_devolucao'
    ];

    public function Pets():BelongsTo{
        return $this->belongsTo(Pets::class, 'id_pet', 'id_pet');
    }

}
