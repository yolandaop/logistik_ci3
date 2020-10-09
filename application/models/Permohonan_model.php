<?php defined('BASEPATH') OR exit('No direct script access allowed');
use CodeIgniter\Model;
 
class Permohonan_model extends CI_Model
{
    protected $table = 'data_permohonan'; //set table yang digunakan
    protected $primaryKey = "id_permohonan";
    protected $allowedFields = ['nama_pemohon', 'kontak_pemohon','pekerjaan_pemohon', 'instansi_pemohon', 'jenis_permohonan', 'keterangan_pemohon','nip_pemohon', 'alamat_pemohon'];
    public $id_permohonan, $nama_pemohon, $nip_pemohon, $pekerjaan_pemohon, $instansi_pemohon, $alamat_pemohon, $kontak_pemohon, $jenis_permohonan, $catatan_pemohon, $keterangan_pemohon;
     
    public function getPermohonan($id = false)
    {
        if($id === false){
            return $this->db->get($this->table)->result();
        }else{
            return $this->db->get_where($this->table, ["id_permohonan" => $id])->row();
        }   
    }
 
    public function savePermohonan($data) //menyimpan data ke database
    {
        /* $query = $this->db->table($this->table)->insert($data);
        return $query; */

        $post = $this->input->post();
        $this->nama_pemohon = $post["nama_pemohon"];
        $this->nip_pemohon = $post["nip_pemohon"];
        $this->pekerjaan_pemohon = $post["pekerjaan_pemohon"];
        $this->instansi_pemohon = $post["instansi_pemohon"];
        $this->alamat_pemohon = $post["alamat_pemohon"];
        $this->kontak_pemohon = $post["kontak_pemohon"];
        $this->jenis_permohonan = $post["jenis_permohonan"];
        $this->catatan_pemohon = $post["catatan_pemohon"];
        return $this->db->insert($this->table, $this);
    }
 
    public function updatePermohonan($data, $id_permohonan) //mengupdate data ke database
    {
        return $this->db->update($this->table, $data, array('id_permohonan' => $id_permohonan));
        //$query = $this->db->table($this->table)->update($data, array('id_permohonan' => $id_permohonan));
        //return $query;
    }
 
    public function deletePermohonan($id) //menghapus data dari database
    {
        return $this->db->delete($this->table, array("id_permohonan" => $id));
        //$query = $this->db->table($this->table)->delete(array('id_permohonan' => $id));
        //return $query;
    }

    public function getValidasi()
    {
        return $this->db->get_where($this->table, ["keterangan_pemohon" => 'Tervalidasi'])->result();
        //return $this->where(array('keterangan_pemohon' => 'Tervalidasi'))->findAll();
    }
}