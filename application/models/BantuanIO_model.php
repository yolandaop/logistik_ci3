<?php defined('BASEPATH') OR exit('No direct script access allowed');
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 

class BantuanIO_model extends CI_Model
{
    protected $table = 'bantuan_masuk_keluar';
    protected $primaryKey = "id_barang";
    protected $allowedFields = ['jenis_barang', 'satuan','bantuan_masuk', 'bantuan_keluar','stok', 'asumsi_harga'];

    public function getBantuanIO($id = false)
    {
        if($id === false){
            return $this->db->get($this->table)->result();
        }else{
            return $this->db->get_where($this->table, ["id_barang" => $id])->row();
        }   
    }


}
