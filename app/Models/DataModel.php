<?php

namespace App\Models;

use CodeIgniter\Model;

class DataModel extends Model
{
    protected $table = 'data';
    protected $primaryKey = 'id_data';
    protected $allowedFields = [
        'nama', 'npm', 'universitas', 'nama_kompetisi', 'tanggal', 'sertifikat', 'bukti_daftar'
    ];
    protected $returnType = 'App\Entities\Data';
    protected $useTimestamps = false;
}
