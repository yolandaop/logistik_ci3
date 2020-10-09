<?php defined('BASEPATH') OR exit('No direct script access allowed');
use CodeIgniter\Model;
 
class Distribusi_model extends CI_Model
{
    protected $table = 'join_distribusi'; //set table yang digunakan
    protected $table2 = 'distribusi';
    protected $primaryKey = "id_distribusi";
    protected $allowedFields = ['jenis_distribusi', 'jumlah_paket','id_permohonan', 'keterangan_distribusi'];
     
    public function getDistribusi($id = false)
    {
        if($id === false){
            return $this->db->get($this->table)->result();
        }else{
            return $this->getWhere(['id_distribusi' => $id]);
        }   
    }
 
    public function saveDistribusi($data) //menyimpan data ke database
    {
        $query = $this->db->table($this->table2)->insert($data);
        return $query;
    }
 
    public function updateDistribusi($data, $id) //mengupdate data ke database
    {
        $query = $this->db->table($this->table2)->update($data, array('id_distribusi' => $id));
        return $query;
    }
 
    public function deleteDistribusi($id) //menghapus data dari database
    {
        $query = $this->db->table($this->table2)->delete(array('id_distribusi' => $id));
        return $query;
    }
}