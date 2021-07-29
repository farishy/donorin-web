<?php

namespace App\Models;

use CodeIgniter\Model;

class ArtikelModel extends Model
{
  protected $table = 'artikel';
  protected $primaryKey = 'idArtikel';
//   protected $useSoftDeletes = true;
//   protected $useTimestamps = true;
  protected $allowedFields = [
    'tglRilis', 'viewCount', 'likeCount', 'commentCount', 'judulArtikel', 'sinopsisArtikel', 'kontenArtikel', 'idPenulis', 'statusArtikel', 'tipeArtikel', 'gambarArtikel'
  ];

  public function joinWithPenulisTable(){
    return $this->db->table('artikel')->where('`artikel.deleted_at` IS NULL', null)->join('penulis', 'penulis.idPenulis=artikel.idPenulis')->get()->getResultArray();
  }
  public function joinWithPenulisTableWhere($id){
    $conditions = array('artikel.deleted_at' => NULL, 'idArtikel' => $id);
    return $this->db->table('artikel')->where($conditions)->join('penulis', 'penulis.idPenulis=penulis.idPenulis')->get()->getResultArray();
  }
  public function joinWithPenulisTableWhereStatus(){
    $conditions = array('artikel.deleted_at' => NULL, 'statusPenulis' => 'Aktif');
    return $this->db->table('artikel')->where($conditions)->join('penulis', 'penulis.idPenulis=artikel.idPenulis')->get()->getResultArray();
  }
  public function getArtikel($id = false)
  {
    if ($id == false) {
      return $this->findAll();
    }
    return $this->where(['idArtikel' => $id])->first();
  }
}
