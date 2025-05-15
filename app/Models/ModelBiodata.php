<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelBiodata extends Model
{
    public function getBiodata()
    {
        return [
            'nama'      => 'Sheila Sabina',
            'nim'       => '2310817220028',
            'prodi'     => 'Teknologi Informasi',
            'hobi'      => 'Olahraga, Traveling',
            'skill'     => 'Public Speaking, UI/UX, Coding',
            'gambar'    => 'sheila.jpg'
        ];
    }
}