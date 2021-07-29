<?php

namespace App\Models;

use CodeIgniter\Model;

class GoldarModel extends Model
{
  protected $table = 'golongandarah';
  protected $primaryKey = 'idGoldar';
//   protected $useSoftDeletes = true;
//   protected $useTimestamps = true;
  protected $allowedFields = [
    'golonganDarah', 'rhesusDarah'
  ];
}
