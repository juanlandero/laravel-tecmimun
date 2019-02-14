<?php

namespace App\Exports;

use App\Paiscomite;
use App\Pais;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;


class PaiscomiteExport implements FromQuery, WithHeadings, ShouldAutoSize
{
    use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */


    public function __construct(int $id_comite)
    {
        $this->comite = $id_comite;
    }

    public function headings(): array
    {
        return [
            'ID',
            'ALUMNO',
            'CÓDIGO',
            'PAÍS',
            'ESCUELA',
            'COMITÉ',
        ];
    }

    public function query()
    {

        $query = Paiscomite::query()
                            ->join('comites', 'paiscomites.pk_comite', '=', 'comites.id')
                            ->join('pais', 'paiscomites.pk_pais', '=', 'pais.id')
                            ->leftJoin('alumnos', 'alumnos.pk_inscripcion', '=', 'paiscomites.id')
                            ->leftJoin('escuelas', 'escuelas.id', '=', 'alumnos.pk_escuelas')
                            ->select('paiscomites.id',
                                    'alumnos.nombre as alumno',
                                    'alumnos.codigo',
                                    'pais.nombre as pais',
                                    'escuelas.nombre as escuela',
                                    'comites.nombre as comite')
                            ->where('paiscomites.pk_comite', $this->comite);

        return $query;
    }
}
