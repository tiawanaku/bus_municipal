<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Usuarios_model extends CI_Model
{
    public function login($username, $password)
    {
        $this->db->where('usuario', $username);
        $this->db->where('pass', $password); // Contraseña en texto claro
        $query = $this->db->get('usuarios');
        return $query->row();
    }
}



