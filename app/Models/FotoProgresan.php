<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoProgresan extends Model
{
    use HasFactory;
    protected $table = 'foto_progresan';

    protected $fillable = ['id_photo', 'foto_progresan', 'tanggal_update', 'waktu_update'];
}
