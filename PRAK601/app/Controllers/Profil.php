<?php

namespace App\Controllers;

use App\Models\ModelBiodata;

class Profil extends BaseController
{
    public function index()
    {
        $model = new ModelBiodata();
        $data['biodata'] = $model->getBiodata();
        
        return view('profil', $data);
    }
}