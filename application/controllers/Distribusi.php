<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
use CodeIgniter\Controller;
use App\Models\Distribusi_model;
use App\Models\Permohonan_model;
use App\Models\BantuanIO_model;

$session = \Config\Services::session();  //INCLUDE SESSION

class Distribusi extends CI_Controller
{
    public function index() //menampilkan tabel distribusi
    {
        return redirect()->to( base_url('/home/distribusi') );
    }
 
    public function add_new() //menampilkan form input distribusi
    {
        return redirect()->to( base_url('/admin/form_distribusi') );

        if(!isset($_SESSION['admin'])){
			return redirect()->to('/logistik/home');
		} //Check Session.
    }

    public function save() //menyimpan data ke database yang dikirimkan ke model
    {
        $model = new Distribusi_model();
        $modelIO = new bantuanIO_model();
        $list = $this->request->getPost('list');
        $list_out = $this->request->getPost('list_out');
        $list_stok = $this->request->getPost('list_stok');
        $list_sat = $this->request->getPost('list_sat');
        $list_id = $this->request->getPost('list_id');

        $bantuannya = "";

        $datanya =  explode(",", $list);
        $masuknya =  explode(",", $list_out);
        $stoknya =  explode(",", $list_stok);
        $satuannya =  explode(",", $list_sat);
        $idnya =  explode(",", $list_id);
        $index = 0;
        foreach($datanya as $jenis) {
            $jumlah = $this->request->getPost($jenis);
            $jumlah = +$jumlah;
            $dataIO['bantuan_keluar'] = $masuknya[$index] + $jumlah;
            $dataIO['stok'] = $stoknya[$index] - $jumlah ;
            
            if($jumlah>0){
            $bantuannya = $bantuannya.$jenis." ".$jumlah." ".$satuannya[$index].", " ;
            }
            $modelIO->update($idnya[$index],$dataIO);
            $index++;
        }
        $bantuannya = substr($bantuannya, 0, -2);
        $data = array(
            'jumlah_paket' => $this->request->getPost('jumlah_paket'),
            'jenis_distribusi' => $bantuannya,
            'keterangan_distribusi' => $this->request->getPost('keterangan_distribusi'),
            'id_permohonan' => $this->request->getPost('id_permohonan'),
        );
        
        $model->saveDistribusi($data);
        return redirect()->to('/logistik/admin/distribusi');
    }
 
    public function edit($id) //menampilkan form edit distribusi admin
    {
        $model = new Distribusi_model();
        $data['distribusi'] = $model->getDistribusi($id)->getRow();
        $model2 = new Permohonan_model();
        $data['permohonan'] = $model2->getPermohonan();
        $this->load->view('include/headerhome.php');
		$this->load->view('home/home.php');
        $this->load->view('admin/edit_distribusi', $data);
        $this->load->view('include/footerhome.php');
        
        if(!isset($_SESSION['admin'])){
			return redirect()->to('/logistik/home');
		} //Check Session.
    }
 
    public function update() //mengupdate data ke database melalui model
    {
        $model = new Distribusi_model();
        $id = $this->request->getPost('id_distribusi');
        $data = array(
            'jumlah_paket' => $this->request->getPost('jumlah_paket'),
            'jenis_distribusi' => $this->request->getPost('jenis_distribusi'),
            'keterangan_distribusi' => $this->request->getPost('keterangan_distribusi'),
            'id_permohonan' => $this->request->getPost('id_permohonan'),
        );
        $model->updateDistribusi($data, $id);
        return redirect()->to('/logistik/admin/distribusi');
    }
 
    public function delete($id) //menghapus data dari database melalui model
    {
        $model = new Distribusi_model();
        $model->deleteDistribusi($id);
        return redirect()->to('/logistik/admin/distribusi');
    }
}