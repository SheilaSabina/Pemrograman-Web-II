<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Login extends Controller
{
public function index()
{
    helper('form');
    $session = session();
    $session->remove('_ci_old_input');
    echo view('auth/login');
}

public function auth()
{
    helper(['form']);
    $session = session();
    $model = new UserModel();

    $username = $this->request->getPost('username');
    $password = $this->request->getPost('password');

    if (empty($username) || empty($password)) {
        $session->setFlashdata('error', 'Username dan password wajib diisi');
        return redirect()->to('/login')->withInput();
    }

    $user = $model->where('username', $username)->first();

    if ($user) {
        if (password_verify($password, $user['password'])) {
            $sessionData = [
                'user_id'   => $user['id'],
                'username'  => $user['username'],
                'logged_in' => true,
            ];
            $session->set($sessionData);
            return redirect()->to('/dashboard');
        } else {
            $session->setFlashdata('error', 'Password salah');
            return redirect()->to('/login')->withInput();
        }
    } else {
        $session->setFlashdata('error', 'Username tidak ditemukan. Silakan daftar terlebih dahulu.');
        return redirect()->to('/login')->withInput();
    }
}

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}
