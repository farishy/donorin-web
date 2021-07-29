<?php

namespace App\Models;

use CodeIgniter\Model;

class LokasiModel extends Model
{
  protected $table = 'lokasi';
  protected $primaryKey = 'idLokasi';
//   protected $useSoftDeletes = true;
//   protected $useTimestamps = true;
  protected $allowedFields = [
    'namaLokasi', 'latKordinat', 'longKordinat'
  ];
}
