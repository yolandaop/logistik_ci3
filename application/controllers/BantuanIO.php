<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//$session = \Config\Services::session();  //INCLUDE SESSION, jangan dihapus.

class BantuanIO extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("bantuanIO_model");
        $this->load->library('form_validation');
    }

    public function index() //menampilkan tabel bantuaniIO
    {
        return redirect()->to( base_url('/home/bantuan_tersedia') );
    }

    public function tambah_jenis() //menampilkan form tambah jenis barang admin
    {    
        $this->load->view('include/headerhome.php');
	    $this->load->view('home/home.php');
        $this->load->view('admin/add_barang');
	    $this->load->view('include/footerhome.php');
        //return view('tambah_jenis_bantuan');

        if(!isset($_SESSION['admin'])){
			return redirect()->to('/logistik/home');
		} //Check Session.
    }

    public function simpan_jenis() //menyimpan data ke database
    {  
 
        helper(['form', 'url']);
         
        $model = new BantuanIO_model();
 
        $data = [
 
            'jenis_barang' => $this->request->getVar('jenis_barang'),
            'satuan'  => $this->request->getVar('satuan'),
            'bantuan_masuk'  => $this->request->getVar('bantuan_masuk'),
            'bantuan_keluar'  => $this->request->getVar('bantuan_keluar'),
            'stok'  => $this->request->getVar('stok'),
            'asumsi_harga'  => $this->request->getVar('asumsi_harga'),
            ];
 
        $save = $model->insert($data);
 
        return redirect()->to( base_url('admin/bantuan_tersedia') );
    }


    public function edit($id_barang=null) //menampilkan form edit barang admin
    {
      
        $model = new BantuanIO_model();
 
        $data['bantuanIO_t'] = $model->getBantuanIO($id_barang);

        $this->load->view('include/headerhome.php');
	    $this->load->view('home/home.php');
        $this->load->view('admin/edit_bantuanio', $data);
        $this->load->view('include/footerhome.php');
     
        if(!isset($_SESSION['admin'])){
            return redirect()->to('/logistik/home');
        } //Check Session.
 
    }



    public function update() //mengupdate data ke database (CRUD biasa)
    {  
 
        helper(['form', 'url']);
         
        $model = new BantuanIO_model();
 
        $id_barang = $this->request->getVar('id_barang');
 
        $data = [
 
            'jenis_barang' => $this->request->getVar('jenis_barang'),
            'satuan'  => $this->request->getVar('satuan'),
            'bantuan_masuk'  => $this->request->getVar('bantuan_masuk'),
            'bantuan_keluar'  => $this->request->getVar('bantuan_keluar'),
            'stok'  => $this->request->getVar('stok'),
            'asumsi_harga'  => $this->request->getVar('asumsi_harga'),
 			];
        $save = $model->update($id_barang,$data);
 		return redirect()->to( base_url('admin/bantuan_tersedia') );
    }


    public function delete($id_barang = null) //menghapus data dari database
    {
 
        $model = new BantuanIO_model();
 
        $data['bantuanIO_1'] = $model->where('id_barang', $id_barang)->delete();
        return redirect()->to( base_url('admin/bantuan_tersedia') );
     
    }

    public function aksi_update_stok_bantuan() //aksi untuk mengupdate stok barang masuk atau keluar admin secara otomatis
	{
		helper(['form', 'url']);
         
        $model = new bantuanIO_model();
 
        $id_barang = $this->request->getVar('id_barang');
        $perubahan  = $this->request->getVar('nilai');
        $stok_asli  = $this->request->getVar('stok_asli');
        $masuk_asli  = $this->request->getVar('masuk_asli');
		$keluar_asli  = $this->request->getVar('keluar_asli');
		echo $id_barang;

		if (isset($_POST['Masuk'])) {
            $stok_now = $stok_asli + $perubahan;
            $masuk_now = $masuk_asli + $perubahan;

            $data = [
            'bantuan_masuk'  => $masuk_now,
            'stok'  => $stok_now
            ];

        }
        elseif (isset($_POST['Keluar'])) {
            $stok_now = $stok_asli - $perubahan;
            $keluar_now = $keluar_asli + $perubahan;

            $data = [
            'bantuan_keluar'  => $keluar_now,
            'stok'  => $stok_now
            ];
        }
        $save = $model->update($id_barang,$data);

        return redirect()->to( base_url('/admin/update_stok_bantuan') );
	}

}