<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//$session = \Config\Services::session();  //INCLUDE SESSION, jangan dihapus.

class Permohonan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
		$this->load->model("permohonan_model");
        $this->load->library('form_validation');
    }
    
    public function index() //menampilkan tabel permohonan
    {
        return redirect()->to( base_url('/home/pemohon_bantuan') );
    }
 
    public function add_new() //menampilkan form input permohonan
    {
        $this->load->view('include/headerhome.php');
	    $this->load->view('home/home.php');
        $this->load->view('home/form_permohonan');
	    $this->load->view('include/footerhome.php');
    }
 
    public function save() //menyimpan data ke database yang dikirimkan ke model
    {
        $model = new Permohonan_model();
        /* $data = array(
            'nama_pemohon'  => $this->input->post('nama_pemohon'),
            'nip_pemohon'  => $this->input->post('nip_pemohon'),
            'pekerjaan_pemohon'  => $this->input->post('pekerjaan_pemohon'),
            'instansi_pemohon'  => $this->input->post('instansi_pemohon'),
            'alamat_pemohon' => $this->input->post('alamat_pemohon'),
            'kontak_pemohon' => $this->input->post('kontak_pemohon'),
            'jenis_permohonan' => $this->input->post('jenis_permohonan'),
            'catatan_pemohon' => $this->input->post('catatan_pemohon'),
        ); */
        $model->savePermohonan($data);
        return redirect()->to( base_url('/index.php/home/pemohon_bantuan') );
    }
 
    public function edit($id) //menampilkan tabel edit permohonan admin
    {
        $model = new Permohonan_model();
        $data['permohonan'] = $model->getPermohonan($id);
        $this->load->view('include/headerhome.php');
		$this->load->view('home/home.php');
        $this->load->view('admin/edit_permohonan', $data);
        $this->load->view('include/footerhome.php');
        
        if(!isset($_SESSION['admin'])){
			return redirect()->to( base_url('/index.php/home') );
		} //Check Session.
    }
 
    public function update() //mengupdate data ke database melalui model
    {
        $model = new Permohonan_model();
        $id_permohonan = $this->input->post('id_permohonan');
        $data = array(
            'nama_pemohon'  => $this->input->post('nama_pemohon'),
            'nip_pemohon'  => $this->input->post('nip_pemohon'),
            'pekerjaan_pemohon'  => $this->input->post('pekerjaan_pemohon'),
            'instansi_pemohon'  => $this->input->post('instansi_pemohon'),
            'alamat_pemohon' => $this->input->post('alamat_pemohon'),
            'kontak_pemohon' => $this->input->post('kontak_pemohon'),
            'jenis_permohonan' => $this->input->post('jenis_permohonan'),
            'keterangan_pemohon' => $this->input->post('keterangan_pemohon'),
            'catatan_pemohon' => $this->input->post('catatan_pemohon'),
        );
        $model->updatePermohonan($data, $id_permohonan);
        return redirect()->to( base_url('/index.php/admin/pemohon_bantuan') );

        if(!isset($_SESSION['admin'])){
			return redirect()->to( base_url('/index.php/home') );
		} //Check Session.
    }
 
    public function delete($id) //menghapus data dari database melalui model
    {
        $model = new Permohonan_model();
        $model->deletePermohonan($id);
        return redirect()->to( base_url('/index.php/admin/pemohon_bantuan') );

        if(!isset($_SESSION['admin'])){
			return redirect()->to( base_url('/index.php/home') );
		} //Check Session.
    }

    public function validasi() //fungsi untuk mengupdate keterangan pemohon menjadi Tervalidasi
    {  
 
        //helper(['form', 'url']);
         
        $model = new Permohonan_model();
 
        $id_permohonan = $this->input->post('id_permohonan');
        $validasi  = $this->input->post('keterangan_pemohon');
        
        if (isset($_POST['validasi'])) {
            $data = [
            'id_permohonan' => $id_permohonan,
            'keterangan_pemohon'  => $validasi
            ];

        }

        $save = $model->updatePermohonan($data,$id_permohonan);
        echo $data["keterangan_pemohon"];

        return redirect()->to( base_url('/index.php/admin/pemohon_bantuan') );

    }
}