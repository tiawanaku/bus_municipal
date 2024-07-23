<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Usuarios_model');
    }

    public function index()
    {
        if ($this->session->userdata("login")) {
            redirect(base_url() . "dashboard");
        } else {
            $this->load->view('admin/login');
        }
    }

    public function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $user = $this->Usuarios_model->login($username, $password);

        if (!$user) {
            $this->session->set_flashdata('error', 'Usuario o contraseña incorrectos.');
            redirect(base_url());
        } else {
            $this->session->set_userdata('login', true);
            $this->session->set_userdata('usuario_id', $user->usu_id);
            $this->session->set_userdata('nombre', $user->nombre);
            $this->session->set_userdata('usuario', $user->usuario);
            $this->session->set_userdata('cargo', $user->cargo);
            redirect(base_url() . "dashboard"); // Redirige a tu dashboard o página principal
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }
}

