<?php

namespace App\Models;

use CodeIgniter\Model;

class AgendaModel extends Model
{
  protected $table = 'eventagenda';
  protected $primaryKey = 'idAgenda';
//   protected $useSoftDeletes = true;
//   protected $useTimestamps = true;
  protected $allowedFields = [
    'tglAgenda', 'judulAgenda', 'sinopsisAgenda', 'kontenAgenda', 'gambarAgenda', 'statusAgenda', 'idLokasi'
  ];

  public function joinWithLokasiTable(){
    return $this->db->table('agenda')->where('`agenda.deleted_at` IS NULL', null)->join('lokasi', 'lokasi.idLokasi=agenda.idLokasi')->get()->getResultArray();
  }
  public function joinWithLokasiTableWhere($id){
    $conditions = array('agenda.deleted_at' => NULL, 'idAgenda' => $id);
    return $this->db->table('agenda')->where($conditions)->join('lokasi', 'lokasi.idLokasi=lokasi.idLokasi')->get()->getResultArray();
  }
  // public function joinWithLokasiTableWhereStatus(){
  //   $conditions = array('lokasi.deleted_at' => NULL, 'statusPenulis' => 'Aktif');
  //   return $this->db->table('artikel')->where($conditions)->join('penulis', 'penulis.idPenulis=artikel.idPenulis')->get()->getResultArray();
  // }
}
