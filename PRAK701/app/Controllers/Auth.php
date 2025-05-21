<?php 

namespace App\Controllers;
use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        return view('auth/login');
    }

    public function loginProcess()
    {
        $session = session();
        $model = new UserModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $model->where('username', $username)->first();

        if ($user && password_verify($password, $user['password'])) {
            $session->set([
                'user_id'   => $user['id'],
                'username'  => $user['username'],
                'logged_in' => true
            ]);
            return redirect()->to('/dashboard');
        } else {
            return redirect()->back()->with('error', 'Username atau Password salah');
        }
    }

    public function register()
    {
        return view('auth/register');
    }

public function registerProcess()
{
    $model = new UserModel();

    $username = $this->request->getPost('username');
    $email = $this->request->getPost('email');
    $password = $this->request->getPost('password');
    $confirmPassword = $this->request->getPost('confirm_password');

    if (empty($username) || empty($email) || empty($password) || empty($confirmPassword)) {
        return redirect()->back()->with('error', 'Semua field wajib diisi.');
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return redirect()->back()->with('error', 'Format email tidak valid.');
    }

    if ($password !== $confirmPassword) {
        return redirect()->back()->with('error', 'Konfirmasi password tidak cocok.');
    }

    if ($model->where('username', $username)->first()) {
        return redirect()->back()->with('error', 'Username sudah digunakan.');
    }

    $data = [
        'username' => $username,
        'email'    => $email,
        'password' => password_hash($password, PASSWORD_DEFAULT),
    ];

    $model->insert($data);
    return redirect()->to('/login')->with('success', 'Registrasi berhasil. Silakan login.');
}

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}