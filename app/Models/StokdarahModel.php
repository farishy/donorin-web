<?php

namespace App\Models;

use CodeIgniter\Model;

class StokdarahModel extends Model
{
  protected $table = 'stokdarah';
  protected $primaryKey = 'idDarah';
//   protected $useSoftDeletes = true;
//   protected $useTimestamps = true;
  protected $allowedFields = [
    'idGoldar', 'stokDarah',
  ];
}
