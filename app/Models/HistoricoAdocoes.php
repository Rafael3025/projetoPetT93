<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
<<<<<<< HEAD
=======
use Illuminate\Database\Eloquent\Relations\BelongsTo;
>>>>>>> master

class Historico_adocoes extends Model
{
<<<<<<< HEAD
    use HasFactory, SoftDeletes;
    // gustavo s
=======
    use HasFactory , SoftDeletes;

    protected $table = 'HistoricoAdocao';
    protected $primarykey = 'id_HistoricoAdocao';
    protected $dates = [
        'created_at',
        'update_at',
        'deleted_at',
        'dt_adocao',
        'dt_devolucao'


    ];
    protected $fillabel = [
        'id_HistoricoAdocacao',
        'id_adocao',
        'dt_adocao',
        'dt_devolucao',
        'historico'
    ];


    /**
     * Get the user that owns the historico_adocao
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Adocoes(): BelongsTo
    {
        return $this->belongsTo(Adocoes::class, 'id_adocao', 'id_adocao');
    }
>>>>>>> master
}
