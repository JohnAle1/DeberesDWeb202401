<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class NSeed extends Seeder
{
    public function run()
    {
        $data = [
            'inv_titulo' => 'Escobas',
            'inv_description'    => 'Armario de Escobas',
        ];
   
        // Using Query Builder
        $this->db->table('tbl_inventario')->insert($data);
    }
}