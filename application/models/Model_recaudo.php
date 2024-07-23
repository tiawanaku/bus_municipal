<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_recaudo extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // Obtener todas las lecturas
    public function obtenerLecturas()
    {
        $query = $this->db->get('lecturas');
        return $query->result();
    }


    // Guardar una nueva lectura
    public function guardar($data)
    {
        return $this->db->insert('lecturas', $data);
    }
}

