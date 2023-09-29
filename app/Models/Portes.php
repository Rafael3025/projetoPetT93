<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Portes extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'Portes';
    protected $primaryKey = 'id_portes';
    protected $dates = [
        'created_at',
        'update_at',
        'deleted_at'
    ];

    protected $fillabel = [
        'id_portes',
        'id_pet',
        'tamanho'
    ];

    public function Pets():BelongsTo{
        return $this->belongsTo(Pets::class, 'id_pet', 'id_pet');
    }
}
