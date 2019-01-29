<?php

namespace App\Imports;

use App\Pais;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;

class PaisImport implements ToModel
{

    use Importable;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Pais([
            'nombre'=>$row[0]
        ]);
    }
}
