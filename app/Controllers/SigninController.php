<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UserModel;

class SigninController extends Controller
{
    public function index()
    {
        helper(['form']);
        echo view('signin');
    }

    public function loginAuth()
    {
        $session = session();

        $userModel = new UserModel();

        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $data = $userModel->where('email', $email)->first();

        if($data){
            $pass = $data['password'];
            $authenticatePassword = password_verify($password, $pass);
            if($authenticatePassword){
                $ses_data = [
                    'id' => $data['id'],
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'id_rango' => $data['id_rango'],
                    'isLoggedIn' => TRUE
                ];

                $session->set($ses_data);
                $r=($data['id_rango']);
                if ($r == 1) 
                {
                    return redirect()->to('/profile');
                } 
                elseif ($r == 2)
                {
                    return redirect()->to('/admin');
                }
            }
            else{
                $session->setFlashdata('msg', 'Password is incorrect.');
                return redirect()->to('/signin');
            }

        }else{
            $session->setFlashdata('msg', 'Email does not exist.');
            return redirect()->to('/signin');
        }
    }
    public function logout()
    {
        $session = session();

        if ($session->get('isLoggedIn')) {
            $session->destroy();
        }

        return redirect()->to('/signin');
    }
}