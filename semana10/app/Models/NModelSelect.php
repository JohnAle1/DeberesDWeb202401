<?php

namespace App\Models;
use CodeIgniter\Model;

class NModelSelect extends Model
{
    public function __construct() 
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_users_with_roles() 
    {
        $this->db->select('u.usu_id, u.usu_nombre, u.usu_apellido, u.usu_correo, u.usu_fecha_registro, r.rol_nombre, r.rol_descripcion, r.rol_estado');
        $this->db->from('tbl_usuarios u');
        $this->db->join('tbl_roles r', 'u.rol_id = r.rol_id');
        $query = $this->db->get();
        return $query->result();
    }
}
?>
