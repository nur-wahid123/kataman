<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\API\ResponseTrait;

class Home extends BaseController
{
    use ResponseTrait;
    public function index(): string
    {
        return view('index');
    }
    public function registerIn()
    {
        $nama = $this->request->getVar('nama');
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $confPassword = $this->request->getVar('confPassword');
        if ($password != $confPassword) return redirect()->back()->with('error', "Confirmation Password is not match with the password");
        $data = new UserModel();
        $data_email = $data->select('email')->findAll();
        foreach ($data_email as $key) {
            if ($key['email'] == $email) {
                return redirect()->back()->with('error', "Email that you provide is already used, try another");
            }
        }
        $newUser = [
            'nama' => $nama,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT),
        ];
        $data->insert($newUser);
        $subject = "Pemberitahuan Akun Terhadap email anda";
        $message = view('registration_email',[
            'username' => $email,
            'name' => $nama,
            'password' => $password,
        ]);
        // $message = "Berikut adalah informasi login akun anda\n\nUsername\t: $email\nPassword\t: $password";
        mail($email, $subject, $message);
        return redirect('login');
    }
    public function register()
    {
        return view('register');
    }
    public function loginn()
    {
        return redirect('login')->with('error', "Silahkan Login Dulu ya");
    }
    public function login()
    {
        return view('login');
    }
    public function loginIn()
    {
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $userModel = new UserModel();
        $dataUser = $userModel->where('email', $email)->first();
        if ($dataUser === null) return redirect('login')->with('error', "Maaf Email anda tidak ditemukan");
        if (!password_verify($password, $dataUser['password'])) return redirect('login')->with('error', "Password yang anda masukkan salah");
        session()->set('user', $dataUser);
        return redirect()->back();
    }
    public function dashboard()
    {
        return view('dashboard');
    }
    public function logout()
    {
        session()->remove('user');
        return redirect('/');
    }
    public function notIndex()
    {
        $userData = [
            'id' => 123,
            'username' => 'john_doe',
            'email' => 'john@example.com',
        ];

        return $this->respond($userData, 404);
        // return view('notIndex');
    }
}
