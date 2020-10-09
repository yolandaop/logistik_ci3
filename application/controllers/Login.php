<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//$session = \Config\Services::session();  //INCLUDE SESSION, jangan dihapus.

class login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
		$this->load->model("bantuan_model");
		$this->load->model("permohonan_model");
		$this->load->model("distribusi_model");
        $this->load->model("bantuanIO_model");
        $this->load->model("login_model");
        $this->load->library('form_validation');
    }
    
	public function index() //fungsi untuk menampilkan halaman login admin
	{
		$this->load->view('include/headerhome.php');
		$this->load->view('login_page.php');
		$this->load->view('include/footerhome.php');
    }
    public function cek_login()
	{   
        $username = $this->input->post('username');
        $password  = $this->input->post('password');

        $model = new Login_model(); 
        $result = $model->getUser($username,$password);
        // echo count($result);
        //$count = count($result);

        if ($result->num_rows() > 0){
            //session()->start();
            $_SESSION['user'] = "$username";
            return redirect()->to( base_url('index.php/home') );
        }
        else{
            $result = $model->getAdmin($username,$password);
            if($result->num_rows() > 0){
                //session()->start();
                $_SESSION['admin'] = "$username";
                return redirect()->to( base_url('index.php/home') );
            }
            else{
                return redirect()->to( base_url('index.php/login') );
            }
        }
    }
    
    // --------------------Debugging Section-------------------

    public function cek_sesi(){ //tidak terpakai
        $session->set('user', 'admin');
        $user = $session->get('user');
        echo $user;
    }
    public function start(){ //tidak terpakai
        session()->start();
        $_SESSION['user'] = "admin";
    }
    public function logout(){
        session_destroy();
        return redirect()->to( base_url('index.php/login') );
    }
    public function cek(){ //tidak terpakai
        echo isset($_SESSION['user']);
        // $user = $_SESSION['user'];
        // echo $user;
    }

}
