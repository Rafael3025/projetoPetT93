<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pets extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'Pets';
    protected $primaryKey = 'id_pet';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    protected $fillabel =
    [
        'id_pet',
        'nome',
        'idade',
        'descricao'
    ];

    public function Portes(): BelongsTo
    {
        return $this->belongsTo(Portes::class, 'id_pet', 'id_pet');
    }

    public function Cores(): BelongsTo
    {
        return $this->belongsTo(Portes::class, 'id_pet', 'id_pet');
    }

    public function GenerosPets(): BelongsTo
    {
        return $this->belongsTo(Portes::class, 'id_pet', 'id_pet');
    }

    public function Racas(): BelongsTo
    {
        return $this->belongsTo(Portes::class, 'id_pet', 'id_pet');
    }

    public function HistoricoPets(): BelongsTo
    {
        return $this->belongsTo(Portes::class, 'id_pet', 'id_pet');
    }


}
