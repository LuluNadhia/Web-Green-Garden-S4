<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Penanam extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'penanam';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama',
        'email',
        'no_hp',
        'alamat',
        'nama_tanaman',
        'tanggal_penanaman',
        'ph_air_id',
        'media_tanam_id',
        'jenis_air_id',
        'tingkat_perakitan_id',
        'lokasi_tanam_id',
        'penggunaan_listrik_id'
      
    ];


}
