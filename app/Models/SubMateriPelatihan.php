<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubMateriPelatihan extends Model
{
    use HasFactory;

    protected $table = 'sub_materi_pelatihan';
    protected $guarded = ['id'];
}
