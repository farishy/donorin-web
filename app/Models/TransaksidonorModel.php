<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksidonorModel extends Model
{
  protected $table = 'transaksidonor';
  protected $primaryKey = 'idTransaksi';
//   protected $useSoftDeletes = true;
//   protected $useTimestamps = true;
  protected $allowedFields = [
    'idAkun', 'tglTransaksi', 'statusTransaksi', 'keterangan', 
  ];
}
