<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lecturas extends CI_Controller
{
    public function index()
    {
        $this->load->model('Model_lecturas');

        // Obtener datos para bus 1 y bus 2
        $data['lectura_bus_1'] = $this->Model_lecturas->obtener_registros_por_bus(1);
        $data['lectura_bus_2'] = $this->Model_lecturas->obtener_registros_por_bus(2);

        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/lecturas/lista_lecturas', $data);
        $this->load->view('layouts/footer');
    }

    public function obtener_lectura_ajax()
    {
        $this->load->model('Model_lecturas');

        $bus_1_data = $this->Model_lecturas->obtener_registros_por_bus(1);
        $bus_2_data = $this->Model_lecturas->obtener_registros_por_bus(2);

        $response = array(
            'bus_1' => $bus_1_data,
            'bus_2' => $bus_2_data
        );

        header('Content-Type: application/json');
        echo json_encode($response);
    }
}
