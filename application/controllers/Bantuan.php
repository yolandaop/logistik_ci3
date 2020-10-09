<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
use CodeIgniter\Controller;
use App\Models\Bantuan_model;
use App\Models\BantuanIO_model;

//$session = \Config\Services::session();  //INCLUDE SESSION

class Bantuan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("bantuan_model");
        $this->load->library('form_validation');
    }

    public function index() //menampilkan tabel bantuan
    {
        return redirect()->to( base_url('/home/bantuan_masuk') );
    }
 
    public function add_new() //menampilkan form input bantuan
    {
        $model = new BantuanIO_model();
        $data['bantuanIO'] = $model->orderBy('id_barang', 'ASC')->findAll();
        $this->load->view('include/headerhome.php');
	    $this->load->view('home/home.php');
        $this->load->view('home/form_pemberi_bantuan',$data);
	    $this->load->view('include/footerhome.php');
    }
 
    public function save() //menyimpan data ke database yang dikirimkan ke model + Auto Update Data
    {
        $model = new Bantuan_model();
        $modelIO = new bantuanIO_model();
        $list = $this->request->getPost('list');
        $list_in = $this->request->getPost('list_in');
        $list_stok = $this->request->getPost('list_stok');
        $list_sat = $this->request->getPost('list_sat');
        $list_id = $this->request->getPost('list_id');

        $bantuannya = "";

        $datanya =  explode(",", $list);
        $masuknya =  explode(",", $list_in);
        $stoknya =  explode(",", $list_stok);
        $satuannya =  explode(",", $list_sat);
        $idnya =  explode(",", $list_id);
        $index = 0;
        foreach($datanya as $jenis) {
            $jumlah = $this->request->getPost($jenis);
            $jumlah = +$jumlah;
            $dataIO['bantuan_masuk'] = $masuknya[$index] + $jumlah;
            $dataIO['stok'] = $stoknya[$index] + $jumlah ;
            if($jumlah>0){
            $bantuannya = $bantuannya.$jenis." ".$jumlah." ".$satuannya[$index].", " ;
            }
            $modelIO->update($idnya[$index],$dataIO);
            $index++;
        }
        $bantuannya = substr($bantuannya, 0, -2);
        
        $data = array(
            'nama'  => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'kontak' => $this->request->getPost('kontak'),
            'jenis_bantuan' => $bantuannya,
            'catatan' => $this->request->getPost('catatan'),
        ); 
        $model->saveBantuan($data);
        
        return redirect()->to('/logistik/home/bantuan_masuk');
    }
 
    public function edit($id) //menampilkan form edit bantuan admin
    {
        $model = new Bantuan_model();
        $data['bantuan'] = $model->getBantuan($id)->getRow();
        $this->load->view('include/headerhome.php');
		$this->load->view('home/home.php');
        $this->load->view('admin/edit_bantuan', $data);
        $this->load->view('include/footerhome.php');
        
        if(!isset($_SESSION['admin'])){
			return redirect()->to('/logistik/home');
		} //Check Session.
    }
 
    public function update() //mengupdate data ke database melalui model
    {
        $model = new Bantuan_model();
        $id = $this->request->getPost('id_bantuan');
        $data = array(
            'nama'  => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'kontak' => $this->request->getPost('kontak'),
            'jenis_bantuan' => $this->request->getPost('jenis_bantuan'),
            'catatan' => $this->request->getPost('catatan'),
        );
        $model->updateBantuan($data, $id);
        return redirect()->to('/logistik/admin/bantuan_masuk');

        if(!isset($_SESSION['admin'])){
			return redirect()->to('/logistik/home');
		} //Check Session.
    }
 
    public function delete($id) //menghapus data dari database melalui model
    {
        $model = new Bantuan_model();
        $model->deleteBantuan($id);
        return redirect()->to('/logistik/admin/bantuan_masuk');

        if(!isset($_SESSION['admin'])){
			return redirect()->to('/logistik/home');
		} //Check Session.
    }
}