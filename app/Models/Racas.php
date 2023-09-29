<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Racas extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'Racas';
    protected $primaryKey = 'id_raca';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillabel = [
        'id_raca',
        'id_pet',
        'raca',
        'infoRaca'
    ];

    public function Pets():BelongsTo{
        return $this->belongsTo(Pets::class, 'id_pet', 'id_pet' );
    }

    public function Especies():BelongsTo{
        return $this->belongsTo(Pets::class, 'id_raca', 'id_raca' );
    }

}
