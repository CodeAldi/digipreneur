<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubMateriPelatihan extends Model
{
    use HasFactory;

    protected $table = 'sub_materi_pelatihan';
    protected $guarded = ['id'];

    /**
     * Get the materi_pelatihan that owns the SubMateriPelatihan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function materi_pelatihan(): BelongsTo
    {
        return $this->belongsTo(MateriPelatihan::class);
    }
}
