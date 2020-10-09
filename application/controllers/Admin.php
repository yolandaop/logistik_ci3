<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


//$session = \Config\Services::session();  //INCLUDE SESSION

class Admin extends CI_Controller
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

		if(!isset($_SESSION['user'])){
			if(!isset($_SESSION['admin'])){
				return redirect()->to('/logistik/home');
			}
		} //Check Session.
	}
	public function bantuan_masuk() //fungsi untuk menampilkan tabel bantuan masuk admin
	{
		$model = new Bantuan_model();
        $data['bantuan'] = $model->getBantuan();
		$this->load->view('include/headerhome.php');
		$this->load->view('home/home.php');
		$this->load->view('admin/admin_bantuan_masuk.php',$data);
		$this->load->view('include/footerhome.php');

		if(!isset($_SESSION['admin'])){
			return redirect()->to('/logistik/home');
		} //Check Session.
	}
	public function distribusi() //fungsi untuk menampilkan tabel distribusi admin
	{
		$model = new Distribusi_model();
        $data['distribusi'] = $model->getDistribusi();
		$this->load->view('include/headerhome.php');
		$this->load->view('home/home.php');
		$this->load->view('admin/admin_distribusi.php', $data);
		$this->load->view('include/footerhome.php');

		if(!isset($_SESSION['admin'])){
			return redirect()->to('/logistik/home');
		} //Check Session.
	}

	public function pemohon_bantuan() //fungsi untuk menampilkan tabel permohonan admin
	{
		$model = new Permohonan_model();
        $data['permohonan'] = $model->getValidasi();
		$this->load->view('include/headerhome.php');
		$this->load->view('home/home.php');
		$this->load->view('admin/admin_data_pemohon.php',$data);
		$this->load->view('include/footerhome.php');

		if(!isset($_SESSION['admin'])){
			return redirect()->to('/logistik/home');
		} //Check Session.
	}

	public function bantuan_tersedia() //fungsi untuk menampilkan tabel bantuan keluar masuk admin
	{
		$model = new BantuanIO_model();
        $data['bantuanIO'] = $model->getBantuanIO();
		$this->load->view('include/headerhome.php');
		$this->load->view('home/home.php');
		$this->load->view('admin/admin_bantuan_tersedia.php',$data);
		$this->load->view('include/footerhome.php');

		if(!isset($_SESSION['admin'])){
			return redirect()->to('/logistik/home');
		} //Check Session.
	}

	public function form_distribusi() //fungsi untuk menampilkan form rencana distribusi admin
	{
		$model = new Permohonan_model();
		$modelIO = new BantuanIO_model();
		$data['permohonan'] = $model->getPermohonan();
		$data['bantuanIO'] = $modelIO->orderBy('id_barang', 'ASC')->findAll();
		$this->load->view('include/headerhome.php');
		$this->load->view('home/home.php');
		$this->load->view('admin/add_distribusi.php',$data);
		$this->load->view('include/footerhome.php');

		if(!isset($_SESSION['admin'])){
			return redirect()->to('/logistik/home');
		} //Check Session.
	}

    public function update_stok_bantuan() //fungsi untuk menampilkan tabel update stok admin
	{

		$model = new BantuanIO_model();
        $data['bantuanIO'] = $model->orderBy('id_barang', 'ASC')->findAll();
		$this->load->view('include/headerhome.php');
		$this->load->view('home/home.php');
		$this->load->view('admin/admin_update_stok.php',$data);
		$this->load->view('include/footerhome.php');

		if(!isset($_SESSION['admin'])){
			return redirect()->to('/logistik/home');
		} //Check Session.

	}

	//--------------------------------------------------------------------

}
