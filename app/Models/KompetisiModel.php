<?php

namespace App\Models;

use CodeIgniter\Model;

class KompetisiModel extends Model
{
    protected $table = 'kompetisi';
    protected $primaryKey = 'id_kompetisi';
    protected $allowedFields = [
        'nama_kompetisi', 'tingkat_kompetisi', 'tanggal_kompetisi', 'keterangan', 'gambar'
    ];
    protected $returnType = 'App\Entities\Kompetisi';
    protected $useTimestamps = false;
}
