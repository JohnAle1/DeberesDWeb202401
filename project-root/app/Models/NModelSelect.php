<?php

namespace App\Models;

use CodeIgniter\Model;

class NModelSelect extends Model
{
    public function Select_Modelo_Inventario()
    {
        $variable = $this->db->query('SELECT 
    Users.id AS usuario_id, 
    Users.nombre, 
    Users.email, 
    Users.fecha_registro, 
    Posts.id AS post_id, 
    Posts.titulo, 
    Posts.contenido, 
    Posts.fecha_publicacion
FROM 
    Users
INNER JOIN 
    Posts ON Users.id = Posts.usuario_id;
');
        return $variable->getResult();
    }
}

// Hay que agregar al controlador el use App\Models\Nombre de la clase modelo;