<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Recaudo extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_recaudo');
    }

    // Mostrar la vista con lecturas del día
    public function index()
    {
        $data['lecturas'] = $this->Model_recaudo->obtenerLecturas();
        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/recaudo/lista_recaudo', $data);
        $this->load->view('layouts/footer');
    }

    // Obtener lecturas del día en formato JSON
    public function obtenerLecturasHoy()
    {
        $data['lecturas'] = $this->Model_recaudo->obtenerLecturasHoy();
        echo json_encode($data['lecturas']);
    }

    // Recibir datos desde el ESP8266
    public function receiveData()
    {
        $data = array(
            'uid' => $this->input->post('uid'),
            'busID' => $this->input->post('busID'),
            'tarjetaID' => $this->input->post('tarjetaID'),
            'saldo' => $this->input->post('saldo'),
            'lecturas_preferencial' => $this->input->post('lecturas_preferencial'),
            'lecturas_regular' => $this->input->post('lecturas_regular'),
            'saldo_total_regular' => $this->input->post('saldo_total_regular'),
            'saldo_total_preferencial' => $this->input->post('saldo_total_preferencial'),
            'saldo_total' => $this->input->post('saldo_total'),
            'timestamp' => $this->input->post('timestamp')
        );

        if (!empty($data['uid']) && !empty($data['tarjetaID'])) {
            if ($this->Model_recaudo->guardar($data)) {
                echo "Datos recibidos y guardados correctamente.";
            } else {
                echo "Error al guardar los datos.";
            }
        } else {
            echo "Datos incompletos.";
        }
    }
}
