<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_lecturas extends CI_Model
{
    public function obtener_registros_por_bus($bus_id)
    {
        $this->db->select('busID, saldo_total_regular, saldo_total_preferencial, saldo_total, timestamp');
        $this->db->from('lecturas');
        $this->db->where('busID', $bus_id);
        $this->db->where('DATE(timestamp)', date('Y-m-d'));  // Filtrar por fecha actual
        $this->db->order_by('timestamp', 'DESC');  // Ordenar por timestamp
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->row_array();  // Devolver solo un registro
    }
}
