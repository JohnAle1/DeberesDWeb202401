<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class NSeed extends Seeder
{
    public function run()
    {
        $data = [
            'inv_title' => 'recojedores',
            'inv_description'    => 'armario de recojedores',
        ];

        // Using Query Builder
        $this->db->table('tbl_inventario')->insert($data);
    }
}