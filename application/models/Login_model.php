<?php defined('BASEPATH') OR exit('No direct script access allowed');
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 

class Login_model extends CI_Model
{
    protected $table = 'admin';
    protected $primaryKey = "id";
    protected $allowedFields = ['username', 'password','level'];

    public function getUser($username,$password)
    {
        $query = $this->db->query("SELECT * FROM admin WHERE username='$username' AND password='$password' AND level='2' LIMIT 1");
        return $query;
        //return $this->where(array('username' => $username, 'password' => $password, 'level' => '2'))->findAll();
    }

    public function getAdmin($username,$password)
    {
        $query = $this->db->query("SELECT * FROM admin WHERE username='$username' AND password='$password' AND level='1' LIMIT 1");
        return $query;
        //return $this->where(array('username' => $username, 'password' => $password, 'level' => '1'))->findAll();
    }



}