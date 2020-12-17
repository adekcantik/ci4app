<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;

class DatapnsSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            'nama' => 'Me',
            'alamat'    => 'Medan',
            'created_at' => TIME::now(),
            'updated_at' => TIME::now()
        ];

        // Simple Queries
        $this->db->query(
            "INSERT INTO datapns (nama, alamat, created_at, updated_at) VALUES(:nama:, :alamat:, :created_at:, :updated_at:)",
            $data
        );

        // Using Query Builder
        // $this->db->table('datapns')->insert($data);
    }
}
