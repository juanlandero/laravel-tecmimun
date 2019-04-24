<?php

namespace App\Imports;

use App\Pais;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
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
            'nombre'        => $row[0],
            'pk_idioma'     => $row[1],
            'created_at'    => date("Y-m-d H:i:s"),
        ]);
    }  

}
