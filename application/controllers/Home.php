<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//$session = \Config\Services::session();  //INCLUDE SESSION, jangan dihapus.

class Home extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
		$this->load->model("bantuan_model");
		$this->load->model("permohonan_model");
		$this->load->model("distribusi_model");
		$this->load->model("bantuanIO_model");
        $this->load->library('form_validation');
	}
	
	public function index() //fungsi untuk menampilkan halaman utama
	{
		$this->load->view('include/headerhome.php');
		$this->load->view('home/home.php');
		$this->load->view('include/footerhome.php');
	}
	public function bantuan_masuk() //fungsi untuk menampilkan tabel bantuan masuk
	{
		$model = new Bantuan_model(); //memanggil semua function pada Bantuan_model.php
        $data['bantuan'] = $model->getBantuan();
		$this->load->view('include/headerhome.php');
		$this->load->view('home/home.php');
		$this->load->view('home/tabel_bantuan_masuk.php',$data);
		$this->load->view('include/footerhome.php');
	}
	public function distribusi() //fungsi untuk menampilkan tabel distribusi
	{
		$model = new Distribusi_model(); 
        $data['distribusi'] = $model->getDistribusi();
		$this->load->view('include/headerhome.php');
		$this->load->view('home/home.php');
		$this->load->view('home/tabel_distribusi.php', $data);
		$this->load->view('include/footerhome.php');
	}
	public function pemohon_bantuan() //fungsi untuk menampilkan tabel permohonan
	{
		$model = new Permohonan_model();
        $data['permohonan'] = $model->getPermohonan();
		$this->load->view('include/headerhome.php');
		$this->load->view('home/home.php');
		if(isset($_SESSION['user'])){
			$this->load->view('admin/admin_validasi.php',$data);
		}
		else{
			$this->load->view('home/tabel_data_pemohon.php',$data);
		} //Check Session.
		$this->load->view('include/footerhome.php');
	}
	public function bantuan_tersedia() //fungsi untuk menampilkan tabel bantuan masuk keluar
	{
		$model = new BantuanIO_model(); 
        $data['bantuanIO'] = $model->getBantuanIO();
		$this->load->view('include/headerhome.php');
		$this->load->view('home/home.php');
		$this->load->view('home/tabel_bantuan_tersedia.php',$data);
		$this->load->view('include/footerhome.php');
	}

	public function form_permohonan() //fungsi untuk menampilkan form tambah permohonan
	{
		$this->load->view('include/headerhome.php');
		$this->load->view('home/home.php');
		$this->load->view('home/form_permohonan.php');
		$this->load->view('include/footerhome.php');
	}
	public function add_new()
	{
		$this->load->view('include/headerhome.php');
		$this->load->view('home/home.php');
		$this->load->view('home/Add_pemohon.php');
		$this->load->view('include/footerhome.php');
	}

	public function saveBantuan() //menyimpan data ke database yang dikirimkan ke model
    {
        $model = new Permohonan_model();
        $data = array(
            'nama_pemohon'  => $this->request->getPost('nama_pemohon'),
            'nip_pemohon'  => $this->request->getPost('nip_pemohon'),
            'pekerjaan_pemohon'  => $this->request->getPost('pekerjaan_pemohon'),
            'instansi_pemohon'  => $this->request->getPost('instansi_pemohon'),
            'alamat_pemohon' => $this->request->getPost('alamat_pemohon'),
            'kontak_pemohon' => $this->request->getPost('kontak_pemohon'),
            'jenis_permohonan' => $this->request->getPost('jenis_permohonan'),
            'catatan_pemohon' => $this->request->getPost('catatan_pemohon'),
        );
        $model->savePermohonan($data);
        return redirect()->to('/logistik/home/pemohon_bantuan');
    }
	//--------------------------------------------------------------------

}
