<?php

namespace App\Models;

use CodeIgniter\Model;

class AkundonorModel extends Model
{
  protected $table = 'akundonor';
  protected $primaryKey = 'idAkun';
//   protected $useSoftDeletes = true;
//   protected $useTimestamps = true;
  protected $allowedFields = [
    'namaLengkap', 'tempatLahir', 'tglLahir', 'jnsKelamin', 'alamat', 'noTelpon', 'email', 'password', 'idGoldar'
  ];
}
