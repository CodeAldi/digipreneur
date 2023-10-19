<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MateriPelatihan extends Model
{
    use HasFactory;

    protected $table = 'materi_pelatihan';
    protected $guarded = ['id'];

    /**
     * Get all of the sub_materi for the MateriPelatihan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sub_materi(): HasMany
    {
        return $this->hasMany(SubMateriPelatihan::class);
    }
}
