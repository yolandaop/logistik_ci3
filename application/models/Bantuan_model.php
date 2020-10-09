<?php defined('BASEPATH') OR exit('No direct script access allowed');
use CodeIgniter\Model;
 
class Bantuan_model extends CI_Model
{
    protected $table = 'data_bantuan'; //set table yang digunakan
     
    public function getBantuan($id = false)
    {
        if($id === false){
            return $this->db->get($this->table)->result();
        }else{
            return $this->getWhere(['id_bantuan' => $id]);
        }   
    }
 
    public function saveBantuan($data) //menyimpan data ke database
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }
 
    public function updateBantuan($data, $id) //mengupdate data ke database
    {
        $query = $this->db->table($this->table)->update($data, array('id_bantuan' => $id));
        return $query;
    }
 
    public function deleteBantuan($id) //menghapus data dari database
    {
        $query = $this->db->table($this->table)->delete(array('id_bantuan' => $id));
        return $query;
    } 
}