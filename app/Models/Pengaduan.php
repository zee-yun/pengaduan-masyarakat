<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;

    protected $table = 'pengaduans';

    protected $primaryKey = 'id';

    protected $fillable = [
        'tgl_pengaduan',
        'isi_laporan',
        'foto',
        'status',
        'user_id',
    ];

    protected $dates = [
        'tgl_pengaduan',
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function tanggapan()
    {
        return $this->hasOne(Tanggapan::class, 'id', 'pengaduan_id');
    }
}
