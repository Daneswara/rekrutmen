<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function db()
    {
        $db = \Config\Database::connect();
        return $db;
    }

    public function index()
    {
        $mst_sekolah = $this->db()->query("SELECT * FROM mst_sekolah")->getResult();
        //    dd($mst_sekolah);
        //    echo json_encode($mst_sekolah);
        return view('index', $mst_sekolah);
    }
    public function register_submit()
    {

        if (!$this->validate([
            'username' => [
                'rules' => 'required|min_length[4]|max_length[20]|is_unique[users.username]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 20 Karakter',
                    'is_unique' => 'Username sudah digunakan sebelumnya'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[6]|max_length[50]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 50 Karakter',
                ]
            ],
            'password_conf' => [
                'rules' => 'matches[password]',
                'errors' => [
                    'matches' => 'Konfirmasi Password tidak sesuai dengan password',
                ]
            ],
            'fullname' => [
                'rules' => 'required|min_length[4]|max_length[100]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 100 Karakter',
                ]
            ],
            'email' => [
                'rules' => 'required|min_length[4]|max_length[50]|is_unique[users.email]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 50 Karakter',
                    'is_unique' => 'Email sudah digunakan sebelumnya'
                ]
            ],
            'phone' => [
                'rules' => 'required|min_length[10]|is_unique[users.phone]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 10 Karakter',
                    'is_unique' => 'Nomor telephone sudah digunakan sebelumnya'
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $telp = preg_replace("/[^0-9]/", "", $this->request->getVar('phone'));
        $telp = preg_replace('/^0/', '62', $telp);
        $telp = preg_replace('/^\+62/', '62', $telp);
        $telp = preg_replace('/^8/', '628', $telp);
        $this->db()->table('users')->insert([
            'username' => $this->request->getVar('username'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
            'fullname' => $this->request->getVar('fullname'),
            'phone' => $telp,
            'role_id' => 3,
            'is_active' => TRUE,
            'email' => $this->request->getVar('email'),
            'iplogin' => $this->getIPAddress(),
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s"),
        ]);
        return redirect()->to('/');
    }
    public function login_submit()
    {
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        // $dataUser = $this->db()->table('users')->where("username", $username)->getFirstRow();
        
        $dataUser = $this->db()->query("SELECT * FROM users where username = '$username'")->getFirstRow();
        if ($dataUser) {
            if (password_verify($password, $dataUser->password)) {
                session()->set([
                    'username' => $dataUser->username,
                    'fullname' => $dataUser->fullname,
                    'role_id' => $dataUser->role_id,
                    'user_id' => $dataUser->user_id,
                    'logged_in' => TRUE
                ]);

                $this->db()->table('users')->where('username', $username)->update([
                    'iplogin' => $this->getIPAddress(),
                    "last_login" => date("Y-m-d H:i:s"),
                ]);
                if($dataUser->role_id==1){
                    return redirect()->to(base_url('/admin'));
                }else{
                    return redirect()->to(base_url('/profile'));
                }
            } else {
                session()->setFlashdata('error', 'Username & Password Salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'Username & Password Salah');
            return redirect()->back();
        }
        // return redirect()->to('/profile');
    }
    public function getIPAddress()
    {
        //whether ip is from the share internet  
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        }
        //whether ip is from the proxy  
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        //whether ip is from the remote address  
        else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }
}
