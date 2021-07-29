<?php

namespace App\Models;

use CodeIgniter\Model;

class FaqModel extends Model
{
  protected $table = 'frequencyaskquestion';
  protected $primaryKey = 'idFaq';
//   protected $useSoftDeletes = true;
//   protected $useTimestamps = true;
  protected $allowedFields = [
    'icon', 'judulFaq', 'sinopsisFaq', 'kontenFaq'
  ];
}
